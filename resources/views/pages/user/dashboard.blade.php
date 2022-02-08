@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Welcome Back!!</h6>
            </div>
            <div class="card-body">
                <p>Welcome, <b class="text-uppercase ">{{ Auth::user()->name }} </b></p>
                <p class="mb-0">Sanur Independent School Library<br> Don't Give Your Email and Password to Anyone</p>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection