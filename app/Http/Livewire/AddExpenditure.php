<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Item;
use App\Models\Expenditure;

Use Illuminate\Support\Facades\Auth;

class AddExpenditure extends Component
{
    
    public $item;
    public $selectitem;
    public $exp_amt;
    
    public function mount(){
        $this->item = Item::all();
    }

    public function render()
    {
        return view('livewire.add-expenditure');
    }

    public function submit(){
        $this->validate([
            'selectitem'=>'required',
            'exp_amt'=>'required',
        ]);
        $id = Auth::user()->id;
        $expenditure = new Expenditure;
        // print_r($itemgroup);die;
        $expenditure->item_id = $this->selectitem; 
        $expenditure->exp_amt = $this->exp_amt; 
        $expenditure->user_id = $id; 
        $expenditure->save();
        session()->flash('success', 'Submit Successfully !');
        return redirect()->to('/add-expenditure');
        // $this->resetFilters();
    }

    
    // public function resetFilters(){
    //     $this->reset(['selectitem']);
    //     $this->reset(['exp_amt']);
    // }
}
