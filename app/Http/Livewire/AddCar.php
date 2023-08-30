<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddCar extends Component
{
    use WithFileUploads;

    public $brand;
    public $type_of_fuel;
    public $price_by_day;
    public $is_available;
    public $year_of_manufacture;
    public $color;
    public $images = [];

    public function render()
    {
        return view('livewire.add-car');
    }

    public function store()
    {
        $this->validate([
            'brand' => 'required',
            'model' => 'required',
            'year_of_manufacture' => 'required|numeric',
            'color' => 'required',
            'type_of_fuel' => 'required',
            'price_by_day' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $this->authorize('create', Car::class);
        $user  = auth()->user();
        $car = Car::create([
            'brand' => $this->brand,
            'model' => $this->model,
            'year_of_manufacture' => $this->year_of_manufacture,
            'color' => $this->color,
            'type_of_fuel' => $this->type_of_fuel,
            'price_by_day' => $this->price_by_day,
            'user_id' => $user
        ]);

        foreach ($this->images as $image) {
            $path = $image->store('car_images');
            $car->images()->create(['path' => $path]);
        }

        session()->flash('success', 'La voiture a été ajoutée avec succès.');

        return redirect()->route('cars.show', $car->id);

    }
}
