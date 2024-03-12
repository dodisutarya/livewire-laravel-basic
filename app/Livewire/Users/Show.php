<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = User::findOrFail($user);
    }

    public function render()
    {
        // dd($this->user);

        return view('livewire.users.show')
            ->with('title', $this->user->name);
    }
}
