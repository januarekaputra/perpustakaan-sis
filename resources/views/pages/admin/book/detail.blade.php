@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Book</h1>
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
        <table class="table table-bordered">
          <tr>
            <img src="{{ Storage::url($item->image) }}" alt="image" style="width: 150px" class="img-thumbnail">
          </tr>
          <tr>
            <th>CODE</th>
            <td>{{ $item->kode_buku }}</td>
          </tr>
          <tr>
            <th>TITLE</th>
            <td>{{ $item->judul }}</td>
          </tr>
          <tr>
            <th>AUTHOR</th>
            <td>{{ $item->pengarang }}</td>
          </tr>
          <tr>
            <th>PUBLISHER</th>
            <td>{{ $item->penerbit }}</td>
          </tr>
          <tr>
            <th>CATEGORY</th>
            <td>{{ $item->category->nama_kategori }}</td>
          </tr>
          <tr>
            <th>STOCK</th>
            @if ($item->jumlah <= 0)
            <td>Stock Habis</td>
            @else 
            <td>{{ $item->jumlah }}</td>
            @endif
          </tr>
          <tr>
            <th>BOOKSHELF</th>
            <td>{{ $item->rak }}</td>
          </tr>
          <tr>
            <th>BARCODE</th>
            <td>
              @php
                echo DNS1D::getBarcodeSVG($item->kode_buku, 'C39');
              @endphp
            </td>
          </tr>
        </table>
        <a href="{{ route('book.index') }}" class="btn btn-danger"><i class="fas fa-arrow-left text-white"></i> Back</a>
      </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection