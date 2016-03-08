@extends('layouts.auth')

@section('htmlheader_title')
    Recuperar Contraseña
@endsection

@section('content')


<body class="login-page">

<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">


            </button>
            {{--<a class="navbar-brand" href="#"><b>SEEDSSA</b></a>--}}
        </div>




        <div>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="{{ url('/login') }}">Atras</a></li>


            </ul>
        </div><!--/.nav-collapse -->



    </div>
</div>


<br>
<br>
<br>
<br>



    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/home') }}"><b>Recuperar Contraseña</b></a>
        </div><!-- /.login-logo -->

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="login-box-body">
            <p class="login-box-msg">Ingrese el correo que registró para recuperar la contraseña</p>
            <form action="{{ url('/password/email') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-xs-2">
                    </div><!-- /.col -->
                    <div class="col-xs-8">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Enviar</button>
                    </div><!-- /.col -->
                    <div class="col-xs-2">
                    </div><!-- /.col -->
                </div>
            </form>


            <br>
            <br>
            <a href="{{ url('/login') }}">Iniciar sesión</a><br>
            <a href="{{ url('/register') }}" class="text-center">Registrar un nuevo usuario</a>

        </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->

    @include('layouts.partials.scripts_auth')

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

@endsection
