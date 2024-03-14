<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\Title;
use Livewire\Component;

#[\Livewire\Attributes\Lazy]

class Index extends Component
{
    #[\Livewire\Attributes\On('postCreated')]

    public function updateList($post)
    {
    }

    public function placeholder()
    {
        // Cara 2 dengan membuat loading placeholder di komponen lain
        return view('livewire.posts.placeholder');

        // Cara 1 membuar loading placeholder
        // return <<<BLADE
        //     <div>
        //         Loading...
        //     </div>
        // BLADE;
    }

    public function render()
    {
        $posts = \App\Models\Post::query()->with('user')->latest()->get();
        return view('livewire.posts.index', [
            'posts' => $posts,
        ]);
    }
}
