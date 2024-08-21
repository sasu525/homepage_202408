<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuLunchController extends Controller
{
    public function create()
    {
        return view('menulunch.create');    
    }
    
    public function store(Request $request)
    {
        dd($request);    
    }
}
