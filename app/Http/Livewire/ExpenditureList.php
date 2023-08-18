<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Expenditure;
Use Illuminate\Support\Facades\Auth;

class ExpenditureList extends Component
{
    public $expenditure;

    public function mount(){
        $id = Auth::user()->id;
        
        if(Auth()->User()->user_type=='admin'){
            $this->expenditure = Expenditure::select('expenditures.*', 'items.item_name', 'itemgroups.item_group_name', 'users.name')
            ->join('items', 'items.id', '=', 'expenditures.item_id')
            ->join('users', 'users.id', '=', 'expenditures.create_user')
            ->join('itemgroups', 'itemgroups.id', '=', 'items.item_group_id')
            ->get();
        }else{
            $this->expenditure = Expenditure::select('expenditures.*', 'items.item_name', 'itemgroups.item_group_name')
            ->join('items', 'items.id', '=', 'expenditures.item_id')
            ->join('itemgroups', 'itemgroups.id', '=', 'items.item_group_id')
            ->where('expenditures.create_user', $id)
            ->get();
        }

        // print_r($this->expenditure);die;
       
    }

    public function render()
    {
        return view('livewire.expenditure-list');
    }
}
