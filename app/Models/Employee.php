<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Employee extends Model
{
    protected $fillable = [
        'company_id', 'department_id', 'first_name', 'last_name', 'country', 'city', 'address', 'gender', 'birth_date', 'age', 'email', 'phone',
    ];

    protected $table = 'employees';


    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }

    public function salary()
    {
        return $this->belongsTo('App\Models\Salary');
    }

    public function skill()
    {
        return $this->belongsToMany('App\Models\Skill');
    }

    public static function createEmployee($data)
    {
        $employee = new Employee();
        $employee->first_name = $data['first_name'];
        $employee->last_name = $data['last_name'];
        $employee->city = $data['city'];
        $employee->address = $data['address'];
        $employee->birth_date = $data['birth_date'];
        $employee->email = $data['email'];
        $employee->phone = $data['phone'];
        $employee->company_id = $data['company_id'];
        $employee->department_id = $data['department_id'];
        $employee->age = Carbon::parse($data['birth_date'])->age;

        if (isset($data['avatar']) && $data['avatar'] != null)
        {
            $imageName = time().'.'.$data['avatar']->extension();
            $data['avatar']->move(public_path('/images/avatars'), $imageName);
            $employee->avatar = $imageName;
        }

        if ($employee->save())
        {
            $salary = new Salary();
            $salary->employee_id = $employee->id;
            $salary->salary = $data['salary'];
            $salary->save();
            if ($salary->save()){
                $employee->current_salary_id = $salary->id;
                $employee->save();
            }
            $employee->skill()->attach($data['skills']);
            return $employee;
        }
        return false;
    }

    public function updateEmployee()
    {

    }

}
