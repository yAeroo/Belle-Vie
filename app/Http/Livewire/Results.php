<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Results extends Component
{
    public $termino;
    public $usuarios;


    // Escucha al componente hijo al hacer submit
    protected $listeners = ['terminoBusquedaGeneral' => 'buscarGeneral'];

    public function buscarGeneral($usuarios)
    {
        // Valores a enviar a nuestro render
        $this->termino = $termino;

        // Valores a buscar en los modelos(DB)
        $this->usuarios = $usuarios;
    }

    public function render()
    {
        // "when" = Ejecutarse en caso de que el termino de busqueda tenga un valor 
        // "%" = Buscar coincidencia en cualquier parte del string

        $usuarios = User::when($this->termino, function ($query) { // Calllback
            $query->where([['username', 'name' ,"%" . $this->termino . "%"]]);
        })->get();

        return view('livewire.Results', [

            'users' => $usuarios,
        ]);
    }
}
