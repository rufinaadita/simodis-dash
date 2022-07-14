<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PegawaiController extends Controller
{
    public function showLogin()
    {
        return view('user.login');
    }

    public function authenticate(Request $request)
    {
        $login = Auth::attempt([
            'name' => $request->post('username'),
            'password' => $request->post('password')
        ]);

        if ($login) {
            if (auth()->user()->status == 'Administrator') {
                $request->session()->regenerate();
                return redirect()->intended('/dash');
            } else {
                return redirect()->intended('/main/realisasi');
            }
        }
        return back()->with('error', 'Login failed!');

        // dd('berhasil login');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/auth/login');
    }
}
