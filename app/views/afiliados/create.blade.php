@extends('layouts.default')

@section('content')


<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->
<div class="pi-section-w pi-section-white piICheck piStylishSelect">
	<div class="pi-section pi-padding-bottom-80">

		<div class="pi-text-center pi-margin-bottom-60">
			<h1 class="pi-uppercase pi-weight-700 pi-has-border pi-has-tall-border pi-has-short-border pi-margin-bottom-70">
				Afiliate
			</h1>
<h3>
	Vos también podés formar parte del futuro, <br>
	Afiliate  nos ponemos en contacto muy pronto !<br>
</h3>

		</div>





<!-- Row -->
<div class="pi-row">



{{ Form::open(array('route' => 'afiliados.store', 'class' => 'panel-body wrapper-lg')) }}

<!-- Col 6 -->
<div class="pi-col-xs-6">
		<!-- First name form -->
		<div class="form-group">
			<label for="titular">Nombre</label>

			<div class="pi-input-with-icon">
				<div class="pi-input-icon"><i class="icon-pencil"></i></div>
				{{ Form::text('nombre', '', array('class' => 'form-control', 'id' => 'nombre', 'placeholder' => 'Ingrese el nombre')) }}
				<span class="label label-danger">* Obligatorio</span>
				<br>
				<?php if ($errors->first('nombre')) { ?>
							<span class="badge bg-danger">{{ $errors->first('nombre') }}</span>
				<?php } ?>

			</div>
		</div>
		<!-- End first name form -->

<div class="form-group">
	<label for="titular">Apellido</label>

	<div class="pi-input-with-icon">
		<div class="pi-input-icon"><i class="icon-pencil"></i></div>
		{{ Form::text('apellido', '', array('class' => 'form-control', 'id' => 'apellido', 'placeholder' => 'Ingrese Apellido')) }}
		<span class="label label-danger">* Obligatorio</span>
		<br>
		<?php if ($errors->first('apellido')) { ?>
					<span class="badge bg-danger">{{ $errors->first('apellido') }}</span>
		<?php } ?>

	</div>
</div>
<!-- End first name form -->


<div class="form-group">
	<label for="titular">Email</label>

	<div class="pi-input-with-icon">
		<div class="pi-input-icon"><i class="icon-pencil"></i></div>
		{{ Form::text('mail', '', array('class' => 'form-control', 'id' => 'mail', 'placeholder' => 'Ingrese Email')) }}
		<span class="label label-danger">* Obligatorio</span>
		<br>
		<?php if ($errors->first('mail')) { ?>
					<span class="badge bg-danger">{{ $errors->first('mail') }}</span>
		<?php } ?>

	</div>
</div>
<!-- End first name form -->




<!-- Message -->
<div class="form-group">
	<label for="exampleInputMessage-3">Genero</label>

		{{ Form::select('genero', array('masculino' => 'Masculino', 'femenino' => 'Femenino'), 'masculino', array('class' => 'form-control input-lg', 'id' =>'genero')) }}

</div>
<!-- End message form -->

<div class="form-group">
	<label for="titular">Fecha Nacimiento</label>

	<div class="pi-input-with-icon">
		<div class="pi-input-icon"><i class="icon-pencil"></i></div>
		{{ Form::text('fechanac', '', array('class' => 'form-control', 'id' => 'fechanac', 'placeholder' => 'Ingrese fecha de nacimiento dd-mm-aaaa')) }}
	</div>
</div>
<!-- End first name form -->



<!-- First email form -->
<div class="form-group">
	<label for="titular">Profesion</label>

	<div class="pi-input-with-icon">
		<div class="pi-input-icon"><i class="icon-pencil"></i></div>
		{{ Form::text('profesion', '', array('class' => 'form-control', 'id' => 'profesion', 'placeholder' => 'Ingrese la profesion')) }}
	</div>
</div>
<!-- End first email form -->


		<!-- First email form -->
		<div class="form-group">
			<label for="titular">Telefono</label>

			<div class="pi-input-with-icon">
				<div class="pi-input-icon"><i class="icon-pencil"></i></div>
				{{ Form::text('telefono', '', array('class' => 'form-control', 'id' => 'telefono', 'placeholder' => 'Ingrese un telefono')) }}
			</div>
		</div>
		<!-- End first email form -->

<!-- First email form -->
<div class="form-group">
	<label for="titular">Movil</label>

	<div class="pi-input-with-icon">
		<div class="pi-input-icon"><i class="icon-pencil"></i></div>
		{{ Form::text('movil', '', array('class' => 'form-control', 'id' => 'movil', 'placeholder' => 'Ingrese movil')) }}
		<span class="label label-danger">* Obligatorio</span>
		<br>
		<?php if ($errors->first('movil')) { ?>
					<span class="badge bg-danger">{{ $errors->first('movil') }}</span>
		<?php } ?>
	</div>
</div>
<!-- End first email form -->

<!-- First email form -->
<div class="form-group">
	<label for="titular">Direccion</label>

	<div class="pi-input-with-icon">
		<div class="pi-input-icon"><i class="icon-pencil"></i></div>
		{{ Form::text('direccion', '', array('class' => 'form-control', 'id' => 'direccion', 'placeholder' => 'Ingrese direccion')) }}
	</div>
</div>
<!-- End first email form -->




					<!-- Message -->
					<div class="form-group">
						<label for="exampleInputMessage-3">Localidad</label>


								{{ Form::select( 'localidads_id', Localidad::All()->
										lists('localidad', 'id'), '', array( "placeholder" => "", 'class' => 'form-control input-lg')) }}

					</div>
					<!-- End message form -->



	<!-- Message -->
	<div class="form-group">
		<label for="exampleInputMessage-3">Recibe noticas</label>

			{{ Form::select('noticias', array('si' => 'Si', 'no' => 'No'), 'si', array('class' => 'form-control input-lg', 'id' =>'noticias')) }}

	</div>
	<!-- End message form -->



</div>
<!-- Col 6 -->
<div class="pi-col-xs-8">

	<br>	<br>
		{{ Form::submit('Agregar', array('class' => 'btn pi-btn-base')) }}
</div>




</div>

</div>
</div>
</div>




@stop
