<?php

namespace Pandeydws\Hello\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Pandeydws\Hello\Models\User;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class HelloController extends Controller
{
    public function index(Request $request)
    {
       
        return view('hello::hello');
    }
    public function getDataTable()
    {
        $query = User::all();; // Replace with your actual model logic
        return DataTables::of($query)->make(true);
    }
}
