<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class History extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.user.history');
    }
}
