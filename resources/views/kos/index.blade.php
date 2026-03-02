<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Kos</title>
</head>
<body>

<h2>Tambah Kos Baru</h2>

<form action="/kos" method="POST">
    @csrf

    <label>Nama Kos</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Alamat</label><br>
    <input type="text" name="alamat" required><br><br>

    <label>Kota</label><br>
    <input type="text" name="kota" required><br><br>

    <label>Harga</label><br>
    <input type="number" name="harga" required><br><br>

    <label>Deskripsi</label><br>
    <textarea name="deskripsi"></textarea><br><br>

    <button type="submit">Simpan</button>

</form>

</body>
</html>