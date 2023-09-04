<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subcategory;

use App\Models\Category;

Use Illuminate\Support\Facades\Auth;

class Addsubcategory extends Component
{
    
    public $selectcategory;
    public $subcategory;
    public $Category;

    public function mount(){
        $this->Category = Category::all();
    }

    public function render()
    {
        return view('livewire.addsubcategory');
    }

    public function submit(){
        $this->validate([
            'selectcategory'=>'required',
            'subcategory'=>'required',
        ]);
        $id = Auth::user()->id;
        $subcategory = new subcategory;
        // print_r($itemgroup);die;
        $subcategory->category_id = $this->selectcategory; 
        $subcategory->subcategory_name = $this->subcategory; 
        $subcategory->user_id = $id; 
        $subcategory->save();
        session()->flash('success', 'Submit Successfully !');
        return redirect()->to('/add-subcategory');
        $this->resetFilters();
    }
}
