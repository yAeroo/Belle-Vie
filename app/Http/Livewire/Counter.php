<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Counter extends Component
{
    public $usuarios;

    public function BuscarDatosForm()
    {
        // Emito el evento para el padre
        $this->emit('terminoBusquedaGeneral', $this->termino, $this->usuarios);
    }

    public function render()
    {
        $usuarios = User::where('rol', '<>', 'admin');

        return view('livewire.buscador', [
            'users' => $usuarios

        ]);}
}
