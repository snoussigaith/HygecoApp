<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Option;

class ServiceController extends Controller
{
     public function index()
    {
        $options = Option::all();
        $services = Service::all();
        
        // Calculate total price including options for each service
        foreach ($services as $service) {
            $service->options = json_decode($service->options, true);
            $totalPrice = $service->price;
            
            if (is_array($service->options)) {
                foreach ($service->options as $option) {
                    $totalPrice += $option['price'];
                }
            }
            $service->total_price = $totalPrice;
        }

        return view('menage-service.index', [
            'services' => $services,
            'options' => $options,
        ]);
    }
    public function getOptions($id)
    {
        $service = Service::with('options')->findOrFail($id);
        return response()->json($service->options);
    }

    public function create()
    {
        $options = Option::all();
        return view('menage-service.create', ['options' => $options]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|decimal:2',
            'options' => 'nullable|array',
            'options.*' => 'exists:options,id'
        ]);

        $price = $request->price;
        $options = [];

        if ($request->options) {
            foreach ($request->options as $optionId) {
                $option = Option::findOrFail($optionId);
                // $price += $option->price;
                $options[] = [
                    'id' => $optionId,
                    'name' => $option->name,
                    'price' => $option->price
                ];
            }
        }

        $service = Service::create([
            'name' => $request->name,
            'price' => $price,
            'options' => json_encode($options) // Store options as JSON
        ]);

        return redirect('/service')->with('status', 'Service created successfully with options');
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|decimal:2',
            'options' => 'nullable|array',
            'options.*' => 'exists:options,id'
        ]);

        $price = $request->price;
        $options = [];

        if ($request->options) {
            foreach ($request->options as $optionId) {
                $option = Option::findOrFail($optionId);
                // $price += $option->price;
                $options[] = [
                    'id' => $optionId,
                    'name' => $option->name,
                    'price' => $option->price
                ];
            }
        }

        $service->update([
            'name' => $request->name,
            'price' => $price,
            'options' => json_encode($options) // Update options as JSON
        ]);

        return redirect('/service')->with('status', 'Service updated successfully with options');
    }

    public function edit(Service $service)
    {
        $options = Option::all();
        if (is_string($service->options)) {
                $service->options = json_decode($service->options, true);
            }
        return view('menage-service.edit', [
            'service' => $service,
            'options' => $options,
        ]);
    }

    public function destroy($serviceId)
    {
        $service = Service::findOrFail($serviceId);
        $service->delete();

        return redirect('/service')->with('status', 'Service deleted successfully');
    }
}
