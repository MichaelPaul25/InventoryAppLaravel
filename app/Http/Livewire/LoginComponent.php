<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginComponent extends Component
{
    public $isLogin = true;

    public function changeLoginRegis() {
        $this->isLogin = !$this->isLogin;
    }

    public function render()
    {
        return view('livewire.login-component')->layout('layouts.base');
    }
}
