<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class CustomInput extends Component
{
    
    /**
     * Remove the #[Modelable] attribute to see the notification working normally
     */
    #[Modelable]
    public $value;
    
    public function render()
    {
        return view('livewire.custom-input');
    }
}
