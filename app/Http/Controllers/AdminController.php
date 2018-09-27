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

//function date()
//{
//    date_default_timezone_set('UTC+2');
//    $date = date("Y-m-d H:i:s");
//    echo "Current Time " . $date;
//}


//    function time()
//{
//    $name = "Vasya";
//    date_default_timezone_set('Europe/Kiev');
//    $date = date("Y-m-d H:i:s");
//    return view('admin.test')->with(compact('name', 'date'));
//}
