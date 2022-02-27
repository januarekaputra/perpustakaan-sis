@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Categories</h1>
        <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Add Category
        </a>
      </div>

      @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
      @endif

      @if (session()->has('delete'))
        <div class="alert alert-danger" role="alert">
          {{ session('delete') }}
        </div>
      @endif

    <div class="row">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>CATEGORY ID</th>
                  <th>NAME</th>
                  <th>ACTION</th>
                </tr>
            </thead>
              <tbody>
                @forelse ($items as $item)
                <tr>
                  <td>{{ $item->kode_kategori }}</td>
                  <td>{{ $item->nama_kategori }}</td>
                  <td>
                    <a href="{{ route('category.edit', $item->id) }}" class="btn btn-warning">
                      <i class="fa fa-pencil-alt"></i>
                      
                    </a>
                    
                    <form action="{{ route('category.destroy', $item->id) }}" method="POST">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger" onclick="return confirm('Are you sure want to delete {{ $item->nama_kategori }}?')">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="7" class="text-center">
                    Data Not Available
                  </td>
                </tr>
                @endforelse
              </tbody>
          </table>
        </div>
      </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection