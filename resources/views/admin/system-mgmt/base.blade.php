@extends('admin.layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        System Mangement
      </h1>
      <ol class="breadcrumb">
        <li class="active">System Mangement</li>
      </ol>
    </section>
    @yield('action-content')
  </div>
@endsection
