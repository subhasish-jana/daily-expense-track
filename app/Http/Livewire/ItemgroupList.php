<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Itemgroup;

class ItemgroupList extends Component
{
    public $itemgroup;

    public function mount(){
        $this->itemgroup = Itemgroup::all();
    }

    public function render()
    {
        return view('livewire.itemgroup-list');
    }
}
