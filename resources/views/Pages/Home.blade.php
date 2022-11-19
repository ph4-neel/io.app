<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>this is home Page</h1>
    <video width="320" height="240" controls>
        <source src="https://youtu.be/JIktIGJLBAU" type="video/mp4">
        <source src="{{ URL::asset('movie.ogg') }}" type="video/ogg">
        Your browser does not support the video tag.
    </video>
</body>
</html>
