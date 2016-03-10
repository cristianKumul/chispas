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
                                <label>Nombre (s)</label>
                                <input name="nombresu"  style="text-transform:uppercase;" type="text" class="form-control" placeholder="Nombre(s) Solicitante">

                            </div>

                            <div class="form-group has-feedback">
                                <label>Apellidos</label>
                                <input name="apellidosu"  style="text-transform:uppercase;" type="text" class="form-control" placeholder="Apellidos Solicitante">

                            </div>



                            <!-- Date picker -->
                            <div class="form-group">
                                <label>Fecha de visita</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input name="fechavisitau" type="text" class="form-control pull-right active"   id="reservation">

                                </div><!-- /.input group -->
                            </div><!-- /.form group -->


                            <div class="form-group has-feedback">
                                <label>Edad</label>

                                <input name="edadsu" type="number" class="form-control" placeholder="Edad" min="1" step="1" max="99">

                            </div>

                            <label>Teléfono</label>
                            <div class="input-group">

                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input name="telefonou" type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                            </div>

                            <br>


                            {{--correo--}}

                            <label>Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input name="emailu" type="email" class="form-control" placeholder="Email">
                            </div>

                            <br>
                            <div class="form-group">
                                <label>Región</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>


                            <div class="col-md-6">
                            <label>Género</label>
                            <div class="form-group">
                                <div class="radio">

                                    <label>
                                        <input type="radio" name="generou" id="optionsRadios1" value="hombre" >
                                        Hombre
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="generou" id="optionsRadios2" value="mujer">
                                        Mujer
                                    </label>
                                </div>

                            </div>


                            <label>Identidad G</label>
                            <div class="form-group">
                                <div class="radio">

                                    <label>
                                        <input type="radio" name="identidadu" id="optionsRadios1" value="transexualh" >
                                        Transexual H
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="identidadu" id="optionsRadios2" value="transexualm">
                                        Transexual M
                                    </label>
                                </div>

                            </div>


                            <label>Preferencia G</label>
                            <div class="form-group">
                                <div class="radio">

                                    <label>
                                        <input type="radio" name="preferenciau" id="optionsRadios1" value="heterosexual" >
                                        Heterosexual
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="preferenciau" id="optionsRadios2" value="homosexual">
                                        Homosexual
                                    </label>
                                    </div>
                                    <div class="radio">
                                    <label>
                                        <input type="radio" name="preferenciau" id="optionsRadios1" value="lesbiana" >
                                        Lesbiana
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="preferenciau" id="optionsRadios2" value="bisexual">
                                        Bisexual
                                    </label>
                                </div>

                            </div>





                            <label>Estado Civil</label>
                            <div class="form-group">
                                <div class="radio">

                                    <label>
                                        <input type="radio" name="estadocivilu" id="optionsRadios1" value="solter@" >
                                        Solter@
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="estadocivilu" id="optionsRadios2" value="casad@">
                                        Casad@
                                    </label>
                                </div>
                                    <div class="radio">
                                    <label>
                                        <input type="radio" name="estadocivilu" id="optionsRadios1" value="divorciad@" >
                                        Divorciad@
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="estadocivilu" id="optionsRadios2" value="viud@">
                                        Viud@
                                    </label>
                                </div>

                            </div>

                            </div>
                            <div class="col-md-6">


                            <label>Ocupación</label>
                            <div class="form-group">
                                <div class="radio">

                                    <label>
                                        <input type="radio" name="ocupacionu" id="optionsRadios1" value="estudiante" >
                                        Estudiante
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ocupacionu" id="optionsRadios2" value="trabajador">
                                        Trabajador
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ocupacionu" id="optionsRadios1" value="ninguna" >
                                        Ninguna
                                    </label>
                                </div>


                            </div>


                            <label>Escolaridad</label>
                            <div class="form-group">
                                <div class="radio">

                                    <label>
                                        <input type="radio" name="escolaridadu" id="optionsRadios1" value="primaria" >
                                        Primaria
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="escolaridadu" id="optionsRadios2" value="secundaria">
                                        Secundaria
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="escolaridadu" id="optionsRadios1" value="preparatoria" >
                                        Preparatoria/Bachillerato
                                    </label>
                                </div>

                                <div class="radio">

                                    <label>
                                        <input type="radio" name="escolaridadu" id="optionsRadios1" value="tecnico" >
                                        Técnico
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="escolaridadu" id="optionsRadios2" value="universidad">
                                        Universidad
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="escolaridadu" id="optionsRadios1" value="ninguna" >
                                        Ninguna
                                    </label>
                                </div>


                            </div>

                                </div>







                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>



@endsection