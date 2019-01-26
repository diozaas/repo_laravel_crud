<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <header>
 
    <h2>Data Pegawai</h2>
    <nav>
      <a href="/pegawai">HOME</a>
      |
      <a href="#">TENTANG</a>
      |
      <a href="#">KONTAK</a>
    </nav>
  </header>

  <hr/>
  <br/>
  <br/>
 
  <a href="/pegawai/tambah">+ Tambah Pegawai</a>
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
      <td>{{ $p->pegawai_nama }}</td>
      <td>{{ $p->pegawai_jabatan }}</td>
      <td>{{ $p->pegawai_umur }}</td>
      <td>{{ $p->pegawai_alamat }}</td>
      <td>
        <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a> |
        <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
      </td>
    </tr>
    @endforeach
  </table>

  <br/>
  <br/>
 
 
  <br/>
  <br/>
  <hr/>
  <footer>
    <p>&copy; Web Development </p>
  </footer>

</body>
</html>