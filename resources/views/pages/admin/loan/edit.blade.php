@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Loan</h1>
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
        <form action="{{ route('loan.update', $item->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="kode_peminjaman">ID</label>
            <input id="kode_peminjaman" class="form-control" value="{{ $item->kode_peminjaman }}" type="text" name="kode_peminjaman" readonly>
          </div>
          <div class="form-group">
            <label for="members_id">Name</label>
            <input id="members_id" class="form-control" value="{{ $item->member->nama_anggota }}" type="text" name="members_id" readonly>
          </div>
          <div class="form-group">
            <label for="books_id">Title</label>
            <input id="books_id" class="form-control" value="{{ $item->book->judul }}" type="text" name="books_id" readonly>
          </div>
          <div class="form-group">
            <label for="tgl_pinjam">Date Of Loan</label>
            <input id="tgl_pinjam" class="form-control" value="{{ $item->tgl_pinjam }}" type="text" name="tgl_pinjam" readonly>
          </div>
          <div class="form-group">
            <label for="tgl_pengembalian">Date Of Return</label>
            <input id="tgl_pengembalian" class="form-control" value="{{ $item->tgl_pengembalian }}" type="text" name="tgl_pengembalian" readonly>
          </div>
          <div class="form-group">
            <label for="keadaan" class="form-label">Status</label>
            <div class="form-check">
              <label class="form-check-label" for="keadaan">
                <input type="radio" name="keadaan" value="Dipinjam" id="keadaan" {{$item->keadaan == 'Dipinjam'? 'checked' : ''}} > Dipinjam
                <input type="radio" name="keadaan" value="Dikembalikan" id="keadaan" {{$item->keadaan == 'Dikembalikan'? 'checked' : ''}} > Dikembalikan
              </label>
            </div>
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