<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} Meditations</title>
</head>
<body>
<a href="{{ url()->previous() }}" class="back-button">Back</a>
<h1>{{ $category->name }}</h1>
<p>{{ $category->description }}</p>

<ul>
    @foreach ($meditations as $meditation)
        <li>
            <h2>{{ $meditation->title }}</h2>
            @if (str_contains($meditation->audio_path, 'youtube.com'))

                <iframe width="560" height="315"
                        src="{{ str_replace('watch?v=', 'embed/', $meditation->audio_path) }}"
                        frameborder="0" allowfullscreen>
                </iframe>
            @endif

            <p>{{ $meditation->description }}</p>
        </li>
    @endforeach
</ul>
</body>
</html>
