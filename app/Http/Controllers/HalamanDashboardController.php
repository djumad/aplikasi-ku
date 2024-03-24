<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HalamanDashboardController extends Controller
{
    function DisplayLogin(){
        return view("login");
    }

    function DisplaySuperAdmin(){
        $login = Auth::user()->nama;
        return view("super-admin.dashboard" , [
            "nama" => $login
        ]);
    }

    function DisplayAdmin(){
        $login = Auth::user()->nama;
        return view("admin.dashboard" , [
            "nama" => $login
        ]);
    }

    function DisplayRaja(){
        $login = Auth::user()->nama;
        return view("raja.dashboard" , [
            "nama" => $login
        ]);
    }

    function DisplayPenduduk(){
        $login = Auth::user()->nama;
        return view("penduduk.dashboard" , [
            "nama" => $login
        ]);
    }

}
