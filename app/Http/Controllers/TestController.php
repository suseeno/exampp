<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Index(){
        return view('dynamic.pages.profil.index');
    }

    public function create()
    {
        return view('dynamic.pages.profil.create');

    }
    public function edit()
    {
        return view('dynamic.pages.profil.edit');

    }
}
