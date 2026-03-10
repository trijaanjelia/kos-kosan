<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kos</title>
</head>
<body>

<h2>Tambah Kos</h2>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('kos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Nama Kos:</label><br>
    <input type="text" name="nama" value="{{ old('nama') }}"><br><br>

    <label>Alamat:</label><br>
    <input type="text" name="alamat" value="{{ old('alamat') }}"><br><br>

    <label>Kota:</label><br>
    <input type="text" name="kota" value="{{ old('kota') }}"><br><br>

    <label>Harga:</label><br>
    <input type="number" name="harga" value="{{ old('harga') }}"><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="deskripsi">{{ old('deskripsi') }}</textarea><br><br>

    <label>Foto (boleh lebih dari 1):</label><br>
    <input type="file" name="foto[]" multiple><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>