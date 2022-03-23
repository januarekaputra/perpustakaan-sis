@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Member</h1>
    </div>

    <div class="card shadow">
      <div class="card-body">
        <form action="{{ route('member.store') }}" method="POST">
          @csrf
          <div class="form-group @error('no_anggota') is-invalid @enderror">
            <label for="no_anggota">Member ID</label>
            <input id="no_anggota" placeholder="Member ID" class="form-control @error('no_anggota') is-invalid @enderror" value="{{ old('no_anggota') }}" type="text" name="no_anggota" required autofocus>
            @error('no_anggota')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="nama_anggota">Name</label>
            <input id="nama_anggota" placeholder="Name" class="form-control @error('nama_anggota') is-invalid @enderror" value="{{ old('nama_anggota') }}" type="text" name="nama_anggota" required>
            @error('nama_anggota')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="jen_kel" class="form-label">Gender</label>
            <div class="form-check">
              <input class="form-check-input @error('jen_kel') is-invalid @enderror" type="radio" name="jen_kel" id="jen_kel" value="Laki-Laki" {{ old('jen_kel') == 'Laki-Laki' ? 'checked' : '' }} required>
              <label class="form-check-label" for="jen_kel">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input @error('jen_kel') is-invalid @enderror" type="radio" name="jen_kel" id="jen_kel" value="Perempuan" {{ old('jen_kel') == 'Perempuan' ? 'checked' : '' }} required>
              <label class="form-check-label" for="jen_kel">
                Female
              </label>
            </div>
            @error('jen_kel')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="kelas" class="form-label">Status</label>
            <div class="form-check">
              <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="status" value="Guru" {{ old('status') == 'Guru' ? 'checked' : '' }} required>
              <label class="form-check-label" for="status">
                Teacher
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="status" value="Siswa" {{ old('status') == 'Siswa' ? 'checked' : '' }} required>
              <label class="form-check-label" for="status">
                Student
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="status" value="Staff" {{ old('status') == 'Staff' ? 'checked' : '' }} required>
              <label class="form-check-label" for="status">
                Staff
              </label>
            </div>
            @error('status')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="kelas" class="form-label">Grade</label>
            <div class="form-check">
              <input class="form-check-input @error('kelas') is-invalid @enderror" type="radio" name="kelas" id="kelas" value="TK" {{ old('kelas') == 'TK' ? 'checked' : '' }}>
              <label class="form-check-label" for="kelas">
                Kindergarten
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input @error('kelas') is-invalid @enderror" type="radio" name="kelas" id="kelas" value="SD" {{ old('kelas') == 'SD' ? 'checked' : '' }}>
              <label class="form-check-label" for="kelas">
                Primary School
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input @error('kelas') is-invalid @enderror" type="radio" name="kelas" id="kelas" value="SMP" {{ old('kelas') == 'Staff' ? 'checked' : '' }}>
              <label class="form-check-label" for="kelas">
                Junior High School
              </label>
            </div>
            @error('kelas')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="no_telp">Phone Number</label>
            <input id="no_telp" placeholder="Phone Number" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp') }}" type="number" name="no_telp" required>
            @error('no_telp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
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