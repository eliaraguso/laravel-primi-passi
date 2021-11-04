<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Homepage</h1>
    <header>
        <nav>
            <ul>
                <li><a href="/pagina1">{{$link1}}</a></li>
                <li><a href="/pagina2">{{$link2}}</a></li>
                <li><a href="/pagina3">{{$link3}}</a></li>
                <li><a href="/pagina4">{{$link4}}</a></li>           
            </ul>
        </nav>
    </header>
</body>
</html>



     {{-- @foreach ($data as $item)
     <li>{{$item}}</li>
 @endforeach --}}