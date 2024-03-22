<?php

namespace App\Http\Controllers\Auth;

use App\Enum\EmailEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Rules\FakeEmail;
use App\Rules\FilterEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class, new FilterEmail()],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'no_telpon' => ['required'],
            'alamat' => ['required'],
        ], [
            'required' => ':attribute Wajib di isi.',
            'password.confirmed' => ':attribute tidak cocok',
            'password.min' => ':attribute harus 8 karakter'
        ]);



        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_telpon' => $request->no_telpon,
            'alamat' => $request->alamat
        ]);




        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
