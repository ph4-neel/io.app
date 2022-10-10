<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>




    <h1>{{$skills->title}}</h1>

    <p>{{$skills->description}}</p>
    <p>{{$skills->details}}</p>
    <p>{{$skills->benefits}}</p>
    <p>{{$skills->features}}</p>
    <a href="{{$skills->tags}}">#{{$skills->tags}}</a>



</body>
</html>
