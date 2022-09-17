<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
</head>
<body>
    @foreach ($records as $record)
        <div>
            <p>{{$record["name"]}}</p>
            <a href="/prototype/get/{{$record["id"]}}">See more</a>
        </div>
    @endforeach
</body>
</html>
