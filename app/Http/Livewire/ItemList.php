<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Item;

class ItemList extends Component
{
    public $item;

    public function mount(){
        $this->item = Item::select('items.*', 'itemgroups.item_group_name')
        ->join('itemgroups', 'itemgroups.id', '=', 'items.item_group_id')
        ->get();
    }

    public function render()
    {
        return view('livewire.item-list');
    }
}
