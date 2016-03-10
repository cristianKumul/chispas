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
                    <h4><b>Registro de Anticonceptivos</b></h4>

                </div>
                <div class="icon">
                    <i class="fa fa-plus-square"></i>

                </div>






    </section>

    <br><br><br><br>

<section class="content">
    <div class="row">


            <!-- left column -->
        <div class="col-md-12">
                <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Antecedentes Personales</h3>
                </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <!-- FALTA IDENTIFICADORES PENDIENTE -->


                            <div class="col-md-6"> <!-- DIV -->
                        <div>
                            <label>Alergias</label>
                            <br>
                                <button name="alergiasa" value="si"  type="button" class="btn btn-info" id="btn">Si</button>
                                <button name="alergiasa" value="no" type="button" class="btn btn-info" id="btnclear">No</button>

                            <div class="collapse" id="desplegar">
                                <br>
                                <label>¿Cuáles?</label>
                                <br>
                                <textarea name="textalergiasa" class="form-control" rows="3" id="text" placeholder=""></textarea>
                            </div>
                        </div>
                            <br>
                        <div>
                            <label>Enfermedades Infectocontagiosas</label>
                            <br>
                            <button name="enfermedadesinfeca" value="si" type="button" class="btn btn-info" id="btn1">Si</button>
                            <button name="enfermedadesinfeca" value="no" type="button" class="btn btn-info" id="btnclear1">No</button>

                            <div class="collapse" id="desplegar1">
                                <br>
                                <label>¿Cuáles?</label>
                                <br>
                                <textarea name="textenfermedadesinfeca" class="form-control" rows="3" id="text1" placeholder=""></textarea>
                            </div>
                        </div>
                            <br>
                        <div>
                            <label>Enfermedades Crónicas</label>
                            <br>
                            <button name="enfermedadescroa" value="si" type="button" class="btn btn-info" id="btn2">Si</button>
                            <button name="enfermedadescroa" value="no" type="button" class="btn btn-info" id="btnclear2">No</button>

                            <div class="collapse" id="desplegar2">
                                <br>
                                <label>¿Cuáles?</label>
                                <br>
                                <textarea name="textenfermedadescroa" class="form-control" rows="3" id="text2" placeholder=""></textarea>
                            </div>
                        </div>
                        <br>
                        <div>
                            <label>Cirugía con Hospitalización</label>
                            <br>
                            <button name="cirugiaa" value="si" type="button" class="btn btn-info" id="btn3">Si</button>
                            <button name="cirugiaa" value="no" type="button" class="btn btn-info" id="btnclear3">No</button>

                            <div class="collapse" id="desplegar3">
                                <br>
                                <label>¿Cuáles?</label>
                                <br>
                                <textarea name="textcirugiaa" class="form-control" rows="3" id="text3" placeholder=""></textarea>
                            </div>
                        </div>
                        <br>


                            <div>
                                <label>Uso de Medicamentos</label>
                                <br>
                                <button name="medicamentoa" value="si" type="button" class="btn btn-info" id="btn4">Si</button>
                                <button name="medicamentoa" value="no" type="button" class="btn btn-info" id="btnclear4">No</button>

                                <div class="collapse" id="desplegar4">
                                    <br>
                                    <label>¿Cuáles?</label>
                                    <br>
                                    <textarea name="textmedicamentoa" class="form-control" rows="3" id="text4" placeholder=""></textarea>
                                </div>
                            </div>
                            <br>

                            </div>  <!-- DIV -->



                            <div class="col-md-6">  <!-- DIV -->


                            <div>
                                <label>Problemas Psicológicos</label>
                                <br>
                                <button name="psicologicoa" value="si" type="button" class="btn btn-info" id="btn5">Si</button>
                                <button name="psicologicoa" value="no" type="button" class="btn btn-info" id="btnclear5">No</button>

                                <div class="collapse" id="desplegar5">
                                    <br>
                                    <label>¿Cuáles?</label>
                                    <br>
                                    <textarea name="textpsicologicoa" class="form-control" rows="3" id="text5" placeholder=""></textarea>
                                </div>
                            </div>
                            <br>



                            <div>
                                <label>Cardiovascular</label>
                                <br>
                                <button name="cardioa" value="si" type="button" class="btn btn-info" id="btn6">Si</button>
                                <button name="cardioa" value="no" type="button" class="btn btn-info" id="btnclear6">No</button>

                                <div class="collapse" id="desplegar6">
                                    <br>
                                    <label>¿Cuáles?</label>
                                    <br>
                                    <textarea name="textcardioa" class="form-control" rows="3" id="text6" placeholder=""></textarea>
                                </div>
                            </div>
                            <br>
                            <div>
                                <label>Infecciones</label>
                                <br>
                                <button type="button" class="btn btn-info" id="btn7">Si</button>
                                <button type="button" class="btn btn-info" id="btnclear7">No</button>

                                <div class="collapse" id="desplegar7">
                                    <br>
                                    <label>¿Cuáles?</label>
                                    <br>
                                    <textarea class="form-control" rows="3" id="text7" placeholder=""></textarea>
                                </div>
                            </div>
                            <br>

                            <div>
                                <label>Cáncer</label>
                                <br>
                                <button type="button" class="btn btn-info" id="btn8">Si</button>
                                <button type="button" class="btn btn-info" id="btnclear8">No</button>

                                <div class="collapse" id="desplegar8">
                                    <br>
                                    <label>¿Cuáles?</label>
                                    <br>
                                    <textarea class="form-control" rows="3" id="text8" placeholder=""></textarea>
                                </div>
                            </div>
                            <br>
                            </div>  <!-- DIV -->


                    </form>
                        </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section>


<section class="content">
    <div class="row">


        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Hábitos y Consumos</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <!-- FALTA IDENTIFICADORES PENDIENTE -->



                        <label>Tabáco</label>
                        <div class="form-group">
                            <div class="radio">

                                <label>
                                    <input type="radio" name="tabacoa" id="optionsRadios1" value="si">
                                    Si
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="tabacoa" id="optionsRadios2" value="no">
                                    No
                                </label>
                            </div>

                        </div>


                        <label>Alcohol</label>
                        <div class="form-group">
                            <div class="radio">

                                <label>
                                    <input type="radio" name="alcohola" id="optionsRadios1" value="si" >
                                    Si
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="alcohola" id="optionsRadios2" value="no">
                                    No
                                </label>
                            </div>

                        </div>


                        <div>
                            <label>Otras sustancias</label>
                            <br>
                            <button type="button" class="btn btn-info" id="btn9">Si</button>
                            <button type="button" class="btn btn-info" id="btnclear9">No</button>

                            <div class="collapse" id="desplegar9">
                                <br>
                                <label>¿Cuáles?</label>
                                <br>
                                <textarea class="form-control" rows="3" id="text9" placeholder=""></textarea>
                            </div>
                        </div>
                        <br>













                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section>


<section class="content">
    <div class="row">


        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Antecedentes Ginecológicos</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <!-- FALTA IDENTIFICADORES PENDIENTE -->


                        <div class="form-group has-feedback">
                            <label>Inicio de vidad sexual</label>

                            <input name="vidasexuala" type="number" class="form-control" placeholder="Edad" min="1" step="1" max="99">

                        </div>


                        <div class="form-group has-feedback">
                            <label>Número de parejas sexuales</label>

                            <input name="parejasexuala" type="number" class="form-control" placeholder="Cantidad" min="1" step="1" max="99">

                        </div>


                        <label>Embarazos previos</label>
                        <div class="form-group">
                            <div class="radio">

                                <label>
                                    <input type="radio" name="embarazoa" id="optionsRadios1" value="ninguno" >
                                    Ninguno
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="embarazoa" id="optionsRadios2" value="Parto">
                                    Parto
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="embarazoa" id="optionsRadios2" value="Aborto">
                                    Aborto
                                </label>
                            </div>

                        </div>











                        <label>¿Es primera vez que usa un método anticonceptivo?</label>
                        <div class="form-group">
                            <div class="radio">

                                <label>
                                    <input type="radio" name="primeraantia" id="optionsRadios1" value="si">
                                    Si
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="primeraantia" id="optionsRadios2" value="no">
                                    No
                                </label>
                            </div>

                        </div>




                        <label>Método elegido</label>
                        <div class="form-group">
                            <div class="radio">

                                <label>
                                    <input type="radio" name="metodoa" id="optionsRadios1" value="Inyecciones/blancas" >
                                    Inyecciones/blancas
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="metodoa" id="optionsRadios2" value="Inyecciones de agua/aceite">
                                    Inyecciones de agua/aceite
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="metodoa" id="optionsRadios2" value="Pastillas">
                                    Pastillas
                                </label>
                            </div>

                        </div>



                        <!-- Date picker -->
                        <div class="form-group">
                            <label>Fecha inicio del método</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input name="fechametodoa" type="text" class="form-control pull-right active"   id="reservation">

                            </div><!-- /.input group -->
                        </div><!-- /.form group -->



                        <div>
                            <label>Condones</label>
                            <br>
                            <button type="button" class="btn btn-info" id="btn10">Si</button>
                            <button type="button" class="btn btn-info" id="btnclear10">No</button>

                            <div class="collapse" id="desplegar10">
                                <br>
                                <label>¿Cuántos?</label>
                                <br>
                                <input name="cuotac" id="text10" type="number" class="form-control" min="1" step="1" max="999">
                            </div>
                        </div>








                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section>






@endsection