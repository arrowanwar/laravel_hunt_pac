<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        // dd($users);
        return view('users.index', compact('users'));
    }
    public function bills()
    {
        // dd($bills);
        return view('bill.index');
    }
    public function create()
    {
        return view('bill.create');
    }
}
