<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $name = "Vasya";
        date_default_timezone_set('Europe/Kiev');
        $date = date("Y-m-d H:i:s");
        $datereverse = strrev(date("Y-m-d H:i:s"));
        $daterewrite = date("s:i:H d-m-Y");
        return view('admin.test')->with(compact('name',
            'date', 'datereverse', 'daterewrite'));
    }
}
