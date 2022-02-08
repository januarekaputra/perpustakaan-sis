@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Books</h1>
        <a href="{{ route('book.create') }}" class="btn btn-sm btn-primary shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Add Book
        </a>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
    @endif

      @if (session()->has('edit'))
        <div class="alert alert-warning" role="alert">
          {{ session('edit') }}
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
                  <th>BOOK ID</th>
                  <th>TITLE</th>
                  <th>CATEGORY</th>
                  <th>STOCK</th>
                  <th>BOOKSHELF</th>
                  <th>IMAGE</th>
                  <th>ACTION</th>
                </tr>
            </thead>
              <tbody>
                @forelse ($items as $item)
                <tr>
                  <td>{{ $item->kode_buku }}</td>
                  <td>{{ $item->judul }}</td>
                  <td>{{ $item->category->nama_kategori }}</td>
                  <td>
                    @if ($item->jumlah <= 0)
                      OUT OF STOCK
                    @else 
                      {{ $item->jumlah }}
                    @endif
                  </td>
                  <td>{{ $item->rak}}</td>
                  <td>
                    <img src="{{ Storage::url($item->image) }}" alt="image" style="width: 150px" class="img-thumbnail">
                  </td>
                  <td>
                    <a href="{{ route('book.show', $item->id) }}" class="btn btn-info">
                      <i class="fa fa-eye"></i>
                      
                    </a>
                    <a href="{{ route('book.edit', $item->id) }}" class="btn btn-warning">
                      <i class="fa fa-pencil-alt"></i>
                      
                    </a>
                    <form action="{{ route('book.destroy', $item->id) }}" method="POST" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger" onclick="return confirm('Are you sure want to delete {{ $item->judul }}?')">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>
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