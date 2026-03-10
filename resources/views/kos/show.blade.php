<!DOCTYPE html>
<html>
<head>
    <title>Detail Kos</title>
</head>
<body>

<h2>Detail Kos</h2>

<p><b>Nama:</b> {{ $kos->nama }}</p>
<p><b>Alamat:</b> {{ $kos->alamat }}</p>
<p><b>Kota:</b> {{ $kos->kota }}</p>
<p><b>Harga:</b> {{ $kos->harga }}</p>
<p><b>Deskripsi:</b> {{ $kos->deskripsi }}</p>

<h3>Foto Kos</h3>

@php
$fotos = json_decode($kos->foto);
@endphp

@if($fotos)
    @foreach($fotos as $foto)
        <img src="{{ asset('storage/'.$foto) }}" width="200">
    @endforeach
@endif

<br><br>

<a href="/kos">Kembali ke daftar kos</a>

</body>
</html>