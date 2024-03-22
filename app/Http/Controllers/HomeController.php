<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Beasiswa;

class HomeController extends Controller
{
    public function redirect()
    {

        if (Auth::id()) {

            if (Auth::user()->usertype == '0') {
                $beasiswa = beasiswa::all();

                return view('user.home', compact('beasiswa'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {


            $beasiswa = beasiswa::all();

            return view('user.home', compact('beasiswa'));
        }
    }

    public function about()
    {
        return view('user.about');
    }
}
