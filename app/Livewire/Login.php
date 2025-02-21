<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;
use Illuminate\Http\RedirectResponse;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class Login extends Component
{
    public LoginForm $form;

    public function login()
    {
        $this->form->store();
    }

    public function render()
    {
        return view('livewire.login');
    }
}