<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buanderie;
use Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;





class BuanderieController extends Controller
{

    public function index()
    {
        $buanderies = Buanderie::orderBy('id', 'desc')->get();
            
            return view('buanderie.index', compact('buanderies'));
    }

    // public function indexResClient() 
    // {
    //     $userEmail = Auth::user()->email;
    //     $buanderies = Buanderie::whereHas('user', function($query) use ($userEmail) {
    //         $query->where('email', $userEmail);
    //     })->orderBy('date')->orderBy('time')->get();

    //     return view('client.dashboard', compact('buanderies'));
    // }


    public function indexClient() 
    {
        $userEmail = Auth::user()->email;
        $buanderies = Buanderie::whereHas('client', function($query) use ($userEmail) {
            $query->where('email', $userEmail);
        })->get();

        return view('client.buanderies', compact('buanderies'));
    }

    public function store(Request $request)
    {

        // return $request->all();
        $validatedData = $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'couette_double' => 'nullable|integer|min:0',
            'couette_queen' => 'nullable|integer|min:0',
            'couette_king' => 'nullable|integer|min:0',
            'oreiller' => 'nullable|integer|min:0',
            'sac' => 'nullable|integer|min:0',
            'collecte' => 'required',
            'livraison' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'zip' => 'required',
            'instruction' => 'required',
        ]);

        // $validatedData['summary'] = $request->input('summary');
         $totalPrice = ($request->couette_double * 17) + ($request->couette_queen * 20) +
                  ($request->couette_king * 23) + 
                  ($request->oreiller * ($request->oreiller >= 3 ? 15 : 20));

        try {

            $client = new Client();
            $client->name = $request->input('name');
            $client->email = $request->input('email');
            $client->phone = $request->input('phone');
            $client->address = $request->input('adresse');
            $client->city = $request->input('ville');
            $client->zip = $request->input('zip');
            $client->save();

             $buanderieForm = new Buanderie($validatedData);
             $buanderieForm->client_id = $client->id;
             $buanderieForm->summary = $totalPrice;
             $buanderieForm->save();

             // Create user if not exists and generate random password
            $user = User::where('email', $request->input('email'))->first();
            $generatedPassword = null;
            if (!$user) {
                $generatedPassword = Str::random(16);
                // Create a new user without a password
                $user = User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($generatedPassword),
                ]);

                // Assign "staff" role to the new user
                $user->assignRole('staff');

                // Notify the user with the generated password
                $user->notify(new \App\Notifications\UserCreated($generatedPassword));
            }
        } catch (\Exception $e) {
            Log::error('Buanderie form submission failed: '.$e->getMessage());
            return back()->withErrors(['msg' => 'Something went wrong, please try again.']);
        }

        return redirect()->route('buanderie.success');
    }
}
