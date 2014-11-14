@extends('layouts.default')

@section('content')


<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->
<div class="pi-section-w pi-section-white piICheck piStylishSelect">
	<div class="pi-section pi-padding-bottom-80">

		<div class="pi-text-center pi-margin-bottom-60">
			<h1 class="pi-uppercase pi-weight-700 pi-has-border pi-has-tall-border pi-has-short-border pi-margin-bottom-70">
				Afiliado
			</h1>
		</div>





<!-- Row -->
<div class="pi-row">




<!-- Col 6 -->
<div class="pi-col-xs-6">
		<!-- First name form -->
		<div class="form-group">
			<label for="titular">Nombre: </label>

			<div class="pi-input-with-icon">
				{{ $afiliado->nombre }}
			</div>
		</div>
		<!-- End first name form -->

<div class="form-group">
	<label for="titular">Apellido: </label>

	<div class="pi-input-with-icon">

			{{ $afiliado->apellido }}	</div>
</div>
<!-- End first name form -->


<div class="form-group">
	<label for="titular">Email: </label>

	<div class="pi-input-with-icon">

			{{ $afiliado->email }}
	</div>
</div>
<!-- End first name form -->




<!-- Message -->
<div class="form-group">
	<label for="exampleInputMessage-3">Genero: </label>
		{{ $afiliado->genero }}
</div>
<!-- End message form -->

<div class="form-group">
	<label for="titular">Fecha Nacimiento: </label>

	<div class="pi-input-with-icon">

		{{ $afiliado->fechanac }}
	</div>
</div>
<!-- End first name form -->



<!-- First email form -->
<div class="form-group">
	<label for="titular">Profesion: </label>

	<div class="pi-input-with-icon">

		{{ $afiliado->profesion }}
	</div>
</div>
<!-- End first email form -->


		<!-- First email form -->
		<div class="form-group">
			<label for="titular">Telefono: </label>

			<div class="pi-input-with-icon">

					{{ $afiliado->telefono }}
			</div>
		</div>
		<!-- End first email form -->

<!-- First email form -->
<div class="form-group">
	<label for="titular">Movil: </label>

	<div class="pi-input-with-icon">

		{{ $afiliado->movil }}
	</div>
</div>
<!-- End first email form -->

<!-- First email form -->
<div class="form-group">
	<label for="titular">Direccion: </label>

	<div class="pi-input-with-icon">

		{{ $afiliado->direccion }}
	</div>
</div>
<!-- End first email form -->




					<!-- Message -->
					<div class="form-group">
						<label for="exampleInputMessage-3">Localidad: </label>

<?php
		$localidad = Localidad::find($afiliado->localidads_id );

?>

								{{ $localidad->localidad }}
					</div>
					<!-- End message form -->



	<!-- Message -->
	<div class="form-group">
		<label for="exampleInputMessage-3">Recibe noticas: </label>

			{{ $afiliado->noticias }}

	</div>
	<!-- End message form -->



</div>
<!-- Col 6 -->
<div class="pi-col-xs-8">

	<br>	<br>

		<a href="/afiliados" class="btn pi-btn-base">Afiliados</a>
</div>




</div>

</div>
</div>
</div>




@stop
