@extends('layouts.auth')

@section('htmlheader_title')
    Registro
@endsection

@section('content')

    <body class="hold-transition register-page">


    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
                {{--<a class="navbar-brand" href="#"><b>SEEDSSA</b></a>--}}
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">

                        <li><a href="{{ url('/') }}">Atras</a></li>


                </ul>
            </div>
        </div>
    </div>



    <br>
    <br>
    <br>
    <br>


    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('/home') }}"><b>Registro</b></a>
        </div>

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

        <div class="register-box-body">
            <p class="login-box-msg">Registrar un nuevo usuario</p>
            <form action="{{ url('/register') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Nombre completo" name="name" value="{{ old('name') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Confirmar password" name="password_confirmation"/>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                   {{-- <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div><!-- /.col -->--}}
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                    </div><!-- /.col -->
                </div>
            </form>

            {{--@include('auth.partials.social_login')--}}
            <br>
            <br>

            <a href="{{ url('/login') }}" class="text-center">Tengo una cuenta</a>
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->

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
