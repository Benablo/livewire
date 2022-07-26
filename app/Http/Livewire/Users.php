<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    protected $user = [];
    public $filter = "";

    public function mount() {
        $this->users = User::get();
    }

    public function filter() {
        $this->users = User::where('name', 'like', "%$this->filter%")
        ->orWhere('home_address','like',"%$this->filter%")->get();
    }

    public function render()
    {
        return view('livewire.users',[
            'users' => $this->users
        ]);
    }
}
