<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('postform')}}" method="POST">
        @csrf
        Nom:<input type="text" name="nom" id=""><br>

        @if ($errors->has('nom'))
         <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('nom')}}</strong>
        @endif

        @csrf
        cognom:<input type="text" name="cognom" id=""><br>

        @if ($errors->has('cognom'))
         <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('cognom')}}</strong>
        @endif

        @csrf
        email:<input type="text" name="email" id=""><br>

        @if ($errors->has('email'))
         <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('email')}}</strong>
        @endif

     

        
        @csrf
        <div class="form-group">
            <label  for="pass1">Contraseña</label>
            <input type="password" name="pass1" class="form-control" id="pass1" required>
            @if ($errors->has('pass1'))
                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('pass1')}}</strong>
            @endif
        </div>


        <div class="form-group">
            <label for="pass2">Vuelve a escribir la Contraseña</label>
            <input type="password" class="form-control" id="pass2" required>
        </div>

        <script>

            function verificarPasswords() {
            
                // Ontenemos los valores de los campos de contraseñas 
                pass1 = document.getElementById('pass1');
                pass2 = document.getElementById('pass2');

                // Verificamos si las constraseñas no coinciden 
                if (pass1.value != pass2.value) {

                    // Si las constraseñas no coinciden mostramos un mensaje 
                    document.getElementById("error").classList.add("mostrar");

                    return false;
                } else {

                    // Si las contraseñas coinciden ocultamos el mensaje de error
                    document.getElementById("error").classList.remove("mostrar");

                    // Mostramos un mensaje mencionando que las Contraseñas coinciden 
                    document.getElementById("ok").classList.remove("ocultar");

                    // Desabilitamos el botón de login 
                    document.getElementById("login").disabled = true;

                    // Refrescamos la página (Simulación de envío del formulario) 
                    setTimeout(function() {
                        location.reload();
                    }, 3000);

                    return true;
                }

            }



        </script>




        @csrf
        image: <input type="file" name="image" ><br>
        @if ($errors->has('image'))
         <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('image')}}</strong>
        @endif
        
        <br>

        <input type="submit"  value="enviar" id="login" class="btn btn-primary">


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