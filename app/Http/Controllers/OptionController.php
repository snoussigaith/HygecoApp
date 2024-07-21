<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Service;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::get();
        return view('option.index', ['options' => $options]);
    }
     public function create()
    {
        return view('option.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|decimal:2',
            
        ]);

        $option = Option::create([
                        'name' => $request->name,
                        'price' => $request->price,
                        
                    ]);

        

        return redirect('/option')->with('status','Option created successfully with roles');
    }
    public function edit(Option $option)
    {
        return view('option.edit', [
            'option' => $option,
            
        ]);
    }

     public function update(Request $request, Option $option)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|decimal:2',
        ]);

        $option->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        // Recalculate prices of services using this option
        $services = Service::all();

        foreach ($services as $service) {
            $serviceOptions = json_decode($service->options, true);
            $totalPrice = $service->price;

            if (is_array($serviceOptions)) {
                foreach ($serviceOptions as &$serviceOption) {
                    if ($serviceOption['id'] == $option->id) {
                        $serviceOption['price'] = $option->price;
                    }
                    $totalPrice += $serviceOption['price'];
                }
            }

            $service->update([
                'options' => json_encode($serviceOptions),
                'total_price' => $totalPrice,
            ]);
        }

        return redirect('/option')->with('status', 'Option updated successfully with roles');
    }

    public function destroy($optionId)
    {
        $option = Option::findOrFail($optionId);
        $option->delete();

        return redirect('/option')->with('status','Option Delete Successfully');
    }
}
