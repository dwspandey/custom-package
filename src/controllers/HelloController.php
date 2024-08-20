<?php

namespace Pandeydws\Hello\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use HelloWorld\Hello\Models\User;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $users=User::all();
        return view('hello::hello',compact('users'));
    }
}
