@extends('admin.employees-mgmt.base')
@section('action-content')
    <!-- Main content -->


    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">List of employees</h3>
        </div>
        <div class="col-sm-4">
          <a class="btn btn-primary" href="{{ route('employee-management.create') }}">Add new employee</a>
        </div>
    </div>
  </div>
  <div class="box-body">
      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th width="1%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Picture: activate to sort column descending" aria-sort="ascending">Avatar</th>
                <th width="6%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">Employee Name</th>
                <th width="6%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Age</th>
                <th width="6%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending">Company</th>
                <th width="6%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending">Department</th>
                <th width="6%">Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
                    <tr role="row" class="odd">
                      <td>
                          <span class="round">
                          <img  src="{{'images/avatars/'.$employee->avatar}}" width="50px" height="50px"/>
                          </span>
                      </td>
                      <td class="sorting_1">
                          {{ $employee->first_name }} {{$employee->last_name}}

                      </td>
                      <td class="hidden-xs">
                          {{ $employee->age }} year
                      </td>
                      <td class="hidden-xs">
                          <img src="{{'/images/logos/'.$employee->company->logo}}" width="20" height="20">
                              {{ $employee->company->name }}
                      </td>
                      <td class="hidden-xs">
                          {{ $employee->department->name }}
                      </td>
                      <td>
                        <form action="{{route('employee-management.destroy',$employee->id)}}" method="post" class="delete">
                            @csrf
                            @method('DELETE')
                            <a class="btn" href="{{route('employee-management.show',$employee->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a class="btn" href="{{ route('employee-management.edit',$employee->id) }}"><i class="glyphicon glyphicon-edit"></i></a>
                            <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                        </form>
                      </td>
                    </tr>
            @endforeach
            </tbody>
          </table>



        </div>
      </div>



      <div class="row">
        <div class="col-sm-5">
{{--          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($employees)}} of {{count($employees)}} entries</div>--}}
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
              {{ $employees->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </section>


@endsection
