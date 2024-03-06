<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class Create extends Component
{
    public \App\Livewire\Forms\PostForm $form;

    public function save(): void
    {
        $this->form->store();
    }
    public function render()
    {
        return view('livewire.posts.create');
    }
}
