<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class SearchComponent extends Component
{
    public $name;
    public $first_name;
    public $results = [];

    public function search()
    {
        $this->results = User::where('name', 'LIKE', "%{$this->name}%")
            ->where('first_name', 'LIKE', "%{$this->first_name}%")
            ->get();
    }

    public function render()
    {
        return view('livewire.search-component');
    }
}
