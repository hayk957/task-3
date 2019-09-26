<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\EmployeeSkill;
use App\Models\Salary;
use App\Models\Skill;
use App\Models\Employee;
use App\Models\Department;
class CompanyController extends Controller
{
    public function index()
    {
//        $companies = Company::with('employees')->get();
        return view('company');
    }

    public function show($id)
    {

        $company = Company::with('employees')->where('id',$id)->first();
        $employees = Employee::with('company','department','skill')->where('company_id',$company->id)->get();
        $skills = Skill::all();
        $companies = Company::all();
        return view('company',compact('company','employees','skills','companies'));

    }

}
