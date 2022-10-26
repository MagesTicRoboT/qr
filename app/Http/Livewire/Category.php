<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Category extends Component
{
    public $category = "Link";
    public $categories = ['Text', 'Link', 'Email', 'Contact No', 'Location', 'Wifi'];
    public function render()
    {
        return view('livewire.category');
    }
}
