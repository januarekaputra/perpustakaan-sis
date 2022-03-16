@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Book</h1>
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
        <form action="{{ route('book.update', $item->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group" hidden="true">
            <label for="kode_buku">Book ID</label>
            <input id="kode_buku" class="form-control" value="{{ $item->kode_buku }}" type="text" name="kode_buku" readonly>
          </div>

          <div class="form-group">
            <label for="isbn">ISBN</label>
            <input id="isbn" placeholder="ISBN" class="form-control" value="{{ $item->isbn }}" type="text" name="isbn">
          </div>

          <div class="form-group">
            <label for="judul">Title</label>
            <input id="judul" placeholder="Title" class="form-control" value="{{ $item->judul }}" type="text" name="judul" required>
          </div>

          <div class="form-group">
            <label for="pengarang">Author</label>
            <input id="pengarang" placeholder="Author" class="form-control" value="{{ $item->pengarang }}" type="text" name="pengarang" required>
          </div>
          
          <div class="form-group">
            <label for="penerbit">Publisher</label>
            <input id="penerbit" placeholder="Publisher" class="form-control" value="{{ $item->penerbit }}" type="text" name="penerbit" required>
          </div>
          <div class="form-group">
            <label for="category_id" class="form-label">Category</label>
            <select id="category_id" name="category_id" class="form-control single @error('category_id') is-invalid @enderror" aria-label="Default select example" required>
              @foreach ($categories as $category)
                <option value="{{ $category->id }}" 
                  @if ($category->id === $item->category_id)
                    selected
                  @endif>
                  {{ $category->nama_kategori }}
                </option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="jumlah">Stock</label>
            <input id="jumlah" placeholder="Stock" class="form-control" value="{{ $item->jumlah }}" type="text" name="jumlah" required>
          </div>
          <div class="form-group">
            <label for="rak">Bookshelf</label>
            <input id="rak" placeholder="Bookshelf" class="form-control" value="{{ $item->rak }}" type="text" name="rak" required>
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input id="image" placeholder="Image" class="form-control" type="file" name="image" value="{{ $item->image ? Storage::url($item->image) : '' }}" required>
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

@push('script')
  <script>
    $(document).ready(function() {
      $('.single').select2();
    });
  </script>
@endpush