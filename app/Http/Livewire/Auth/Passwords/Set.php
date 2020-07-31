<?php

namespace App\Http\Livewire\Auth\Passwords;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Set extends Component
{
    public $oldPassword = '';
    public $newPassword = '';
    public $newPassword_confirmation = '';

    public function save()
    {
        $data = $this->validate([
            'oldPassword' => 'required|password',
            'newPassword' => 'required|confirmed',
        ]);

        Auth::user()->update(['password' => bcrypt($data['newPassword']), 'password_set' => 1]);

        return redirect()->intended(route('home'));
    }

    public function render()
    {
        return view('livewire.auth.passwords.set');
    }
}
