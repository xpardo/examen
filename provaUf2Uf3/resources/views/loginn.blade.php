<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('postlogin')}}" method="POST">
        @csrf
        Nom:<input type="text" name="nom" id=""><br>

        @if ($errors->has('nom'))
         <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('nom')}}</strong>
        @endif

        @csrf
        password:<input type="text" name="password" id=""><br>

        @if ($errors->has('password'))
         <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('password')}}</strong>
        @endif

       

        

        <input type="submit" value="enviar">


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach 
            </ul>
        </div>
        @endif
</body>
</html>