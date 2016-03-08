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
                    <h4><b>Registro de Condones Masculinos Entregados</b></h4>

                </div>
                <div class="icon">
                    <i class="fa fa-mars"></i>

                </div>

    </section>



    <br><br><br><br>


<section class="content">
    <div class="row">

        <div class="col-md-12">
    <!-- general form elements -->
            <div class="box box-primary">
                 <div class="box-header with-border">
                     <h3 class="box-title">Condones masculinos</h3>
                </div><!-- /.box-header -->
        <!-- form start -->
                <form role="form">
                    <div class="box-body">




                        <!-- Date picker -->
                        <div class="form-group">
                            <label>Fecha</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right active"   id="reservation">

                            </div><!-- /.input group -->
                        </div><!-- /.form group -->




                        <label>Género</label>
                        <div class="form-group">
                            <div class="radio">

                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                    Mujer
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Hombre
                                </label>
                            </div>

                        </div>


                        <label>Visita</label>
                        <div class="form-group">
                            <div class="radio">

                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                    Primera vez
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Consecutiva
                                </label>
                            </div>

                        </div>




                        <label>Cantidad</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                            <input type="number" class="form-control">

                        </div>


                 </form>
                    </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section>

@endsection