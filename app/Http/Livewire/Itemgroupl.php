<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Itemgroup;

Use Illuminate\Support\Facades\Auth;

class Itemgroupl extends Component
{
    public $i_g_name;
    public function render()
    {
        return view('livewire.itemgroupl');
    }

    public function submit(){
        $this->validate([
            'i_g_name'=>'required|regex:/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]+$/',
        ]);
        $id = Auth::user()->id;
        $itemgroup = new Itemgroup;
        // print_r($itemgroup);die;
        $itemgroup->item_group_name = $this->i_g_name; 
        $itemgroup->user_id = $id; 
        $itemgroup->save();
        session()->flash('success', 'Submit Successfully !');
        return redirect()->to('/itemgroup');
        // $this->resetFilters();
    }

    // public function resetFilters(){
    //     $this->reset(['i_g_name']);
    // }
}
