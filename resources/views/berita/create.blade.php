  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Berita Baru</h1>

        <form method="POST" action="{{ route('berita.store') }}">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul:</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul') }}">
                @error('judul')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="isi" class="form-label">Isi:</label>
                <textarea name="isi" id="isi" class="form-control">{{ old('isi') }}</textarea>
                @error('isi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis:</label>
                <input type="text" name="penulis" id="penulis" class="form-control" value="{{ old('penulis') }}">
                @error('penulis')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
