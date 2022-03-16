@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Users</h1>
      </div>

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
                  <th>ID</th>
                  <th>NAME</th>
                  <th>USERNAME</th>
                  <th>ADDRESS</th>
                  <th>EMAIL</th>
                  <th>PHONE NUMBER</th>
                  <th>ACTION</th>
                </tr>
            </thead>
              <tbody>
                @forelse ($items as $item)
                  @if ($item->roles == 'USER')
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->username }}</td>
                      <td>{{ $item->address }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->phone }}</td>
                      <td>
                        <form action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete {{ $item->name }}?')">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                  @endif
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