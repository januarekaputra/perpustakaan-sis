@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Category</h1>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="card shadow">
      <div class="card-body">
        <form action="{{ route('category.update', $item->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf

          <div class="form-group" hidden="true">
            <label for="kode_kategori">Category ID</label>
            <input id="kode_kategori" class="form-control" value="{{ $item->kode_kategori }}" type="text" name="kode_kategori" readonly>
          </div>

          <div class="form-group">
            <label for="nama_kategori">Category</label>
            <input id="nama_kategori" class="form-control" value="{{ $item->nama_kategori }}" type="text" name="nama_kategori" required>
          </div>

          <button type="submit" class="btn btn-warning btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-check"></i>
            </span>
            <span class="text">Update</span>
          </button>
        </form>
      </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection