<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class UsersTable extends Component
{

    public $search = '';

    public $createNew = true;

    public $name = '';
    public $email = '';
    public $username = '';
    public $phonenumber = '';

    public function resetPassword($id) {
        User::find($id)->update(['password' => bcrypt('password'), 'password_set' => 0]);
    }

    public function save() {

        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|unique:users'
        ]);

        \App\User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'username' => $this->username,
        'phonenumber' => $this->phonenumber,
        'password' => bcrypt('password')
        ]);

        $this->createNew = false;

        $this->name = '';
        $this->email = '';
        $this->username = '';
        $this->phonenumber = '';

    }

    public function toggleCreateNew() {
        $this->createNew = !$this->createNew;
    }


    public function render()
    {
        return view('livewire.users-table', ['users' => \App\User::search($this->search)->get()]);
    }
}
