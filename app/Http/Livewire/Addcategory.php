<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

Use Illuminate\Support\Facades\Auth;

class Addcategory extends Component
{
    
    public $category_name;
    public function render()
    {
        return view('livewire.addcategory');
    }

    public function submit(){
        $this->validate([
            'category_name'=>['required'],
        ]);
        $user_id = Auth::user()->id;
        $category = new Category;
        $category->category_name = $this->category_name; 
        $category->user_id = $user_id; 
        $category->save();
        session()->flash('success', 'Submit Successfully !');
        return redirect()->to('/add-category');
        $this->resetFilters();
    }
}
