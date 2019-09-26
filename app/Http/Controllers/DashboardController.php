<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Salary;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $companies = Company::with('employees')->get();
        $employees = Employee::with('company','department','skill')->get();
        $salaries = Salary::all();
        return view('admin/dashboard',compact('companies','employees','salaries'));
    }

    public function show($id)
    {
        $employees = Employee::with('company','department','skill')->where('company_id',$id)->get();
        dd($employees);
        return view('',compact('employees'));
    }

}
