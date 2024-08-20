<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="container mt-5">
            <h1 class="mb-4">Daftar Berita</h1>
        
            <a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">Tambah Berita Baru</a>
        
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        
            <div class="list-group">
                @foreach($berita as $item)
                    <a href="{{ route('berita.show', $item->id) }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">{{ $item->judul }}</h5>
                        <small>Ditulis oleh: {{ $item->penulis }}</small>
                    </a>
                @endforeach
            </div>
        
            <!-- Pagination Links -->
            <div class="mt-4">
                {{ $berita->links('pagination::bootstrap-4') }}
            </div>
        </div> 
</body>
</html>
