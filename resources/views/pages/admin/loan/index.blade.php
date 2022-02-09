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
        <div class="alert alert-success mt-3" role="alert">
          {{ session('success') }}
        </div>
    @endif

    @if (session()->has('delete'))
        <div class="alert alert-danger mt-3" role="alert">
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
                  @if ($item->user == NULL)
                    <td>{{ $item->member->nama_anggota }}</td>
                  @else
                    <td>{{ $item->user->name }}</td>
                  @endif
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

                  <td>{{ $item->tgl_pinjam }}</td>
                  <td>{{ $item->tgl_pengembalian}}</td>
                  <td>
                    @if($item->keadaan == 'Sedang diproses')
                    {{-- <a href="#" class="btn btn-info" data-toggle="modal" data-target="#insertModal">
                      <i class="fa fa-eye"></i>
                      <span class="text">View</span>
                    </a> --}}
                      <a href="{{ route('loan.edit', $item->id) }}" class="btn btn-info">
                        <i class="fa fa-eye"></i>
                        <span class="text">View</span>
                      </a>
                    @else
                      
                    @endif

                    @if($item->keadaan == 'Dipinjam')
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
{{-- Modal --}}
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="insertModal">Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('ubah', $item->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label" for="keadaan">
                <input type="radio" name="keadaan" value="Sedang diproses" id="keadaan" {{$item->keadaan == 'Sedang diproses'? 'checked' : ''}} > Waiting for confirmation
                <input type="radio" name="keadaan" value="Dipinjam" id="keadaan" {{$item->keadaan == 'Dipinjam'? 'checked' : ''}} > On loan
              </label>
            </div>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection