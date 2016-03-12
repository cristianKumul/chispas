@extends('layouts.app')

@section('htmlheader_title')
    Registro-Usuarios
@endsection

@section('main-content')


<section class="content-header">  {{--HEADER REGISTRO USUARIOS--}}

    <div class="col-lg-12 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h4><b>Registro de Usuarios</b></h4>
            </div>
            <div class="icon">
                <i class="fa fa-user-plus"></i>
            </div>
        </div>
    </div>

</section>   {{--HEADER REGISTRO USUARIOS--}}
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
                <div class="box-header with-border" > <!-- box header -->
                    <h1 class="box-title" "><b>Usuario</b></h1>
                </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" name="valida_datos_usuario"> <!-- FORM -->
                        <div class="box-body">

                            <div class="form-group"> <!-- NOMBRES -->
                                <label>Nombre (s)</label>
                                <input name="nombres_usuario" style="text-transform:uppercase;" type="text" class="form-control" placeholder="Nombre(s) Solicitante">
                            </div> <!-- ./NOMBRES -->

                            <div class="form-group"> <!-- APELLIDOS -->
                                <label>Apellidos</label>
                                <input name="apellidos_usuario"  style="text-transform:uppercase;" type="text" class="form-control" placeholder="Apellidos Solicitante">

                            </div> <!-- ./APELLIDOS -->

                            <div class="form-group">  <!-- FECHA DE VISITA Date picker -->
                                <label>Fecha de visita</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input name="fecha_visita_usuario" type="text" class="form-control pull-right active"   id="reservation">
                                    </div><!-- /.input group -->
                            </div> <!-- ./FECHA DE VISITA Date picker -->


                            <div class="form-group"> <!-- EDAD -->
                                <label>Edad</label>
                                <input name="edad_usuario" type="number" class="form-control" placeholder="Edad" min="1" step="1" max="99">
                            </div> <!-- ./EDAD -->


                            <div class="form-group"> <!-- TELEFONO -->
                                <label>Teléfono</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input name="telefonou" type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                </div>
                            </div> <!-- ./TELEFONO -->



                            <div class="form-group"> <!-- CORREO -->
                                <label>Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input name="email_usuario" type="email" class="form-control" placeholder="Email">
                                </div>
                            </div> <!-- ./CORREO -->

                            <div class="col-md-6"> <!-- ./COLUMNA -->
                                <div class="form-group"> <!-- GENERO -->
                                    <div class="form-group">
                                        <label>Género</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="genero_usuario" id="optionsRadios1_genero_usuario" value="Hombre" >
                                                    Hombre
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="genero_usuario" id="optionsRadios2_genero_usuario" value="Mujer">
                                                    Mujer
                                                </label>
                                            </div>
                                    </div>
                                </div> <!-- ./GENERO -->


                                <div class="form-group"> <!-- IDENTIDAD G -->
                                    <label>Identidad G</label>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="identidad_usuario" id="optionsRadios1_identidad_usuario" value="transexualh" >
                                                Transexual H
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="identidad_usuario" id="optionsRadios2_identidad_usuario" value="transexualm">
                                                Transexual M
                                            </label>
                                        </div>
                                    </div>
                                </div> <!-- ./IDENTIDAD G -->

                                <div class="form-group"> <!-- PREFERENCIA G -->
                                    <label>Preferencia G</label>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="preferencia_usuario" id="optionsRadios1_preferencia_usuario" value="Heterosexual" >
                                                Heterosexual
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="preferencia_usuario" id="optionsRadios2_preferencia_usuario" value="Homosexual">
                                                Homosexual
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="preferencia_usuario" id="optionsRadios1_preferencia_usuario" value="Lesbiana" >
                                                Lesbiana
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="preferencia_usuario" id="optionsRadios2_preferencia_usuario" value="Bisexual">
                                                Bisexual
                                            </label>
                                        </div>
                                    </div>
                                </div>  <!-- ./PREFERENCIA G -->

                                <div class="form-group"> <!-- ESCOLARIDAD -->
                                    <label>Escolaridad</label>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="escolaridad_usuario" id="optionsRadios1_escolaridad_usuario" value="Primaria" >
                                                Primaria
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="escolaridad_usuario" id="optionsRadios2_escolaridad_usuario" value="Secundaria">
                                                Secundaria
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="escolaridad_usuario" id="optionsRadios3_escolaridad_usuario" value="Preparatoria" >
                                                Preparatoria/Bachillerato
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="escolaridad_usuario" id="optionsRadios4_escolaridad_usuario" value=Técnico" >
                                                Técnico
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="escolaridad_usuario" id="optionsRadios5_escolaridad_usuario" value="Universidad">
                                                Universidad
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="escolaridad_usuario" id="optionsRadios6_escolaridad_usuario" value="Ninguna" >
                                                Ninguna
                                            </label>
                                        </div>
                                    </div>
                                </div> <!-- ./ESCOLARIDAD -->


                            </div> <!-- ./COLUMNA -->

                            <div class="col-md-6"> <!-- ./COLUMNA -->

                                <div class="form-group"> <!-- ESTADO CIVIL -->
                                    <label>Estado Civil</label>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="estcivil_usuario" id="optionsRadios1_estcivil_usuario" value="Solter@" >
                                                Solter@
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="estcivil_usuario" id="optionsRadios2_estcivil_usuario" value="Casad@">
                                                Casad@
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="estcivil_usuario" id="optionsRadios3_estcivil_usuario" value="Divorciad@" >
                                                Divorciad@
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="estcivil_usuario" id="optionsRadios4_estcivil_usuario" value="Viud@">
                                                Viud@
                                            </label>
                                        </div>
                                    </div>
                                </div> <!-- ./ESTADO CIVIL -->



                                <div class="form-group"> <!-- OCUPACION -->
                                    <label>Ocupación</label>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="ocupacion_usuario" id="optionsRadios1_ocupacion_usuario" value="Estudiante" >
                                                Estudiante
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="ocupacion_usuario" id="optionsRadios2_ocupacion_usuario" value="Trabajador">
                                                Trabajador
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="ocupacion_usuario" id="optionsRadios3_ocupacion_usuario" value="Ninguna" >
                                                Ninguna
                                            </label>
                                        </div>
                                    </div>
                                </div>  <!-- ./OCUPACION -->


                            </div> <!-- ./COLUMNA -->


                            <div class="col-md-12"> <!-- ./COLUMNA -->
                                <div class="form-group"> <!-- REGION -->
                                    <div class="input-group col-md-12">
                                            <label>Región</label>
                                            <br>
                                            <select class="form-control">
                                                <option name="zona_seleccionar" value="zona_seleccionar" >Seleccionar... </option>
                                                <option name="zona_1_usuario" value="Zona_I" >Zona I </option>
                                                <option name="zona_2_usuario" value="Zona_II" >Zona II</option>
                                                <option name="zona_3_usuario" value="Zona_III" >Zona III</option>
                                                <option name="zona_4_usuario" value="Zona_IV" >Zona IV</option>
                                                <option name="zona_5_usuario" value="Zona_V" >Zona V</option>
                                            </select>
                                    </div>
                                        <br>
                                    <div class="input-group col-md-12">
                                        <button name="boton_zonas_usuario" value="ver_zona"  type="button" class="btn btn-info" id="btn11">Ver Zonas</button>
                                        <div class="collapse" id="desplegar11">
                                            <img class="img-responsive" id="text11" src="{{ asset('/img/zonas.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>  <!-- ./REGION -->
                            </div> <!-- ./COLUMNA -->

                        </div> <!-- /.box body -->
                    </form> <!-- ./FROM -->
            </div><!-- /.box PRIMARY -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section>



@endsection