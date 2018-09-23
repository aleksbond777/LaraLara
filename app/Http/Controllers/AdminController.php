<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

        public function index()
    {
        $name = "vasya";

        return view('admin.test')->with(compact('name'));

    }


}

