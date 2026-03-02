<!DOCTYPE html>
<html>
<head>
    <title>Data Kos</title>
</head>
<body>

<h1>Daftar Kos</h1>

@forelse($dataKos as $kos)
    <div style="border:1px solid black; padding:10px; margin-bottom:10px;">
        <h3>{{ $kos->nama }}</h3>
        <p>Alamat: {{ $kos->alamat }}</p>
        <p>Kota: {{ $kos->kota }}</p>
        <p>Harga: Rp {{ $kos->harga }}</p>
        <p>{{ $kos->deskripsi }}</p>
    </div>
@empty
    <p>Belum ada data kos.</p>
@endforelse

</body>
</html>