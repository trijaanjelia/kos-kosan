<!DOCTYPE html>
<html>
<head>
    <title>Edit Kos</title>
</head>
<body>

<h2>Edit Kos</h2>

<form action="/kos/{{ $kos->id }}" method="POST">

@csrf
@method('PUT')

<label>Nama Kos</label><br>
<input type="text" name="nama" value="{{ $kos->nama }}"><br><br>

<label>Alamat</label><br>
<input type="text" name="alamat" value="{{ $kos->alamat }}"><br><br>

<label>Kota</label><br>
<input type="text" name="kota" value="{{ $kos->kota }}"><br><br>

<label>Harga</label><br>
<input type="number" name="harga" value="{{ $kos->harga }}"><br><br>

<label>Deskripsi</label><br>
<textarea name="deskripsi">{{ $kos->deskripsi }}</textarea><br><br>

<button type="submit">Update Kos</button>

</form>

<br>
<a href="/kos">Kembali</a>

</body>
</html>