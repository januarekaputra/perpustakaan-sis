@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $item->nama_anggota }}'s Personal Data</h1>
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
            <th>MEMBER ID</th>
            <td>{{ $item->no_anggota }}</td>
          </tr>
          <tr>
            <th>NAME</th>
            <td>{{ $item->nama_anggota }}</td>
          </tr>
          <tr>
            <th>GENDER</th>
            <td>
              @if($item->jen_kel == 'Laki-Laki')
                Male
              @endif
              @if($item->jen_kel == 'Perempuan')
                Female
              @endif
            </td>
          </tr>
          <tr>
            <th>STATUS</th>
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
          </tr>
          <tr>
            <th>ADDRESS</th>
            <td>{{ $item->alamat }}</td>
          </tr>
          <tr>
            <th>EMAIL</th>
            @if ($item->email == '')
            <td>-</td>
            @else 
            <td>{{ $item->email }}</td>
            @endif
          </tr>
          <tr>
            <th>PHONE NUMBER</th>
            @if ($item->no_telp == '')
            <td>-</td>
            @else 
            <td>{{ $item->no_telp }}</td>
            @endif
          </tr>
          <tr>
            <th>BARCODE</th>
            <td>
              @php
                echo DNS1D::getBarcodeSVG($item->no_anggota, 'C39');
                // echo DNS1D::getBarcodeHTML('4445645656', 'CODE11');
              @endphp
            </td>
          </tr>
        </table>
        <a href="{{ route('member.index') }}" class="btn btn-danger"><i class="fas fa-arrow-left text-white"></i> Back</a>
      </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection