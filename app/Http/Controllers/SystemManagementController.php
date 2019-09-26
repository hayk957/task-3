<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Skill;
class SystemManagementController extends Controller
{

    public function index()
    {
        return view('admin/system-mgmt/index');
    }

    public function create_company(Request $request)
    {

        $company = new Company();
        $company->company_name = $request->company_name;

        $imageName = time().'.'.$request->logo->extension();

        $request->logo->move(public_path('/images/logos'), $imageName);



        Company::create($request->all());

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);

    }


}
