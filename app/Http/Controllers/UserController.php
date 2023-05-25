<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function add()
    {
        return view('user.add');
    }

    public function edit()
    {
        return view('user.edit');
    }
}