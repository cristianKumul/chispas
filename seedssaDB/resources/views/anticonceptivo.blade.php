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


                            <div class="form-group">
                                <label>Alergias</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Si</option>
                                    <option>No</option>
                                    <option>No se</option>


                                </select>
                            </div>


                            <div class="form-group">
                                <label>¿Cuáles?</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Enfermedades Infectocontagiosas</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Si</option>
                                    <option>No</option>
                                    <option>No se</option>


                                </select>
                            </div>


                            <div class="form-group">
                                <label>¿Cuáles?</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>


                            <div class="form-group">
                                <label>Enfermedades Crónicas</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Si</option>
                                    <option>No</option>
                                    <option>No se</option>


                                </select>
                            </div>


                            <div class="form-group">
                                <label>¿Cuáles?</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Cirugía Hospitalización</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Si</option>
                                    <option>No</option>
                                    <option>No se</option>


                                </select>
                            </div>


                            <div class="form-group">
                                <label>¿Cuáles?</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>


                            <div class="form-group">
                                <label>Uso de medicamentos</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Si</option>
                                    <option>No</option>
                                    <option>No se</option>


                                </select>
                            </div>


                            <div class="form-group">
                                <label>¿Cuáles?</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>


                            <div class="form-group">
                                <label>Problemas Psicológicos</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Si</option>
                                    <option>No</option>
                                    <option>No se</option>


                                </select>
                            </div>


                            <div class="form-group">
                                <label>¿Cuáles?</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Problemas Cardiovasculares</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Si</option>
                                    <option>No</option>
                                    <option>No se</option>


                                </select>
                            </div>


                            <div class="form-group">
                                <label>¿Cuáles?</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>


                            <div class="form-group">
                                <label>Infecciones</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Si</option>
                                    <option>No</option>
                                    <option>No se</option>


                                </select>
                            </div>


                            <div class="form-group">
                                <label>¿Cuáles?</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Cáncer</label>
                                <select class="form-control">
                                    <option>Seleccionar...</option>
                                    <option>Si</option>
                                    <option>No</option>
                                    <option>No se</option>


                                </select>
                            </div>


                            <div class="form-group">
                                <label>¿Cuáles?</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>



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



                        <div class="form-group">
                            <label>Tabáco</label>
                            <select class="form-control">
                                <option>Seleccionar...</option>
                                <option>Si</option>
                                <option>No</option>



                            </select>
                        </div>


                        <div class="form-group">
                            <label>Alcohol</label>
                            <select class="form-control">
                                <option>Seleccionar...</option>
                                <option>Si</option>
                                <option>No</option>



                            </select>
                        </div>



                        <div class="form-group">
                            <label>Otras sustancias</label>
                            <select class="form-control">
                                <option>Seleccionar...</option>
                                <option>Si</option>
                                <option>No</option>
                                <option>No se</option>


                            </select>
                        </div>


                        <div class="form-group">
                            <label>¿Cuáles?</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>





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



                        <div class="form-group">
                            <label>Inicio de vidad sexual</label>
                            <input type="number" class="form-control" placeholder="">
                        </div>


                        <div class="form-group">
                            <label>Número de parejas sexuales</label>
                            <input type="number" class="form-control" placeholder="">
                        </div>


                        <div class="form-group">
                            <label>Embarazos previos</label>
                            <select class="form-control">
                                <option>Seleccionar...</option>
                                <option>Ninguno</option>
                                <option>Parto</option>
                                <option>Aborto</option>


                            </select>
                        </div>


                        <label>¿Es primera vez que usa un método anticonceptivo?</label>
                        <div class="form-group">
                            <div class="radio">

                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                    Si
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    No
                                </label>
                            </div>

                        </div>


                        <div class="form-group">
                            <label>Método elegido</label>
                            <select class="form-control">
                                <option>Seleccionar...</option>
                                <option>Inyecciones/blancas</option>
                                <option>Inyecciones de agua/aceite</option>
                                <option>Pastillas</option>


                            </select>
                        </div>


                        <!-- Date picker -->
                        <div class="form-group">
                            <label>Fecha inicio del método</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right active"   id="reservation">

                            </div><!-- /.input group -->
                        </div><!-- /.form group -->


                        <label>Condones</label>
                        <div class="form-group">
                            <div class="radio">

                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                    Si
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    No
                                </label>
                            </div>

                        </div>

                        <div class="form-group">
                            <label>¿Cuántos?</label>
                            <input type="number" class="form-control" placeholder="">
                        </div>




                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section>

@endsection