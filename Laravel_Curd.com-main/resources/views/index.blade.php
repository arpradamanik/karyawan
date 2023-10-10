<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @for($i=1; $i<=50000; $i++)
    
        <h1>{{$i}} * 3 ={{$i*3}}</h1>

@endfor
</body>
</html>