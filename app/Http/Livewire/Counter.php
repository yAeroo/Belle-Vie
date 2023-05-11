<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Place;

class Counter extends Component
{
    public $searchTerm ='';
    public $users;
    public $places;

    public function render()
    {
        if (empty($this->searchTerm)) {
            $this->users = User::where('name', $this->searchTerm)->get();
        } else {
            $this->users =User::where('name', 'like', '%'.$this->searchTerm.'%')->get();
        }

        if (empty($this->searchTerm)) {
            $this->places = Place::where('place_name', $this->searchTerm)->get();
        } else {
            $this->places = Place::where('place_name', 'like', '%'.$this->searchTerm.'%')->get();
        }
        return view('livewire.counter');
    }
}
