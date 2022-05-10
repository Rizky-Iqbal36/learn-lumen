<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function createCar(Request $req)
    {
        $car = Car::create($req->all());

        return response()->json($car);
    }
    public function updateCar(Request $req, $id)
    {
        $car = Car::find($id);
        $car->make = $req->input('make');
        $car->model = $req->input('model');
        $car->year = $req->input('year');
        $car->save();

        return response()->json($car);
    }
    public function deleteCar($id)
    {
        $car  = Car::find($id);
        $car->delete();

        return response()->json('Removed successfully.');
    }
    public function getCars()
    {

        $cars  = Car::all();

        return response()->json($cars);
    }
}
