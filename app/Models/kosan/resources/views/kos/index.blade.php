<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kos</title>
</head>
<body>

<h2>Daftar Kos</h2>

<a href="/kos/create">+ Tambah Kos</a>

<br><br>

@if($dataKos->count() > 0)

<table border="1" cellpadding="10">
<tr>
<th>Foto</th>
<th>Nama</th>
<th>Alamat</th>
<th>Kota</th>
<th>Harga</th>
<th width="250">Deskripsi</th>
<th>Aksi</th>
</tr>

@foreach($dataKos as $kos)
<tr>

<td>
@php
$fotos = json_decode($kos->foto);
@endphp

@if($fotos)
@foreach($fotos as $foto)
<img src="{{ asset('storage/'.$foto) }}" width="120">
@endforeach
@endif
</td>

<td>{{ $kos->nama }}</td>
<td>{{ $kos->alamat }}</td>
<td>{{ $kos->kota }}</td>
<td>{{ $kos->harga }}</td>
<td style="max-width:250px; word-wrap:break-word;">
{{ $kos->deskripsi }}
</td>

<td>
<a href="/kos/{{ $kos->id }}">Detail</a>
</td>

</tr>
@endforeach

</table>

@else
<p>Belum ada data kos.</p>
@endif

</body>
</html>