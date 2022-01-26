@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Loan</h1>
        <a href="{{ route('loan.create') }}" class="btn btn-sm btn-primary shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Add Loan
        </a>
      </div>
        
        <a href="{{ route('print') }}" target="_blank" class="btn btn-sm btn-danger shadow-sm">
          <i class="fas fa-file-pdf text-white-50"></i> Print PDF
        </a>
      

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
                  <th>NAME</th>
                  <th>TITLE</th>
                  <th>CONDITIONS</th>
                  <th>DATE OF LOAN</th>
                  <th>DATE OF RETURN</th>
                  <th>ACTION</th>
                </tr>
            </thead>
              <tbody>
                @forelse ($items as $item)
                <tr>
                  <td>{{ $item->kode_peminjaman }}</td>
                  <td>{{ $item->member->nama_anggota }}</td>
                  <td>{{ $item->book->judul }}</td>
                  <td>
                    @if($item->keadaan == 'Dipinjam')
                      <label class="badge badge-danger">Dipinjam</label>
                    @else
                      <label class="badge badge-success">Kembali</label>
                    @endif
                    {{-- <label class="badge badge-info">{{ $item->keadaan }}</label> --}}
                    
                  </td>
                  {{-- <td>
                    @if ($item->keadaan == "Belum Dikembalikan")
                            <a href="{{ route('restore') }}" class="btn btn-success btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Dikembalikan</span>
                            </a>
                    @else
                      <a href="{{ route('loan') }}" class="btn btn-danger btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                          <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Dikembalikan</span>
                      </a>
                    @endif
                  </td> --}}
                  <td>{{ $item->tgl_pinjam }}</td>
                  <td>{{ $item->tgl_pengembalian}}</td>
                  <td>
                    @if($item->keadaan == 'Dipinjam')
                      {{-- <a href="kembalikan/{{$item->id}}" class="btn btn-warning" onclick="return confirm('Anda yakin data ini sudah kembali?')">
                        <i class="fas fa-arrow-circle-left"></i>
                        <span class="text">Restore</span>
                      </a> --}}
                      {{-- <a href="{{ route('loan.edit', $item->id) }}" class="btn btn-warning">
                        <i class="fas fa-arrow-circle-left"></i>
                        <span class="text">Restore</span>
                      </a> --}}
                      <form action="{{ route('loan.update', $item->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-warning" onclick="return confirm('Anda yakin data ini sudah kembali?')"><i class="fas fa-arrow-circle-left"></i>
                          <span class="text">Restore</span>
                        </button>
                      </form>
                    @else
                      
                    @endif
                    @if($item->keadaan == 'Dikembalikan')
                      <form action="{{ route('loan.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure want to delete {{ $item->kode_peminjaman }}?')">
                          <i class="fa fa-trash"></i>
                        </button>
                      </form>
                    @else
                      
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