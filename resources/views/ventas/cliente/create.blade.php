@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Cliente</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
		</div>
			{!!Form::open(array('url'=>'ventas/cliente','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
						<div class="row">
							<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
								<div class="form-group">
									<label for="nombre">Nombre</label>
									<input type="text" name="nombre" required value="{{ old('nombre') }}" class="form-control" placeholder="Nombre...">
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
								<div class="form-group">
									<label for="nombre">Direccion</label>
									<input type="text" name="direccion" required value="{{ old('direccion') }}" class="form-control" placeholder="Direccion del Cliente...">
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
								<div class="form-group">
									<label for="nombre">Documento</label>
									<select class="form-control" name="tipo_documento">
										<option value="DNI">DNI</option>
										<option value="RUC">RUC</option>
										<option value="PAS">PAS</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
								<div class="form-group">
									<label for="nombre">Numero Documento</label>
									<input type="text" name="num_documento" value="{{ old('num_documento') }}" class="form-control" placeholder="Numero de documento del cliente...">
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
								<div class="form-group">
									<label for="nombre">Telefono</label>
									<input type="text" name="telefono" value="{{ old('telefono') }}" class="form-control" placeholder="Telefono del cliente...">
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
								<div class="form-group">
									<label for="nombre">Email</label>
									<input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email del cliente...">
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
								<div class="form-group">
		            	<button class="btn btn-primary" type="submit">Guardar</button>
		            	<button class="btn btn-danger" type="reset">Cancelar</button>
		            </div>
							</div>
						</div>


			{!!Form::close()!!}

	</div>
@endsection
