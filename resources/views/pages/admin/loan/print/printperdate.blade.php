@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Print Loan Report</h1>
    </div>

    <a href="{{ route('print') }}" target="_blank" class="btn btn-sm btn-danger shadow-sm">
      <i class="fas fa-file-pdf text-white-50"></i> Print All Data
    </a>

    <hr>

    <div class="row">
      <div class="card-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Search Data From</span>
          </div>
          <input id="tglawal" class="form-control" type="date" name="tglawal">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Until</span>
          </div>
          <input id="tglakhir" class="form-control" type="date" name="tglakhir">
        </div>

        <div class="input-group mb-3">
          <a href="#" onclick="this.href='/printperdate/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value " target="_blank" class="btn btn-primary shadow">
            <i class="fas fa-file-pdf text-white-50"></i> Print Data
          </a>
        </div>


      </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection