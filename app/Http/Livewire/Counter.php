<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Counter extends Component
{
    public $searchTerm ='';
    public $users;
    public function render()
    {
        if (empty($this->searchTerm)) {
            $this->users = User::where('name', $this->searchTerm)->get();
        } else {
            $this->users =User::where('name', 'like', '%'.$this->searchTerm.'%')->get();
        }
        return view('livewire.counter');
    }
}
