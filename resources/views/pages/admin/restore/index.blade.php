@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Restore</h1>
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
                  <th>NO</th>
                  <th>LOAN CODE</th>
                  <th>NAME</th>
                  <th>TITLE</th>
                  <th>DATE OF LOAN</th>
                  <th>DATE OF RETURN</th>
                  <th>RETURN DATE</th>
                  <th>STATUS</th>
                </tr>
            </thead>
              <tbody>
                @forelse ($items as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->loan->kode_peminjaman }}</td>
                  @if ($item->loan->user == NULL)
                    <td>{{ $item->loan->member->nama_anggota }}</td>
                  @else
                    <td>{{ $item->loan->user->name }}</td>
                  @endif
                  {{-- <td>{{ $item->loan->member->nama_anggota }}</td> --}}
                  <td>{{ $item->loan->book->judul }}</td>
                  <td>{{ $item->loan->tgl_pinjam }}</td>
                  <td>{{ $item->loan->tgl_pengembalian }}</td>
                  <td>{{ $tgl_kembali }}</td>
                  <td>
                    @if ($item->loan->tgl_pengembalian < $tgl_kembali)
                      <label class="badge badge-danger">Late</label>
                    @else
                      <label class="badge badge-success">It's been returned</label>
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