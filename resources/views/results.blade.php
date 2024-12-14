<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Results</title>
</head>
<body>
    <h1>Book Search Results</h1>

    @if($books)
        <ul>
            @foreach($books as $book)
                <li>
                    <h2>{{ $book['volumeInfo']['title'] }}</h2>
                    <p><strong>Authors:</strong> {{ implode(', ', $book['volumeInfo']['authors'] ?? ['Unknown']) }}</p>
                    <p><strong>Publisher:</strong> {{ $book['volumeInfo']['publisher'] ?? 'Not available' }}</p>
                    <p><strong>Description:</strong> {{ $book['volumeInfo']['description'] ?? 'No description available' }}</p>
                    <p><strong>Link:</strong> <a href="{{ $book['volumeInfo']['infoLink'] }}" target="_blank">More Info</a></p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No results found.</p>
    @endif

    <a href="{{ url('/') }}">Back to search</a>
</body>
</html>
