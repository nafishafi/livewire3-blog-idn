<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;

// #[Lazy]

class Index extends Component
{
    #[On('postCreated')]

    public function updateList($post)
    {
        
    }
    public function placeholder(){
        return view('livewire.posts.placeholder');
    }
    public function render()
    {
        // sleep(3);
        $posts = Post::query()->with('user')->latest()->get();
        return view('livewire.posts.index', [
            'posts' => $posts
        ]);
    }
}