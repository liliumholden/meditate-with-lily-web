<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
<h1>Meditation Categories</h1>

<a href="../landing">Back</a>
<ul>
    @foreach ($categories as $category)
        <li><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a> </li>
    @endforeach
</ul>
</body>
</html>
