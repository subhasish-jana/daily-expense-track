<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Itemgroup;
use App\Models\Item;

Use Illuminate\Support\Facades\Auth;

class AddItem extends Component
{
    public $selectgroup;
    public $name;
    public $itemgroup;

    public function mount(){
        $this->itemgroup = Itemgroup::all();
    }

    public function render()
    {
        return view('livewire.add-item');
    }

    public function submit(){
        $this->validate([
            'selectgroup'=>'required',
            'name'=>'required',
        ]);
        $id = Auth::user()->id;
        $item = new Item;
        // print_r($itemgroup);die;
        $item->item_group_id = $this->selectgroup; 
        $item->item_name = $this->name; 
        $item->create_user = $id; 
        $item->save();
        session()->flash('success', 'Submit Successfully !');
        return redirect()->to('/item');
        // $this->resetFilters();
    }

    
    public function resetFilters(){
        $this->reset(['name']);
        $this->reset(['selectgroup']);
    }
}
