<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $title = '';
    
    #[Rule(['required'])]
    public string $body = '';

    public function store(): void 
    {
        $user = User::find(1);
        
        $user->posts()->create(
            $this->validate()
        );

        flash('Post created successfully!');
        

        $this->reset();
    }
}