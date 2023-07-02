<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <h1>Film</h1>
    <div>
        @foreach ($movies as $movie)
            <div style="border: 1px solid black; padding: 10px; margin-bottom: 10px;">
                <h2>{{ $movie->title }} ({{ $movie->date }})</h2>
                <p><strong>Titolo originale</strong> {{ $movie->original_title }}</p>
                <p>{{ $movie->nationalitiy }}</p>
                <p>{{ $movie->vote }}</p>
            </div>
            @endforeach
        </div>
    </body>
   </html>