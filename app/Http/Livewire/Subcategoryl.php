<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Subcategory;

class Subcategoryl extends Component
{
    
    public $subcategory;

    public function render()
    {
        return view('livewire.subcategoryl');
    }

    public function mount(){
        $this->subcategory = Subcategory::with('category')->get();
        //  echo('<pre>');print_r($this->category);die;
    }

}
