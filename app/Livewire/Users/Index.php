<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    use \Livewire\WithPagination;
    public function render()
    {
        $users = User::query()->latest()->paginate(10);
        return view('livewire.users.index', [
            'users' => $users,
        ]);
    }
}
