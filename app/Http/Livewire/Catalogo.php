<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Catalogo extends Component
{
    public function render()
    {
        return view('livewire.catalogo',['products'=>Product::orderBy('id','desc')->paginate(50)
        ]);
    }
}
