<?php

namespace App\Livewire\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;


class Login extends Component
{
    public string $email;
    public string $password;

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required']
        ];
    }

    public function updated(string $propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login(Request $request)
    {
        $this->validate();

        if (!Auth::guard('web')->attempt($this->only('email', 'password'))) {
            $this->addError('password', 'メールアドレス、またはパスワードが間違っています。');
            return;
        }

        $request->session()->regenerate();

        $this->redirectRoute('team-split.index');
    }
}
