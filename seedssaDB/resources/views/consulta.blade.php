@extends('layouts.app')

@section('htmlheader_title')
    Consultas
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
        </div>
    </div>

</section>

    <br><br><br><br>

<section class="content">
    <div class="row">
        <div class="col-md-12">
    <!-- general form elements -->
            <div class="box box-primary">
                     <div class="box-header with-border">
                         <h1 class="box-title"><b>Consulta</b></h1>
                    </div><!-- /.box-header -->
                <form role="form" name="valida_consulta">
                    <div class="box-body">

                        <div class="form-group"> <!-- VISITA -->
                            <label>Visita</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="visita_consulta" id="optionsRadios1_visita_consulta" value="Primera Vez" >
                                        Primera vez
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="visita_consulta" id="optionsRadios2_visita_consulta" value="Consecutiva">
                                        Consecutiva
                                    </label>
                                </div>
                            </div>
                        </div><!-- ./VISITA -->



                        <div class="form-group"> <!-- FECHA DE VISITA-->
                            <label>Fecha de visita</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input name="fechavi_consulta" type="text" class="form-control pull-right active"   id="reservation">
                            </div>
                        </div> <!-- ./FECHA DE VISITA-->



                        <div class="form-group"> <!-- TIPO DE CONSULTA-->
                            <label>Tipo de consuta</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="tipo_consulta" id="optionsRadios1_tipo_consulta" value="Consejería" >
                                        Consejería
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="tipo_consulta" id="optionsRadios2_tipo_consulta" value="Servicio médico">
                                        Servicio médico
                                    </label>
                                </div>
                            </div>
                        </div> <!-- ./TIPO DE CONSULTA-->


                        <div class="form-group"> <!-- SERVICIO O TEMA A TRATAR-->
                        <label>Servicio o tema a tratar</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="servicio_tema_consulta" id="optionsRadios1_servicio_tema_consulta" value="Prueba de VIH" >
                                        Prueba de VIH
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="servicio_tema_consulta" id="optionsRadios2_servicio_tema_consulta" value="PAP">
                                        PAP
                                    </label>
                                </div>
                                <div class="radio">

                                    <label>
                                        <input type="radio" name="servicio_tema_consulta" id="optionsRadios3_servicio_tema_consulta" value="Consejería" >
                                        Consejería
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="servicio_tema_consulta" id="optionsRadios4_servicio_tema_consulta" value="Chequeo">
                                        Chequeo
                                    </label>
                                </div>
                            </div>
                         </div> <!-- /.SERVICIO O TEMA A TRATAR-->

                        <div class="form-group"> <!-- CUOTA DE RECUPERACION-->
                            <label>Cuota de recuperación</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                <input name="cuota_consulta" type="number" class="form-control" min="1" step="1" max="999">

                            </div>
                        </div> <!-- /.CUOTA DE RECUPERACION-->

                    </div><!-- /.box-body -->
                 </form>
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section>

@endsection