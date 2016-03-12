@extends('layouts.app')

@section('htmlheader_title')
    Condones - M
@endsection

@section('main-content')
<section class="content-header">

    <div class="col-lg-12 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h4><b>Registro de Condones Masculinos Entregados</b></h4>
            </div>
            <div class="icon">
                <i class="fa fa-mars"></i>

            </div>
        </div>
    </div>

</section>

    <br><br><br><br>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                 <div class="box-header with-border">
                     <h1 class="box-title"><b>Condones Masculinos</b></h1>
                </div><!-- /.box-header -->
                <form role="form">
                    <div class="box-body">


                        <div class="form-group"> <!-- FECHA -->
                            <div class="form-group">
                                <label>Fecha</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="fecha_condones" class="form-control pull-right active"   id="reservation">
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                        </div> <!-- ./FECHA -->


                        <div class="form-group"> <!-- GENERO -->
                            <label>Género</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="genero_condon" id="optionsRadios1_genero_condon" value="Hombre" >
                                        Hombre
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="genero_condon" id="optionsRadios2_genero_condon" value="Mujer">
                                        Mujer
                                    </label>
                                </div>
                            </div>
                        </div> <!-- ./GENERO -->



                        <div class="form-group"> <!-- VISITA -->
                            <label>Visita</label>
                            <div class="form-group">
                                <div class="radio">

                                    <label>
                                        <input type="radio" name="visita_condon" id="optionsRadios1_visita_condon" value="primeravez" >
                                        Primera vez
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="visita_condon" id="optionsRadios2_visita_condon" value="consecutiva">
                                        Consecutiva
                                    </label>
                                </div>
                            </div>
                        </div> <!-- ./VISTA -->



                        <div class="form-group"> <!-- CANTIDAD-->
                            <label>Cantidad</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                <input name="cantidad_condon" type="number" class="form-control" min="1" step="1" max="999">
                            </div>
                        </div> <!-- ./CANTIDAD   -->

                    </div><!-- /.box-body -->
                 </form>
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section>

@endsection