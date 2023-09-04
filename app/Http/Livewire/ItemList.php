<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Item;
use App\Models\Itemgroup;

class ItemList extends Component
{
    public $item;

    // public function mount(){
    //     $this->item = Itemgroup::with('item')->get()->toArray();
    //     echo('<pre>');print_r($this->item);die;
    // }
    public function mount(){
        $this->item = Item::with('itemgroup')->get();
        // echo('<pre>');print_r($this->item);die;
    }

    public function render()
    {
        return view('livewire.item-list');
    }
}
