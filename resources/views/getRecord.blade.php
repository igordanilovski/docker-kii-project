<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Details for record</title>
</head>
<body>
    <div>
        @if(isset($errorMessage))
            <p>Record with requested id is not found!</p>
        @else
            <p>Amenity: {{ $amenity }}</p>
            <p>Place Name: {{ $place }}</p>
        @endif
    </div>
</body>
</html>
