<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            padding: 30px;
        }
        div{
            background-color: rgb(236, 178, 178);
            border-radius: 20px;
            margin:10% auto;
            width:300px;
            box-shadow: 0 0 20px white;
            text-align: center;
            padding:20px;
        }
        a{
            text-decoration: none;
            background-color: rgb(236, 178, 178);
            color:brown;
            padding:10px;
            font-size: 30px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <a href="/">back to list</a>
    <div>
        <h1>{{$member['name']}}</h1>
        <h1><em>{{$member['role']}}</em></h1>
        <p>{{$member['bio']}}</p>
        
    </div>
</body>
</html>