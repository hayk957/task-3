<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\EmployeeSkill;
use App\Models\Salary;
use App\Models\Skill;
use App\Rules\FileType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Support\Facades\Validator;
class EmployeeManagementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
//        $employees = DB::table('employees')
//            ->leftJoin('companies','employees.company_id','=','companies.id')
//            ->leftJoin('departments','employees.department_id','=','departments.id')
//            ->select('employees.*','companies.name','companies.id','departments.name','departments.id')
//        ->paginate(5);
        $employees = Employee::with('company','department','skill')->paginate(5);
        $salaries = Salary::all();
        return view('admin/employees-mgmt/index',compact('employees','salaries'));
    }


    public function create()
    {
        $companies = Company::all();
        $departments = Department::all();
        $skills = Skill::all();
        return view('admin/employees-mgmt/create', [
        'departments' => $departments,
        'companies' => $companies,
        'skills' => $skills
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'first_name' => 'required|string|min:2',
            'last_name' => 'required|string|min:2',
            'city' => 'required',
            'address' => 'string|max:255',
            'birth_date' => 'required',
            'email' => 'required|email|string|max:255',
            'phone' => 'required|string|min:9',
            'salary' => 'required|string|max:255',
            'skills' => 'required|array|min:1',
            'company_id' => 'required',
            'department_id' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
//        if ($validator->fails()) {
//            dd($validator->errors());
//        }

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors())->with('error','Check form below with errors');
        }

         $newEmployee = Employee::createEmployee($request->all());
         return  $newEmployee ?  redirect('/employee-management')
            : back()->withInput()->withErrors($validator->errors())->with('error', 'Check form below with errors');
    }


    public function show($id)
    {
            $employee = Employee::with('company', 'department', 'skill')->where('id', $id)->first();
            $salary = Salary::where(['employee_id' => $id, 'id' => $employee->current_salary_id])->first();

            return view('admin/employees-mgmt/view', compact('employee','salary'));

    }

    public function edit($id)
    {
            $employee = Employee::with('skill')->where('id', $id)->first();
            if ($employee == null)
            {
                return redirect()->route('employee-management.index')->with('error','there is no employee with the requested id');
            }
            $skills = Skill::all();
            $salary = Salary::where('employee_id', $id)->first();
            $companies = Company::all();
            $departments = Department::all();
            return view('admin/employees-mgmt/edit', compact('employee', 'employee_skills', 'skills', 'companies', 'departments', 'salary'));

    }

    public function update(Request $request, $id)
    {
            $employee = Employee::with('skill','salary')->first();

            $image = $request->file('avatar');
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|min:2',
                'last_name' => 'required|string|min:2',
                'address' => 'string|max:255',
                'birth_date' => 'required',
                'email' => 'required|email|string|max:255',
                'phone' => 'required|string|min:9',
                'company_id' => 'required',
                'department_id' => 'required',
                'salary' => 'required',
                'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|min:1|max:2048',
            ]);
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator->errors())->with('error','Check form below with errors');
            }
            if ($image != null) {
                $imageName = time() . '.' . $request->avatar->getClientOriginalExtension();
                $request->avatar->move(public_path('/images/avatars'), $imageName);
            }
            $update = $employee->save([
                $employee->first_name = $request->first_name,
                $employee->last_name = $request->last_name,
                $employee->address = $request->address,
                $employee->birth_date = $request->birth_date,
                $employee->age = Carbon::parse($request->birth_date)->age,
                $employee->email = $request->email,
                $employee->phone = $request->phone,
                $employee->company_id = $request->company_id,
                $employee->department_id = $request->department_id,
                $image == null ? $employee->avatar : $employee->avatar = $imageName
            ]);
            if ($update) {
                $employee->skill()->detach();
                $employee->skill()->attach($request->skill_id);

                $salary = Salary::where('employee_id',$id)->first();
                if($salary->salary != $request->salary){
                        $salary = new Salary();
                        $salary->employee_id = $employee->id;
                        $salary->salary = $request->salary;
                        if ($salary->save()){
                            $employee->current_salary_id = $salary->id;
                            $employee->save();
                        }
                    }
                return redirect('employee-management');
            }
            return back()->with('info','Employee data not changed ');
    }

    public function destroy($id)
    {

        $data = Employee::where('id',$id)->delete();

        $image_path = "/images/avatar".$data['avatar'];

        if (file_exists($image_path)) {

            @unlink($image_path);

        }

        if($data)
            {
                return redirect('/employee-management');
            }
        }


}
