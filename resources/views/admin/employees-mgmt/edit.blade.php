@extends('admin.employees-mgmt.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update employee</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('employee-management.update', $employee->id) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @method('PUT')

{{--                        <span>{{ Session::get('errors') }}</span>--}}

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $employee->first_name }}"  autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $employee->last_name }}" >

                                @if ($errors->has('last_name'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('last-name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ $employee->address }}" >

                                @if ($errors->has('address'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Birthday</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ $employee->birth_date }}" name="birth_date" class="form-control pull-right" id="birthDate" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 control-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $employee->email }}"  autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">

                                <input id="phone" type="text" class="form-control" name="phone"
                                       value="{{  old('phone') ?? $employee->phone }}">

                                @if ($errors->has('phone'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Salary</label>

                            <div class="col-md-6">

                                <input id="salary" type="text" class="form-control" name="salary" value="{{ $salary->salary }}">

                                @if ($errors->has('salary'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('skill_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Skills</label>
                            <div class="col-md-6">
                                <select class="form-control selectpicker"  data-style="bg-white rounded-pill px-4 py-3 shadow-sm " name="skill_id[]"  multiple>
                                        @foreach ($skills as $skill)
                                        <option
                                            @foreach($employee->skill as $employee_skill)
                                                {{$employee_skill->id == $skill->id ? 'selected' : ''}}
                                            @endforeach
                                                value="{{$skill->id}}">
                                                    {{$skill->name}}
                                        </option>
                                        @endforeach
                                </select>
                                @if ($errors->has('skill_id'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('skill_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('company_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Company</label>
                            <div class="col-md-6">
                                <select class="form-control" name="company_id">
                                    @foreach ($companies as $company)
                                        <option {{$employee->company_id == $company->id ? 'selected' : ''}} value="{{$company->id}}">{{$company->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('company_id'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('company_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Department</label>
                            <div class="col-md-6">
                                <select class="form-control" name="department_id">
                                    @foreach ($departments as $department)
                                        <option {{$employee->department_id == $department->id ? 'selected' : ''}} value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label" >Avatar</label>
                            <div class="col-md-6">
                                <img src="{{'/images/avatars/'.$employee->avatar}}" width="80px" height="`80px`"/>
                                <input type="file" id="avatar" name="avatar"/>
                                <input type="hidden" name="hidden_image" value="{{ $employee->avatar }}" />
                            </div>
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
