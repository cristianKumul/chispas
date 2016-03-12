@extends('layouts.app')

@section('htmlheader_title')
    Anticonceptivo
@endsection

@section('main-content')



<section class="content-header">

    <div class="col-lg-12 col-xs-12">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h4><b>Registro de Anticonceptivos</b></h4>
            </div>
            <div class="icon">
                <i class="fa fa-plus-square"></i>
            </div>
        </div>
</section>

    <br><br><br><br>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h1 class="box-title"><b>Antecedentes Personales</b></h1>
                </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">


                        <div class="col-md-6"> <!--COLUMNA -->

                            <div class="form-group"> <!-- ALERGIAS-->
                                <label>Alergias</label>
                                <br>
                                    <button name="alergias_anti" value="si"  type="button" class="btn btn-info" id="btn">Si</button>
                                    <button name="alergias_anti" value="no" type="button" class="btn btn-info" id="btnclear">No</button>
                                <div class="collapse" id="desplegar">
                                    <br>
                                    <label>¿Cuáles?</label>
                                    <br>
                                    <textarea name="alergias_anti_text" class="form-control" rows="3" id="text" placeholder=""></textarea>
                                </div>
                            </div>  <!-- ALERGIAS-->



                            <div class="form-group"> <!-- ENFERMEDADES INFECTO-->
                                <label>Enfermedades Infectocontagiosas</label>
                                <br>
                                <button name="enfermedad_infec_anti" value="si" type="button" class="btn btn-info" id="btn1">Si</button>
                                <button name="enfermedad_infec_anti" value="no" type="button" class="btn btn-info" id="btnclear1">No</button>

                                <div class="collapse" id="desplegar1">
                                    <br>
                                    <label>¿Cuáles?</label>
                                    <br>
                                    <textarea name="enfermedad_infec_anti_text" class="form-control" rows="3" id="text1" placeholder=""></textarea>
                                </div>
                            </div><!-- ENFERMEDADES INFECTO-->



                            <div class="form-group"> <!-- ENFERMEDADES CRONICAS-->
                                <label>Enfermedades Crónicas</label>
                                <br>
                                <button name="enfermedad_cro_anti" value="si" type="button" class="btn btn-info" id="btn2">Si</button>
                                <button name="enfermedad_cro_anti" value="no" type="button" class="btn btn-info" id="btnclear2">No</button>

                                <div class="collapse" id="desplegar2">
                                    <br>
                                    <label>¿Cuáles?</label>
                                    <br>
                                    <textarea name="enfermedad_cro_anti_text" class="form-control" rows="3" id="text2" placeholder=""></textarea>
                                </div>
                            </div> <!-- ENFERMEDADES CRONICAS-->



                            <div class="form-group"> <!-- CIRUGIA-->
                                <label>Cirugía con Hospitalización</label>
                                <br>
                                <button name="cirugia_anti" value="si" type="button" class="btn btn-info" id="btn3">Si</button>
                                <button name="cirugia_anti" value="no" type="button" class="btn btn-info" id="btnclear3">No</button>

                                <div class="collapse" id="desplegar3">
                                    <br>
                                    <label>¿Cuáles?</label>
                                    <br>
                                    <textarea name="cirugia_anti_text" class="form-control" rows="3" id="text3" placeholder=""></textarea>
                                </div>
                            </div>  <!-- ./CIRUGIA-->




                            <div class="form-group"> <!-- USO DE MEDICAMENTOS-->
                                    <label>Uso de Medicamentos</label>
                                    <br>
                                    <button name="medicamento_anti" value="si" type="button" class="btn btn-info" id="btn4">Si</button>
                                    <button name="medicamento_anti" value="no" type="button" class="btn btn-info" id="btnclear4">No</button>

                                    <div class="collapse" id="desplegar4">
                                        <br>
                                        <label>¿Cuáles?</label>
                                        <br>
                                        <textarea name="medicamento_anti_text" class="form-control" rows="3" id="text4" placeholder=""></textarea>
                                    </div>
                            </div>   <!-- USO DE MEDICAMENTOS-->
                                <br>

                        </div>  <!-- COLUMNA -->



                        <div class="col-md-6">  <!-- COLUMNA -->


                            <div class="form-group"> <!-- PROBLEMAS PSICOLOGICO-->
                                    <label>Problemas Psicológicos</label>
                                    <br>
                                    <button name="psicologico_anti" value="si" type="button" class="btn btn-info" id="btn5">Si</button>
                                    <button name="psicologico_anti" value="no" type="button" class="btn btn-info" id="btnclear5">No</button>

                                    <div class="collapse" id="desplegar5">
                                        <br>
                                        <label>¿Cuáles?</label>
                                        <br>
                                        <textarea name="psicologico_anti_text" class="form-control" rows="3" id="text5" placeholder=""></textarea>
                                    </div>
                            </div><!-- PROBLEMAS PSICOLOGICO-->




                            <div class="form-group"> <!--CARDIOVASCULAR-->
                                    <label>Cardiovascular</label>
                                    <br>
                                    <button name="cardio_anti" value="si" type="button" class="btn btn-info" id="btn6">Si</button>
                                    <button name="cardio_anti" value="no" type="button" class="btn btn-info" id="btnclear6">No</button>

                                    <div class="collapse" id="desplegar6">
                                        <br>
                                        <label>¿Cuáles?</label>
                                        <br>
                                        <textarea name="cardio_anti_text" class="form-control" rows="3" id="text6" placeholder=""></textarea>
                                    </div>
                            </div> <!--CARDIOVASCULAR-->



                            <div class="form-group"> <!--INFECCIONES-->
                                    <label>Infecciones</label>
                                    <br>
                                    <button type="button" name="infec_anti"  class="btn btn-info" id="btn7">Si</button>
                                    <button type="button" name="infec_anti" class="btn btn-info" id="btnclear7">No</button>

                                    <div class="collapse" id="desplegar7">
                                        <br>
                                        <label>¿Cuáles?</label>
                                        <br>
                                        <textarea class="form-control" name="infec_anti_text" rows="3" id="text7" placeholder=""></textarea>
                                    </div>
                            </div> <!--INFECCIONES-->



                            <div class="form-group"> <!--CANCER-->
                                    <label>Cáncer</label>
                                    <br>
                                    <button type="button" name="cancer_anti" class="btn btn-info" id="btn8">Si</button>
                                    <button type="button" name="cancer_anti" class="btn btn-info" id="btnclear8">No</button>

                                    <div class="collapse" id="desplegar8">
                                        <br>
                                        <label>¿Cuáles?</label>
                                        <br>
                                        <textarea class="form-control" name="cancer_anti_text" rows="3" id="text8" placeholder=""></textarea>
                                    </div>
                            </div> <!--CANCER-->
                        </div>  <!-- COLUMNA -->
                    </div><!-- /.box-body -->
                </form>
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section>


<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h1 class="box-title"><b>Hábitos y Consumos</b></h1>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group"> <!--TABACO-->
                            <label>Tabáco</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="tabaco_anti" id="optionsRadios1_tabaco_anti" value="si">
                                        Si
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="tabaco_anti" id="optionsRadios2_tabaco_anti" value="no">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div> <!--TABACO-->

                        <div class="form-group"> <!--ALCOHOL-->
                            <label>Alcohol</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="alcohol_anti" id="optionsRadios1_alcohol_anti" value="si" >
                                        Si
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="alcohol_anti" id="optionsRadios2_alcohol_anti" value="no">
                                        No
                                    </label>
                                </div>

                            </div>
                        </div> <!--ALCOHOL-->


                        <div class="form-group"> <!--OTRAS SUSTANCIAS-->
                            <div>
                                <label>Otras sustancias</label>
                                <br>
                                <button type="button" name="sustancias_anti" class="btn btn-info" id="btn9">Si</button>
                                <button type="button" name="sustancias_anti" class="btn btn-info" id="btnclear9">No</button>

                                <div class="collapse" id="desplegar9">
                                    <br>
                                    <label>¿Cuáles?</label>
                                    <br>
                                    <textarea class="form-control" name="sustancias_anti_text" rows="3" id="text9" placeholder=""></textarea>
                                </div>
                            </div>
                        </div> <!--OTRAS SUSTANCIAS-->

                    </div><!-- /.box-body -->
                </form>
            </div><!-- /.box -->
         </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section>


<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h1 class="box-title"><b>Antecedentes Ginecológicos</b></h1>
                </div><!-- /.box-header -->
                <form role="form">
                    <div class="box-body">

                        <div class="form-group"> <!--INICIO VIDA SEXUAL-->
                            <div class="form-group">
                                <label>Inicio de vidad sexual</label>

                                <input name="vida_sexual_anto" type="number" class="form-control" placeholder="Edad" min="1" step="1" max="99">
                            </div>
                        </div> <!--INICIO VIDA SEXUAL-->


                        <div class="form-group">  <!--NUMERO DE PAREJAS SEXUALES-->
                            <label>Número de parejas sexuales</label>
                            <input name="pareja_anti" type="number" class="form-control" placeholder="Cantidad" min="1" step="1" max="99">
                        </div>  <!--NUMERO DE PAREJAS SEXUALES-->


                        <div class="form-group">  <!--EMBARAZO PREVIO-->
                            <label>Embarazos previos</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="embarazo_anti" id="optionsRadios1_embarazo_anti" value="Ninguno" >
                                        Ninguno
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="embarazo_anti" id="optionsRadios2_embarazo_anti" value="Parto">
                                        Parto
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="embarazo_anti" id="optionsRadios3_embarazo_anti" value="Aborto">
                                        Aborto
                                    </label>
                                </div>
                            </div>
                        </div>  <!--EMBARAZO PREVIO-->


                        <div class="form-group">  <!--PRIMERA VEZ-->
                            <label>¿Es primera vez que usa un método anticonceptivo?</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="primera_anti" id="optionsRadios1_primera_anti" value="si">
                                        Si
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="primera_anti" id="optionsRadios2_primera_anti" value="no">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>  <!--PRIMERA VEZ-->



                        <div class="form-group">  <!--METODO ELEGIDO-->
                            <label>Método elegido</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="meto_anti" id="optionsRadios1_metodo_anti" value="Inyecciones/blancas" >
                                        Inyecciones/blancas
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="meto_anti" id="optionsRadios2_metodo_anti" value="Inyecciones de agua/aceite">
                                        Inyecciones de agua/aceite
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="meto_anti" id="optionsRadios3_metodo_anti" value="Pastillas">
                                        Pastillas
                                    </label>
                                </div>
                            </div>
                        </div>  <!--METODO ELEGIDO-->


                        <div class="form-group">  <!--FECHA INICIO METODO-->
                            <label>Fecha inicio del método</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input name="fecha_metodo_anti" type="text" class="form-control pull-right active"   id="reservation">
                            </div>
                        </div><!--FECHA INICIO METODO-->



                        <div class="form-group">  <!--CONDONES-->
                            <label>Condones</label>
                            <br>
                            <button type="button" name="condones_anti" class="btn btn-info" id="btn10">Si</button>
                            <button type="button" name="condones_anti" class="btn btn-info" id="btnclear10">No</button>

                            <div class="collapse" id="desplegar10">
                                <br>
                                <label>¿Cuántos?</label>
                                <br>
                                <input name="condones_anti_text" id="text10" type="number" class="form-control" min="1" step="1" max="999">
                            </div>
                        </div>  <!--CONDONES-->

                    </div><!-- /.box-body -->
                </form>
             </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section>


@endsection