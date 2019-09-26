<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function index()
    {

    }

    public function show($id)
    {
        $employees = Employee::with('company','department','skill')->where('company_id',$id)->get();

        return view('team',compact('employees'));

    }

}
