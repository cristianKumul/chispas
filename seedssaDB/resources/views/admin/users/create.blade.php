@extends('layouts.app')

@section('htmlheader_title')
	Registros
@endsection


@section('main-content')

	<section class="content-header">

		<h1><b>Registros</b> <small> </small></h1>

		<br>
		<br>
	</section> <!--/ .section headerr -->

	<br>

	<section class="content">
		<div class="col-lg-12 col-xs-12">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3>Usuarios</h3>
				</div>
				<div class="icon">
					<i class="glyphicon glyphicon-user"></i>
				</div>
				<a href="/usuarios" class="small-box-footer">
					Ir <i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>


		<div class="col-lg-12 col-xs-12">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3>Consulta</h3>
				</div>
				<div class="icon">
					<i class="fa fa-stethoscope"></i>
				</div>
				<a href="#" class="small-box-footer">
					Ir <i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>


		<div class="col-lg-12 col-xs-12">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
					<h3>Anticonceptivo</h3>

				</div>
				<div class="icon">
					<i class="glyphicon glyphicon-plus"></i>
				</div>
				<a href="#" class="small-box-footer">
					Ir <i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>

	</section>
@endsection






	{{--<h1><b>¡Bienvenido (a)!</b></h1>



    <br>

</div>


<div class="col-lg-9" >
    <img class="img-responsive" src="{{ asset('/img/LOGO_SEEDSSA2.png') }}" alt="">
</div>


<br>
<br>

<div>
<h1><b>¿Qué desea realizar?</b></h1>

</div>--}}







