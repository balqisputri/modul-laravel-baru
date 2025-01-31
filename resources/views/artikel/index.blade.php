<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
    <h1>Articles</h1>
    @foreach ($articles as $article)
        <div>
            <h3>{{ $article->title }}</h3>
            <p>{{ $article->content }}</p>
        </div>
    @endforeach

    {{ $articles->links() }}
</body>
</html>
