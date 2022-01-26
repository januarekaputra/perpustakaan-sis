<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    table.static {
      position: relative;
      border: 1px solid #543535;
    }
  </style>
  <title>Loan Report</title>
</head>
<body>
  <div class="form-group">
    <img src="{{ url('frontend/images/sis.png') }}" alt="logo" style="display:block; margin:auto;" width="10%"> 
    <p class="text-black" align="center">
      <b>SANUR INDEPENDENT SCHOOL LIBRARY</b>
    </p>
    
    <p align="center"><b>LAPORAN DATA PEMINJAMAN</b></p>
    <table class="static" align="center" rules="all" border="1px" style="width: 95%">
      <thead>
        <tr>
          <th>NO.</th>
          <th>CODE</th>
          <th>NAME</th>
          <th>TITLE</th>
          <th>DATE OF LOAN</th>
          <th>DATE OF RETURN</th>
          <th>CONDITIONS</th>
        </tr>
      </thead>
      <tbody align="center">
        @foreach ($prints as $print)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $print->kode_peminjaman }}</td>
            <td>{{ $print->member->nama_anggota }}</td>
            <td>{{ $print->book->judul }}</td>
            <td>{{ $print->tgl_pinjam }}</td>
            <td>{{ $print->tgl_pengembalian}}</td>
            <td style="color: red">{{ $print->keadaan}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <script type="text/javascript">
    window.print();
  </script>
</body>
</html>