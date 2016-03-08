@extends('layouts.app')

@section('htmlheader_title')
    Usuarios
@endsection

@section('main-content')
    <section class="content-header">

        <div class="col-lg-12 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h4><b>Registro de Usuarios</b></h4>

                </div>
                <div class="icon">
                    <i class="fa fa-user-plus"></i>
        </div>

    </section>



    <br>
    <br>
    <br>
    <br>




    <section class="content">
        <div class="row">











            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Usuario</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <!-- FALTA IDENTIFICADORES PENDIENTE -->


                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Nombre(s) Solicitante">

                            </div>

                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Apellidos Solicitante">

                            </div>



                            <!-- Date picker -->
                            <div class="form-group">
                                <label>Fecha de visita</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right active"   id="reservation">

                                </div><!-- /.input group -->
                            </div><!-- /.form group -->


                            <div class="form-group has-feedback">
                                <input type="number" class="form-control" placeholder="Edad">

                            </div>

                            <label>Teléfono</label>
                            <div class="input-group">

                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                            </div>

                            <br>


                            {{--correo--}}

                            <label>Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>

                            <br>
                            <div class="form-group">
                                <label>Región</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>


                            <div class="form-group">
                                <label>Género</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Hombre</option>
                                    <option>Mujer</option>

                                </select>
                            </div>


                            <div class="form-group">
                                <label>Identidad G</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Transexual H</option>
                                    <option>Transexual M</option>

                                </select>
                            </div>


                            <div class="form-group">
                                <label>Preferencia G</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Heterosexual</option>
                                    <option>Homosexual</option>
                                    <option>Lesbiana</option>
                                    <option>Bisexual</option>

                                </select>
                            </div>


                            <div class="form-group">
                                <label>Estado Civil</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Solter@</option>
                                    <option>Casad@</option>
                                    <option>Divorciad@</option>
                                    <option>Viud@</option>

                                </select>
                            </div>


                            <div class="form-group">
                                <label>Ocupación</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Estudiante</option>
                                    <option>Trabajador</option>
                                    <option>Ninguna</option>


                                </select>
                            </div>



                            <div class="form-group">
                                <label>Escolaridad</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Primaria</option>
                                    <option>Secundaria</option>
                                    <option>Preparatoria/Bachillerato</option>
                                    <option>Técnico</option>
                                    <option>Universidad</option>
                                    <option>Ninguna</option>
                                </select>
                            </div>






                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>



@endsection