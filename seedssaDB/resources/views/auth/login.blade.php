@extends('layouts.auth')

@section('htmlheader_title')
    Iniciar Sesión
@endsection

@section('content')
<body class="hold-transition login-page">




        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/') }}"><b>SEED</b>SSA</a>
            </div><!-- /.login-logo -->

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
                    <p class="login-box-msg">Identificarse para iniciar sesión</p>
                        <form action="{{ url('/login') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group has-feedback">
                                <input type="email" class="form-control" placeholder="Email" name="email"/>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Password" name="password"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox" name="remember"> Recordarme
                                        </label>
                                    </div>
                                </div><!-- /.col -->
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                                </div><!-- /.col -->
                            </div>
                        </form>

                   {{-- @include('auth.partials.social_login') --}}
                        <br>
                        <br>
                    <a href="{{ url('/password/reset') }}">No recuerdo mi contraseña</a><br>
                    <a href="{{ url('/register') }}" class="text-center">Registrar un nuevo usuario</a>

                </div><!-- /.login-box-body -->
             </div>
        </div><!-- /.login-box -->

    @include('layouts.partials.scripts_auth')

</body>

@endsection
