<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstructController extends Controller
{
    function __construct()
    {
        $this->middleware('demo');
    }
    function demoAction(Request $request): array|string|null
    {
        return $request->header();
    }
}
