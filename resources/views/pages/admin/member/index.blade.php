@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Members</h1>
        <a href="{{ route('member.create') }}" class="btn btn-sm btn-primary shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Add Member
        </a>
      </div>
      {{-- <a href="/member/member_pdf" class="btn btn-sm btn-danger shadow-sm" target="_blank">
        <i class="far fa-file-pdf"></i> Cetak PDF
      </a> --}}

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
                  <th>#</th>
                  <th>MEMBER ID</th>
                  <th>NAME</th>
                  <th>GENDER</th>
                  <th>STATUS</th>
                  <th>ADDRESS</th>
                  <th>ACTION</th>
                </tr>
            </thead>
              <tbody>
                @forelse ($items as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->no_anggota }}</td>
                  <td>{{ $item->nama_anggota }}</td>
                  <td>
                    @if($item->jen_kel == 'Laki-Laki')
                      Male
                    @endif
                    @if($item->jen_kel == 'Perempuan')
                      Female
                    @endif
                  </td>
                  <td>
                    @if($item->status == 'Guru')
                      Teacher
                    @endif
                    @if($item->status == 'Siswa')
                      Student
                    @endif
                    @if($item->status == 'Staff')
                      Staff
                    @endif
                  </td>
                  <td>{{ $item->alamat }}</td>
                  <td>
                    <a href="{{ route('member.show', $item->no_anggota) }}" class="btn btn-info">
                      <i class="fa fa-eye"></i>
                      
                    </a>
                    <a href="{{ route('member.edit', $item->no_anggota) }}" class="btn btn-warning">
                      <i class="fa fa-pencil-alt"></i>
                      
                    </a>
                    <form action="{{ route('member.destroy', $item->no_anggota) }}" method="POST" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete {{ $item->nama_anggota }}?')">
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