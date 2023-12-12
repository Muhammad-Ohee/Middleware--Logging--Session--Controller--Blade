<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function page(Request $request)
    {
        //$name = "OS";
        //$num1 = $request->num1;
        //$num2 = $request->num2;
        //$sum = $num1 + $num2;

        $data = array(
            array('name' => 'Ohee', 'city' => 'Dhaka'),
            array('name' => 'Sinziah', 'city' => 'Shylet')
        );
        return view('Home', ['users' => $data]);
    }
}
