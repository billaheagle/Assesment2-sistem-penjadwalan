<?php

namespace App\Http\Controllers\Admin;
use App\Client;
use App\Employee;

class HomeController
{
    public function index()
    {
    	$students = Client::count();
    	$lecturer = Employee::count();
        return view('home', compact('students', 'lecturer'));
    }
}



