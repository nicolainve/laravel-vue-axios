<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all()->toArray();
        
        return array_reverse($cars);
    }

    public function add(Request $request)
    {
        $car = new Car([
            'brand' => $request->input('brand'),
            'model' => $request->input('model')
        ]);
        $car->save();

        return response()->json('The Car successfully added');
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return response()->json($car);
    }

    public function update($id, Request $request)
    {
        $car = Car::find($id);
        $car->update($request->all());

        return response()->json('The Car successfully updated');
    }
}
