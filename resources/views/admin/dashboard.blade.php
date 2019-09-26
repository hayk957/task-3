@extends('admin.layouts.app-template')

@section('content')
<div class="wrapper">
    <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>


      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        @foreach($companies as $company)

        <div class="company col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon"><img class="logo" src="{{'images/logos/'.$company->logo}}"></span>

            <div class="info-box-content">
              <span class="info-box-text">
                <a href="{{route('companies.show',$company->id)}}">
                  {{$company->name}}
                </a>
              </span>
             <span class="info-box-number"> <small>{{count($company->employees)}}  employee{{ count($company->employees) > 1 ? 's' : '' }}</small></span>
            </div>
          </div>
        </div>
          @endforeach

      </div>


        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Best Developers</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="250px">Name</th>
                        <th width="200px">Company</th>
                        <th width="400px">Skills</th>
                        <th width="200px">Salary</th>
                    </tr>
                    @foreach($employees as $employee)

                    <tr>
                        <td>{{$employee->first_name}} {{$employee->last_name}}</td>
                        <td><img src="{{'/images/logos/'.$employee->company->logo}}" width="20" height="20">{{$employee->company->name}}</td>
                        <td></td>

                        @foreach($salaries as $salary)
                        <td>{{$salary->salary}}</td>
                        @endforeach

                    </tr>
                        @endforeach

                </table>
            </div>
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </section>
  </div>
</div>
@endsection


