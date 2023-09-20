<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
            color:white;
            background-color: black;
            padding:10px;
            border-radius: 5px;
            height: min-content;
        }
        .section{
            background-color: rgb(236, 178, 178);
            border-radius: 20px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding:20px;
            align-items: center;
        }
    </style>
</head>
<body>
    <h1>All team members</h1>
    @foreach($members as $m) {{--foreach--}}
        <div class='section'>  
            <div>
                <h3>{{$m['name']}}</h3>
                <p>{{$m['role']}}</p>
            </div>        
            <a href="/about/{{$m['id']}}">see details</a>
        </div>  
        <hr>
    @endforeach
</body>
</html>