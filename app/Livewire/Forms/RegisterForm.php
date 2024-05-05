<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Form;

class RegisterForm extends Form
{
  public $name, $email, $password, $password_confirmation;

  protected function rules()
  {
    return [
      'name' => ['required','string','min:3','max:100'],
      'email' => ['required','string','email','unique:users'],
      'password' => ['required','string','min:8','confirmed'],
    ];
  }

  protected function messages()
  {
    return [
      'required' => ':attribute harus diisi.',
      'email' => ':attribute harus berupa alamat email yang valid.',
      'min' => ':attribute minimal :min karakter',
      'max' => ':attribute maksimal :max karakter',
      'unique' => ':attribute sudah digunakan',
      'confirmed' => ':attribute password tidak cocok, periksa kembali',
      'string' => ':attribute harus berupa string'
    ];
  }

  protected function validationAttributes()
  {
    return [
      'email' => 'Email',
      'password' => 'Password',
      'name' => 'Nama'
    ];
  }

  public function store()
  {
    $credentials = $this->validate();

    User::create($credentials);

    return redirect('/login');
  }
}
