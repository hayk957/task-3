@extends('admin.system-mgmt.base')
@section('action-content')
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Company</h3>
                    </div>

                    <form role="form" id="company_create" method="post" action="{{ route('create.company') }}" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Name</label>
                                <input type="text" class="form-control" id="" name="company_name" placeholder="Enter company name"/>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="logo" name="logo">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Department</h3>
                    </div>

                    <form role="form" id="department_create">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Department Name</label>
                                <input type="text" class="form-control" id="" placeholder="Enter department name"/>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Skill</h3>
                    </div>

                    <form role="form" id="skill_create">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skill Name</label>
                                <input type="text" class="form-control" id="" placeholder="Enter skill name"/>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>





        </div>
    </section>


    <!-- /.content -->
@endsection
