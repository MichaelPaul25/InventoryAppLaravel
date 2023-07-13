<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginComponent extends Component
{
    public $email_login, $password_login, $email_regis, $password_regis, $confirm_password;
    public $isLogin = true;

    public function updated($fields){
        $this->validateOnly($fields, [
            'email_login' => 'required|email',
            'password_login' => 'required',
            'email_regis' => 'required|email|unique:users,email',
            'password_regis' => 'required|same:confirm_password',
            'confirm_password' => 'required|same:password_regis'
        ]);
    }

    public function resetFormValue() {
        $this->email_login = null;
        $this->password_login = null;
        $this->email_regis = null;
        $this->password_regis = null;
        $this->confirm_password  = null;
    }

    public function changeLoginRegis() {
        $this->isLogin = !$this->isLogin;
    }

    public function LoginUser() {
        $this->validate([
            'email_login' => 'required|email',
            'password_login' => 'required',
        ]);

        $findUser = User::where('email', $this->email_login)->first();
        if($findUser){
            if($findUser->flag_active){
                if(Hash::check($this->password_login, $findUser->password)){
                    Auth::attempt(['email' => $this->email_login, 'password' => $this->password_login]);
                     return redirect()->route('dashboard');;
                }else{
                    dd("hash");
                }
            }else{
                dd("flag active");
            }
        }else{
            dd("find user");
        }
    }

    public function render()
    {
        return view('livewire.login-component')->layout('layouts.guest');
    }
}
