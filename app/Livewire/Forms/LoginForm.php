<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
  public $email, $password;

  protected function rules()
  {
    return [
      'email' => ['required','string','email'],
      'password' => ['required','string','min:8'],
    ];
  }

  protected function messages()
  {
    return [
      'required' => ':attribute harus diisi.',
      'email' => ':attribute harus berupa alamat email yang valid.',
      'min' => ':attribute minimal :min karakter',
      'string' => ':attribute harus berupa string'
    ];
  }

  protected function validationAttributes()
  {
    return [
      'email' => 'Email',
      'password' => 'Password'
    ];
  }

  public function entry()
  {
    $credentials = $this->validate();

    if(Auth::attempt($credentials)) return redirect('/home');
  }

}
