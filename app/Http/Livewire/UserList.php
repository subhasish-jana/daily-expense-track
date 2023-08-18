<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserList extends Component
{
    public $user;

    public function mount(){
        $this->user = User::where('user_type', 'user')->get();
    }

    public function render()
    {
        return view('livewire.user-list');
    }
}
