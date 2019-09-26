@extends('admin.employees-mgmt.base')
@section('action-content')
    <section class="content">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{$employee->first_name}} {{$employee->last_name}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{'/images/avatars/'.$employee->avatar}}" class="img-circle img-responsive"> </div>


                                <div class=" col-md-9 col-lg-9 ">
                                    <table class="table table-user-information">
                                        <tbody>

                                        <tr>
                                            <td>Age:</td>
                                            <td>{{$employee->age}} year</td>
                                        </tr>

                                        <tr>
                                            <td>Company:</td>
                                            <td>
                                                <img class="logo" src="{{'/images/logos/'.$employee->company->logo}}" width="20" height="20">
                                                {{$employee->company->name}}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Department:</td>
                                            <td>{{$employee->department->name}}</td>
                                        </tr>

                                        <tr>
                                            <td>Salary:</td>
                                            <td>{{$salary->salary}}</td>
                                        </tr>

                                        <tr>
                                            <td>Skills:</td>
                                            <td>

                                                @foreach($employee->skill as $skill)
                                                    <a href="">
                                                        <i class="{{$skill->class}}" title="{{$skill->name}}"></i>
                                                    </a>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Date of Birth:</td>
                                            <td>{{$employee->birth_date}}</td>
                                        </tr>

                                        <tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td>{{$employee->gender}}</td>
                                        </tr>
                                        <tr>
                                            <td>Country:</td>
{{--                                            <td>{{$employee->country}}</td>--}}
                                        </tr>
                                        <tr>
                                            <td>City:</td>
                                            <td>{{$employee->city}}</td>
                                        </tr>
                                        <tr>
                                            <td>Address:</td>
                                            <td>{{$employee->address}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td><a href="mailto:{{$employee->email}}">{{$employee->email}}</a></td>
                                        </tr>
                                        <td>Phone Number:</td>
                                        <td>{{$employee->phone}}</td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                            <span class="pull-right">
                             <form method="post" action="{{route('employee-management.destroy', $employee->id)}}">
                                    @csrf
                                    @method('DELETE')
                                <a href="{{route('employee-management.edit',$employee->id)}}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                <button data-original-title="Remove this user" data-toggle="tooltip" type="submit" class="delete btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                             </form>
                        </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>    </section>
@endsection
