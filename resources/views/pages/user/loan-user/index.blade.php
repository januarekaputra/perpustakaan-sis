@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Loan</h1>
        <a href="{{ route('loan-user.create') }}" class="btn btn-sm btn-primary shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Add Loan
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
                  <th>CODE</th>
                  <th>TITLE</th>
                  <th>CONDITIONS</th>
                  <th>DATE OF LOAN</th>
                  <th>DATE OF RETURN</th>
                </tr>
            </thead>
              <tbody>
                @forelse ($items as $item)
                <tr>
                  <td>{{ $item->kode_peminjaman }}</td>
                  <td>{{ $item->book->judul }}</td>
                  <td>
                    @if($item->keadaan == 'Dipinjam')
                      <label class="badge badge-danger">On loan</label>
                    @endif

                    @if($item->keadaan == 'Dikembalikan')
                      <label class="badge badge-success">It's been returned</label>
                    @endif

                    @if ($item->keadaan == 'Sedang diproses')
                      <label class="badge badge-info">Waiting for confirmation</label>
                    @endif
                  </td>
                  <td>
                    @if($item->keadaan == 'Dipinjam' || $item->keadaan == 'Dikembalikan')
                    {{ $item->tgl_pinjam }}
                    @endif
                  </td>
                  <td>
                    @if($item->keadaan == 'Dipinjam' || $item->keadaan == 'Dikembalikan')
                    {{ $item->tgl_pengembalian}}
                    @endif
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