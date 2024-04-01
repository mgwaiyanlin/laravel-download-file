<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;

class InsertionForm extends Component
{
    public $name;
    public $price;
    public $description;

    public function addItem()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        Item::create($validatedData);

        $this->reset('name', 'price', 'description');

        session()->flash('success', 'sccessfully created!');
    }

    public function render()
    {
        return view('livewire.insertion-form');
    }
}
