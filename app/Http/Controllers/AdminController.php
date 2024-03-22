<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function tambah(){

        return view('admin.tambah_beasiswa');
    }
}
