<!DOCTYPE html>
<html>
<head>
<title>Detail Kos</title>
</head>
<body>

<h2>{{ $kos->nama }}</h2>

@php
$fotos = json_decode($kos->foto);
@endphp

@if($fotos)
@foreach($fotos as $foto)
<img src="{{ asset('storage/'.$foto) }}" width="300">
@endforeach
@endif

<p><b>Alamat:</b> {{ $kos->alamat }}</p>
<p><b>Kota:</b> {{ $kos->kota }}</p>
<p><b>Harga:</b> Rp {{ $kos->harga }}</p>

<h3>Deskripsi</h3>
<p>{{ $kos->deskripsi }}</p>

<br>
<a href="/kos">Kembali</a>

</body>
</html>