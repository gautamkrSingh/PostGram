<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class UserController extends Controller
{
    //
    public function user($id){
        return Employee::find($id)->getEmployee;
    }
}
