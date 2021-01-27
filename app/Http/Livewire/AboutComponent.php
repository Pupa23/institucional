<?php

namespace App\Http\Livewire;

use App\Models\About;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $abouts = About::all();
        return view('livewire.about-component', compact('abouts'));
    }
}
