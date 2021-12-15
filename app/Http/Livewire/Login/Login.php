<?php

namespace App\Http\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login.login');
    }

    public function login()
    {
        $datos = $this->validate();
        if (Auth::attempt($datos)) {
            return redirect(route("empleados.index"));
        } else {
            $this->emit("alerta","verificar correo y contraseña");
        }
    }

    public function rules()
    {
        return [
            "email" => "email|required",
            "password" => "min:8|string|required"
        ];
    }
}
