<?php

namespace App\Livewire;

use Livewire\Component;

class ExampleComponent extends Component
{
    public function render()
    {
        $student = 'student';
        $batch = 'batch';

        return view('example-component',[
            'batch' => $batch,  
            'student' => $student
        ]);
    }
    public function handleClick(){
        dump('You are a geneus');
    }
}
