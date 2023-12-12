<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewarePracticeController extends Controller
{
    function demoAction(): string
    {
        return "Hello OS";
    }

    function demoAction1(): string
    {
        return "Hello OS 1";
    }

    function demoAction2(): string
    {
        return "Hello OS 2";
    }

    function demoAction3(): string
    {
        return "Hello OS 3";
    }

    function demoAction4(): string
    {
        return "Hello OS 4";
<<<<<<< HEAD

    }

    function changeHeader(Request $request)
    {
        return $request->header();
    }

    function rateLimit(Request $request)
    {
        return "Hello OS";
=======
>>>>>>> 3e9e34118708a8d469e87dc992c348fdd410691b
    }
}
