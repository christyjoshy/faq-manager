<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        @foreach($queries as $query)
        <h3>{{ $query->category->name }}</h3>
            <p>{{ $query->question }}</p>
            <p>{{ $query->answer }}</p>
        @endforeach
    </div>
</body>
</html>