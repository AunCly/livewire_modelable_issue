<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    
    public $name = 'Foo';
    public $firstname = 'Bar';
    
    public function save(){
        session()->flash('notification', 'Contact created successfully');
        $this->redirect('/');
    }
    
    public function render()
    {
        return view('livewire.contact')->layout('layout');
    }
}
