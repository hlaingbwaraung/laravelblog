<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/app.css">
    <!-- <script src="app.js"></script> -->
</head>

<body>

    <h1><?= $blog->title ?></h1>
    <p><?= $blog->intro ?></p>
    <p><?= $blog->body ?></p>
    <a href="/">back</a>
</body>

</html>