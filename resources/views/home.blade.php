<!-- Menghubungkan dengan view template master -->
@extends('index')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	
  <h2>Data Pegawai</h2>
  <a href="/pegawai/tambah">+ Tambah Pegawai</a>

  <br/>
  <br/>

  <table border="1">
    <tr>
      <th>Nama</th>
      <th>Umur</th>
      <th>Jabatan</th>
      <th>Alamat</th>
      <th>Opsi</th>
    </tr>
    @foreach($pegawai as $p)
    <tr>
      <td>{//{ $p->pegawai_nama }}</td>
      <td>{//{ $p->pegawai_jabatan }}</td>
      <td>{//{ $p->pegawai_umur }}</td>
      <td>{//{ $p->pegawai_alamat }}</td>
      <td>
        <a href="/pegawai/edit/{//{ $p->pegawai_id }}">Edit</a> |
        <a href="/pegawai/hapus/{//{ $p->pegawai_id }}">Hapus</a>
      </td>
    </tr>
    @endforeach
  </table-->

@endsection