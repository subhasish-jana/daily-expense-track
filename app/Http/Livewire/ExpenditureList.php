<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Expenditure;
use App\Models\User;
use App\Models\Item;
Use Illuminate\Support\Facades\Auth;

class ExpenditureList extends Component
{
    public $expenditure;

    public function mount(){
        $id = Auth::user()->id;
        
        if(Auth()->User()->user_type=='admin'){
            // $this->expenditure = Expenditure::select('expenditures.*', 'items.item_name', 'itemgroups.item_group_name', 'users.name')
            // ->join('items', 'items.id', '=', 'expenditures.item_id')
            // ->join('users', 'users.id', '=', 'expenditures.user_id')
            // ->join('itemgroups', 'itemgroups.id', '=', 'items.itemgroup_id')
            // ->get();
            $this->expenditure = Expenditure::with('item.itemgroup', 'user')->get();
        }else{
            // $this->expenditure = User::with('expenditure')->find($id);
            // $this->expenditure = Expenditure::get();
            // $this->expenditure = User::with('itemgroup.item.expenditure')->get()->toArray();
            $this->expenditure = Expenditure::with('item.itemgroup', 'user')->where("user_id", "=", $id)->get();
            // $this->expenditure = Expenditure::select('expenditures.*', 'items.item_name', 'itemgroups.item_group_name')
            // ->join('items', 'items.id', '=', 'expenditures.item_id')
            // ->join('itemgroups', 'itemgroups.id', '=', 'items.itemgroup_id')
            // // ->where('expenditures.user_id', $id)
            // ->get()->toArray();

            // $this->item = Item::with('itemgroup')->get()->toArray();

        }
        // if(Auth()->User()->user_type=='admin'){
        //     $this->expenditure = Expenditure::select('expenditures.*', 'items.item_name', 'itemgroups.item_group_name', 'users.name')
        //     ->join('items', 'items.id', '=', 'expenditures.item_id')
        //     ->join('users', 'users.id', '=', 'expenditures.user_id')
        //     ->join('itemgroups', 'itemgroups.id', '=', 'items.itemgroup_id')
        //     ->get();
        // }else{
        //     $this->expenditure = Expenditure::select('expenditures.*', 'items.item_name', 'itemgroups.item_group_name')
        //     ->join('items', 'items.id', '=', 'expenditures.item_id')
        //     ->join('itemgroups', 'itemgroups.id', '=', 'items.itemgroup_id')
        //     ->where('expenditures.user_id', $id)
        //     ->get();
        // }

        // echo('<pre>');print_r($this->expenditure);die;
        // var_dump($this->expenditure);
       
    }

    public function render()
    {
        return view('livewire.expenditure-list');
    }
}
