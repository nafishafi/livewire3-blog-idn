<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required'])]
    public string $body = '';

    public function store()
    {
        $post = Auth::user()->posts()->create(
            $this->validate()
        );
    

        flash('Post created successfully!');

        $this->reset();

        return $post;
    }
}