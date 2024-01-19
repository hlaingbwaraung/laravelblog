<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>

    @foreach ($blogs as $blog)
    <h1><a href="blogs/{{$blog->slug}}">
            {{ $blog->title}}
        </a></h1>
    <div>
        <p>
            {{$blog->intro }}
        </p>
        <p>Created at -
            {{$blog->date}}
        </p>

    </div>
    @endforeach

</body>

</html>