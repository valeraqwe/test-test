<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    public function index()
    {
        $collection= Http::withoutVerifying()->get("https://jsonplaceholder.typicode.com/users")->collect();
        return view('users',['collection'=>$collection]);
    }
}
