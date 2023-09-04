<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\User;

class Categoryl extends Component
{
    public $category;
    public function render()
    {
        return view('livewire.categoryl');
    }


    // public function mount(){
    //     $this->category = User::with('category')->get()->toArray();
    //     echo('<pre>');print_r($this->category);die;
    // }
    // public function mount(){
    //     $this->category = Category::find(2)->user;
    //     //  echo('<pre>');print_r($this->category);die;
    // }
    public function mount(){
        $this->category = Category::with('user')->get();
        //  echo('<pre>');print_r($this->category);die;
    }

}
