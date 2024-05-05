<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
  #[Title('Home Page')]
  public $name, $email;

  public function logout()
  {
    Auth::logout();

    return redirect('/login');
  }

  public function mount()
  {
    $this->name = 'Muhamad Haidar Ijlal';
    $this->email = 'm.haidarijl@gmail.com';
  }

  public function render()
  {
    return view('livewire.home');
  }
}
