<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .container{
        width: 100;
        /* justify-content: center; */
        align-content: center;
        text-align: justify;
    }
    </style>
</head>
<body>
    <div class="container">

    </div>
    <h3>From: {{$details['email']}}</h3>
    <h3>Name: {{$details['name']}}</h3>
    <h3>Mobile No: {{$details['mobile']}}</h3>
<p>{{ $details['message']}}</p>
</body>
</html>
