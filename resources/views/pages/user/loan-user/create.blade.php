@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Loan</h1>
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
        <form action="{{ route('loan-user.store') }}" method="POST">
          @csrf
          {{-- buku loan --}}
          <div class="form-group" hidden="true">
            <label for="kode_peminjaman">Loan ID</label>
            <input id="kode_peminjaman" placeholder="Kode Pinjam" class="form-control @error('kode_peminjaman') is-invalid @enderror" value="{{ $kode_peminjaman }}" type="text" name="kode_peminjaman" readonly>
          </div>

          <div class="form-group" hidden="true">
            <label for="user_id">Name</label>
            <input id="user_id" placeholder="Name" class="form-control @error('user_id') is-invalid @enderror" value="{{ Auth()->user()->id }}" type="text" name="user_id" readonly hidden="true">
          </div>

          <div class="form-group">
            <label for="books_id" class="form-label">Title</label>
            <select id="books_id" name="books_id" class="form-control single @error('books_id') is-invalid @enderror" value="{{ old('books_id') }}" data-dependent="books_id">
              <option value="">Choose Book Title</option>
              @foreach ($books as $book)
                <option value="{{ $book->id }}">
                  {{ $book->judul }}
                </option>
              @endforeach
              @error('books_id')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
            </select>
          </div>
          {{-- end loan --}}

          <div class="form-group" hidden="true">
            <label for="tgl_pinjam">Date of Loan</label>
            <input id="tgl_pinjam" placeholder="Date Of Loan" class="form-control @error('tgl_pinjam') is-invalid @enderror" value="{{ $tgl_pinjam }}" type="date" name="tgl_pinjam" readonly>
            @error('tgl_pinjam')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group" hidden="true">
            <label for="tgl_pengembalian">Date of Return</label>
            <input id="tgl_pengembalian" placeholder="Date Of Return" class="form-control @error('tgl_pengembalian') is-invalid @enderror" value="{{ $tgl_pengembalian }}" type="date" name="tgl_pengembalian" readonly>
            @error('tgl_pengembalian')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          {{-- end loan --}}
          <button type="submit" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-check"></i>
            </span>
            <span class="text">Loan</span>
          </button>
        </form>
      </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
@push('script')
  <script>
    $(document).ready(function() {
      $('.single').select2();
    });
  </script>
@endpush