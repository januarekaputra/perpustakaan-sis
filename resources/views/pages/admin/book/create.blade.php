@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Book</h1>
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
        <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="kode_buku">Book ID</label>
            <input id="kode_buku" placeholder="Book ID" class="form-control @error('kode_buku') is-invalid @enderror" value="{{ $kode_buku }}" type="text" name="kode_buku" readonly>
          </div>
          <div class="form-group">
            <label for="judul">Title</label>
            <input id="judul" placeholder="Title" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" type="text" name="judul" autofocus>
            @error('judul')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="pengarang">Author</label>
            <input id="pengarang" placeholder="Author" class="form-control @error('pengarang') is-invalid @enderror" value="{{ old('pengarang') }}" type="text" name="pengarang">
            @error('pengarang')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="penerbit">Publisher</label>
            <input id="penerbit" placeholder="Publisher" class="form-control @error('penerbit') is-invalid @enderror" value="{{ old('penerbit') }}" type="text" name="penerbit">
            @error('penerbit')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="category_id" class="form-label">Category</label>
            <select id="category_id" name="category_id" class="form-control @error('category_id') is-invalid @enderror" value="{{ old('category_id') }}" aria-label="Default select example">
              <option value="">Pilih Kategori</option>
              @foreach ($categories as $category)
                  <option value="{{ $category->id }}">
                    {{ $category->nama_kategori }}
                  </option>
              @endforeach
              @error('category_id')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
            </select>
          </div>
          <div class="form-group">
            <label for="jumlah">Stock</label>
            <input id="jumlah" placeholder="Stock" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}" type="text" name="jumlah">
            @error('jumlah')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="rak">Bookshelf</label>
            <input id="rak" placeholder="Bookshelf" class="form-control @error('rak') is-invalid @enderror" value="{{ old('rak') }}" type="text" name="rak" required>
            @error('rak')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input id="image" placeholder="Image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" type="file" name="image">
            @error('image')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <button type="submit" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-check"></i>
            </span>
            <span class="text">Add</span>
          </button>
        </form>
      </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection