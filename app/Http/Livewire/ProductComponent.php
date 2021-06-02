<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;

class ProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $price;
    public $description;
    public $thumbnail;


    public function render()
    {
        return view('livewire.product-component' ,[
            'products'=>Product::orderBy('id','desc')->paginate(50)
        ]);
    }

    public function save()
    {
        $this->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'thumbnail' => 'required'
        ]);


        $this->thumbnail->store('images','public');



        Product::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'description'=>$this->description,
            'thumbnail'=> $this->thumbnail->store('images','public')

        ]);
    }
}
