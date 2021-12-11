<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginRegister extends Component
{
    public $users, $email, $password, $name;
    public $registerForm = false;

    public function render()
    {
        return view('livewire.login-register');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
                return redirect()->to('/dashboard');
        }else{
            session()->flash('error', 'Email or Password Are Wrong.');
        }
    }

    public function register()
    {
        $this->registerForm = !$this->registerForm;
    }

    public function registerStore()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        $this->password = Hash::make($this->password); 

        User::create([
            'name' => $this->name, 
            'email' => $this->email, 
            'password' => $this->password
        ]);

        session()->flash('success', 'Your register successfully Go to the login page.');

        $this->resetInputFields();

    }
}
