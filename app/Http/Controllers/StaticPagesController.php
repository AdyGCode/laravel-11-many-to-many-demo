<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function oneToOne()
    {
        return view('pages.one-to-one');
    }

    public function oneToMany()
    {
        return view('pages.one-to-many');
    }

    public function manyToMany()
    {
        return view('pages.many-to-many');
    }
}
