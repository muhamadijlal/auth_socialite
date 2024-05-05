<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;
use Livewire\Attributes\Title;
use Livewire\Component;


class Login extends Component
{
  #[Title('Login Page')]

  public LoginForm $form;
  
  public function login()
  {
    $this->form->entry();
  }

  // Lifecycle hook
  public function updated($property)
  {
    $this->validateOnly($property);
  }

  public function render()
  {
    return view('livewire.login');
  }
}
