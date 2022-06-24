<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h3>Contacts</h3>

    <a href="{{route('landingPage')}}">Home</a>
    <a href="{{route('download')}}">Support</a>
    <a href="{{route('mission')}}">Enterprise Mission</a>
    <a href="{{route('download')}}">Support</a> 



    <ul>
        @foreach ($employees as $key => $employee)
        <li>{{ $key }}: {{$employee }}</li>
            
        @endforeach
    </ul>
    
</body>
</html>
