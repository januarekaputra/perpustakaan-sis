@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Restore</h1>
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
        <form action="{{ route('restore.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="loans_id" class="form-label">Title</label>
            <select id="loans_id" name="loans_id" class="form-control dinamis select2 @error('loans_id') is-invalid @enderror" value="{{ old('loans_id') }}">
              <option selected>--SELECT CODE--</option>
              @foreach ($items as $item)
                <option value="{{ $item->id }}">
                  {{ $item->kode_peminjaman }}
                </option>
              @endforeach
              @error('loans_id')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
            </select>
          </div>
          <div class="form-group">
            <label for="loans_id" class="form-label">Title</label>
            <select id="loans_id" name="loans_id" class="form-control dinamis select2 @error('loans_id') is-invalid @enderror" value="{{ old('loans_id') }}">
              <option selected>--SELECT CODE--</option>
              @foreach ($items as $item)
                <option value="{{ $item->id }}">
                  {{ $item->books_id }}
                </option>
              @endforeach
              @error('loans_id')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
            </select>
          </div>
          <button type="submit" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-check"></i>
            </span>
            <span class="text">Restore</span>
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
      
    });
  </script>
@endpush