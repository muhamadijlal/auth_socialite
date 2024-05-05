<?php

namespace App\Livewire;

use App\Livewire\Forms\RegisterForm;
use Livewire\Attributes\Title;
use Livewire\Component;

class Register extends Component
{
  #[Title('Register Page')]

  public RegisterForm $form;

  public function updated($property)
  {
    $this->validateOnly($property);
  }

  public function register()
  {
    $this->form->store();
  }

  public function render()
  {
    return view('livewire.register');
  }
}
