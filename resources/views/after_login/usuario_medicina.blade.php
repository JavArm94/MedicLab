
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/Roles/Usuario_Medicina.css')}}">
    <title>Document</title>
    
</head>
<body>
    @include('navbar-auth')
    @include('status-bar')
   <div class="main-menu">
    <div class="ingresar-certificado"><a href="{{ url('usuarios/create') }}">Ingresar<br>nuevo<br>certificado</a></div>
    <div class="ver-certificado"> <a href="">Ver <br> certificados</a></div>
   
   </div>

   <div class="body-page">
    <div class="body-text">
        <p>No posees certificados activos en este momento.</p>
        <br> 
        <p>Te encuentras operativo en nuestra empresa.</p>
    </div>
   </div>
   
   @include('footer')
</body>
</html>
