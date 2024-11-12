<?php

namespace App\Http\Controllers;

use App\Mail\LupaKataSandi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class Otentifikasi extends Controller
{
    public function tampilanLogin()
    {
        return view('pages.dashboard.admin.login');
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email' => 'bail|required|string|email|exists:users,email',
            'password' => 'bail|required|string',
        ]);

        if (Auth::attempt($validate)) {
            return redirect('/BagianInformasi');
        }

        return back()->withErrors(['email' => 'Email atau kata sandi tidak benar']);
    }

    public function logout()
    {
        if (auth()->check()) {
            auth()->logout();
        }

        return redirect()->route('login');
    }

    public function tampilanLupaPassword()
    {
        return view('pages.dashboard.admin.lupaPassword');
    }

    public function lupaPassword(Request $request)
    {
        $validate = $request->validate([
            'email' => 'bail|required|string|email|exists:users,email'
        ]);

        $user = User::where('email', $validate['email'])
            ->firstOrFail();

        try {
            $user->update(['otp' => Str::random(6)]);

            Mail::to($user->email)->send(new LupaKataSandi($user->only([
                'email',
                'otp',
            ])));
        } catch (\Exception $e) {
            $user->update(['otp' => null]);

            return back()->withErrors(['email' => 'Alamat email tidak aktif']);
        }

        return redirect('/Otp?id=' . (string) $user->id);
    }

    public function tampilanOtp(Request $request)
    {
        User::findOrFail($request->query('id'));

        return view('pages.dashboard.admin.otp');
    }

    public function otp(Request $request)
    {
        $request->validate(['otp' => 'bail|required|string|min:6|max:6']);

        $user = User::whereKey($request->query('id'))->where('otp', $request['otp'])->first();

        if ($user) {
            return redirect('/NewPassword?id=' . (string) $user->id . '&otp=' . (string) $user->otp);
        }

        return back()->withErrors(['otp' => 'otp is invalid']);
    }

    public function tampilanPasswordBaru(Request $request)
    {
        User::whereKey($request->query('id'))->where('otp', $request->query('otp'))->firstOrFail();

        return view('pages.dashboard.admin.newPassword');
    }

    public function passwordBaru(Request $request)
    {
        $request->validate([
            'password' => 'bail|required|string|confirmed',
        ]);

        $user = User::whereKey($request->query('id'))->where('otp', $request->query('otp'))->firstOrFail();

        $user->update(['password' => $request['password']]);

        return redirect('/Login');
    }
}
