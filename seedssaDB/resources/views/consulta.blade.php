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
                    <h4><b>Registro de Consultas</b></h4>

                </div>
                <div class="icon">
                    <i class="fa fa-stethoscope"></i>

                </div>

    </section>



    <br><br><br><br>


<section class="content">
    <div class="row">

        <div class="col-md-12">
    <!-- general form elements -->
            <div class="box box-primary">
                 <div class="box-header with-border">
                     <h3 class="box-title">Consulta</h3>
                </div><!-- /.box-header -->
        <!-- form start -->
                <form role="form">
                    <div class="box-body">


                        <label>Visita</label>
                        <div class="form-group">
                            <div class="radio">

                                <label>
                                    <input type="radio" name="visitac" id="optionsRadios1" value="primeravez" >
                                    Primera vez
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="visitac" id="optionsRadios2" value="consecutiva">
                                    Consecutiva
                                </label>
                            </div>

                        </div>



                        <!-- Date picker -->
                        <div class="form-group">
                            <label>Fecha de visita</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input name="fechavisitac" type="text" class="form-control pull-right active"   id="reservation">

                            </div><!-- /.input group -->
                        </div><!-- /.form group -->




                        <label>Tipo de consuta</label>
                        <div class="form-group">
                            <div class="radio">

                                <label>
                                    <input type="radio" name="tipoconsultac" id="optionsRadios11" value="consejeria" >
                                    Consejería
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="tipoconsultac" id="optionsRadios22" value="serviciomedico">
                                    Servicio médico
                                </label>
                            </div>

                        </div>


                        <label>Servicio o tema a tratar</label>
                        <div class="form-group">
                            <div class="radio">

                                <label>
                                    <input type="radio" name="serviciotemac" id="optionsRadios11" value="pruebadeVIH" >
                                    Prueba de VIH
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="serviciotemac" id="optionsRadios22" value="pAP">
                                    PAP
                                </label>
                            </div>
                            <div class="radio">

                                <label>
                                    <input type="radio" name="serviciotemac" id="optionsRadios11" value="consejería" >
                                    Consejería
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="serviciotemac" id="optionsRadios22" value="chequeo">
                                    Chequeo
                                </label>
                            </div>

                        </div>




                        <label>Cuota de recuperación</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                            <input name="cuotac" type="number" class="form-control" min="1" step="1" max="999">

                        </div>


                 </form>
                    </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section>

@endsection