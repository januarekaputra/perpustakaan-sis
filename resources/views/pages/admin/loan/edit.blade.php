@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Confirmation Loan</h1>
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
        <form action="{{ route('ubah', $item->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group row">
            <div class="col-sm-4 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-user @error('kode_peminjaman') is-invalid @enderror" id="kode_peminjaman" name="kode_peminjaman" value="{{ $item->kode_peminjaman }}" readonly>
              @error('kode_peminjaman')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            @if ($item->user == NULL)
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-user @error('members_id') is-invalid @enderror" name="members_id" id="members_id" value="{{ $item->member->nama_anggota }}" readonly>
              @error('members_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            @else
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-user @error('user_id') is-invalid @enderror" name="user_id" id="user_id" value="{{ $item->user->name }}" readonly>
              @error('user_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            @endif

            <div class="col-sm-4 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user @error('books_id') is-invalid @enderror" id="books_id" name="books_id" value="{{ $item->book->judul }}" readonly>
                @error('books_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            
            
        </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label" for="keadaan">
                <input type="radio" name="keadaan" value="Sedang diproses" id="keadaan" {{$item->keadaan == 'Sedang diproses'? 'checked' : ''}} > Waiting for confirmation
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label" for="keadaan">
                <input type="radio" name="keadaan" value="Dipinjam" id="keadaan" {{$item->keadaan == 'Dipinjam'? 'checked' : ''}} > On loan
              </label>
            </div>
          </div>
          <hr>
              <button type="submit" class="btn btn-primary btn-icon-split">
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