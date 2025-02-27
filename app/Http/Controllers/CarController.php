<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Controllers;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $types = Type::all();
        return view('cars.create', compact('types'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'type_id' => 'required',
            'photo' => 'required|image',
            'cost_per_day' => 'required',
            'year' => 'required',
            'license_plate' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs('src/images/car', $imageName, 'public');
            $validatedData['photo'] = $imageName;
        }
    
        Car::create($validatedData);
    
        return redirect('/cars')->with('success', 'Car added successfully!');
    }

    public function edit(Car $car)
    {
        $types = Type::all();
        return view('cars.edit', compact('car', 'types'));
    }

    public function update(Request $request, Car $car)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'type_id' => 'required',
            'photo' => 'nullable|image',
            'cost_per_day' => 'required',
            'year' => 'required',
            'license_plate' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            // Delete the old image
            Storage::disk('public')->delete('src/images/car/' . $car->photo);
    
            // Upload the new image
            $imageName = time() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs('src/images/car', $imageName, 'public');
            $validatedData['photo'] = $imageName;
        }

        $car->update($validatedData);

        return redirect('/cars')->with('success', 'Car updated successfully!');
    }

    public function destroy(Car $car)
    {
        $photo = Storage::disk('public')->delete('src/images/car/' . $car->photo);

        $car->delete($photo);
        return redirect('/cars')->with('success', 'Car deleted successfully!');
    }
}
