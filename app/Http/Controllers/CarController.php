<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Mail\CarActivated;
use App\Mail\CarDesActivated;
use App\Models\Car;
use App\Models\CarImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class CarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Car::paginate(15);
        return view('cars.index',compact('cars'));
    }

    public function create()
    {

        return view('cars.create');
    }

    public function store(CarRequest $request)
    {
        $validatedData = $request->validated();

        $car = Auth::user()->cars()->create([
            'transmission' => $validatedData['transmission'],
            'mileage' => $validatedData['mileage'],
            'door' => $validatedData['door'],
            'brake' => $validatedData['brake'],
            'engine' => $validatedData['engine'],
            'passengers' => $validatedData['passengers'],
            'baggage' => $validatedData['baggage'],
            'brand' => $validatedData['brand'],
            'color' => $validatedData['color'],
            'type_of_fuel' => $validatedData['type_of_fuel'],
            'price_by_day' => $validatedData['price_by_day'],
            'model' => $validatedData['model'],
            'year_of_manufacture' => $validatedData['year_of_manufacture'],
        ]);

        foreach ($validatedData['images'] as $image) {
            $path = $image->store('cars', 'public');
            $car->images()->create(['path' => $path]);
        }

        Alert::success('success', 'La voiture a été ajoutée avec succès.');
        return redirect()->route('cars.index');
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    public function updateStatus(Car $car)
    {
        $car->is_available = !$car->is_available;
        $car->save();

        // Envoyer un email de notification
        if ($car->is_available) {
            Mail::to(auth()->user()->email)->send(new CarActivated($car));
        } else {
            Mail::to(auth()->user()->email)->send(new CarDesActivated($car));
        }

        Alert::success('success', 'La voiture de l\'utilisateur a été mis à jour.');
        return redirect()->back();
    }
}
