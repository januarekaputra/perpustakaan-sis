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
<!-- /.container-fluid -->
@endsection