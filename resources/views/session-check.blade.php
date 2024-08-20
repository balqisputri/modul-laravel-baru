<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Check</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Menampilkan pesan sesuai dengan status session -->
        <div class="alert {{ Str::contains($message, 'exists') ? 'alert-success' : 'alert-danger' }}">
            {{ $message }}
        </div>
        <!-- Tombol untuk menambah dan menghapus item dari session -->
        <a href="{{ route('session.add') }}" class="btn btn-primary">Add Item to Session</a>
        <a href="{{ route('session.remove') }}" class="btn btn-danger">Remove Item from Session</a>
    </div>
</body>
</html>
