<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    function Login(Request $request){
        $request->validate([
            "nik" => ["required"],
            "password" => ["required" , "min:5"]
        ] , [
            "nik.required" => "Nik Tidak Boleh Kosong",
            "password.required" => "Password Tidak Boleh Kosong"
        ]);
        $periksaLogin = [
            "nik" => $request->nik,
            "password" => $request->password
        ];
        if(Auth::attempt($periksaLogin)){
            $login = Auth::user()->role;
            switch($login){
                case 'penduduk':
                    $request->session()->regenerate();
                    return redirect('/masyarakat');
                    break;
                case 'raja':
                    $request->session()->regenerate();
                    return redirect('/raja');
                    break;
                case 'admin':
                    $request->session()->regenerate();
                    return redirect('/admin');
                    break;
                case 'super-admin':
                    $request->session()->regenerate();
                    return redirect('/super-admin');
                    break;
            }
        }else{
            return redirect("/")->withErrors("Username Dan Password Tidak seusai")->withInput();
        }
        
    }
    
    function LogOut(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }
}
