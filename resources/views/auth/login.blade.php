<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="css/login.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition login-page">
    @include('navbar')    
    <div class="front-image">
       <p>Seguimiento de la salud de <br>
        nuestros empleados gracias<br>
         al sistema de agendas digitales.</p> 
    </div>
<div class="login-box">
    <!-- /.login-logo -->

     <div class="login-box-body">

        <p>Bienvenido al sistema de gestión <br>
        MedicLab</p>

        <hr>

        <form method="post" action="{{ url('/login') }}">
            @csrf

           <p class="bold-text"> Usuario</p>
            <div class="form-group has-feedback {{ $errors->has('correoElectronico') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="correoElectronico" value="{{ old('correoElectronico') }}" placeholder="Legajo o correo">
                <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('correoElectronico'))
                    <span class="help-block">
                    <strong>{{ $errors->first('correoElectronico') }}</strong>
                </span>
                @endif
            </div>
            <br>
          <p class="bold-text"> Contraseña</p> 
            <div class="form-group has-feedback{{ $errors->has('contrasenaUsuario') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="contrasenaUsuario" name="contrasenaUsuario">
                <br><span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('contrasenaUsuario'))
                    <span class="help-block">   
                    <strong>{{ $errors->first('contrasenaUsuario') }}</strong>
                </span>
                @endif

            </div>
            <br>    
             <!--
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
              
            </div>-->


            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
            </div>
        </form>


    </div>
    <!-- /.login-box-body -->
</div>
@include('footer')

<!-- /.login-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
