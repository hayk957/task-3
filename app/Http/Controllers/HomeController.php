<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Salary;
use App\Models\Skill;
use App\Models\Employee;
use App\Models\Department;
class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $companies = Company::all();
        $skills = Skill::all();
        return view('index',compact('companies','skills'));
    }


}
