@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Publicación</div>
				<div class="panel-body">
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Ups!</strong> Existen los siguientes errores.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					@if (Session::has('message'))
					<div class="alert alert-info">{{ Session::get('message') }}</div>
					@endif
					<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="/editNew">

						<div class="list-group">
							<div class="list-group-item">
								<legend>Noticia</legend>

								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="id" value="{{ $news->id }}">

								<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
									<label for="roles_id" class="col-md-4 control-label">Tipo</label>

									<div class="col-md-6">
										<select id="type"  class="form-control" name="type" required>
											<option value="">Seleccione el tipo</option>
											<option @if($news->type=='Noticia') selected @endif value="Noticia">Noticia</option>
											<option @if($news->type=='Evento') selected @endif value="Evento">Evento</option>
										</select>

										@if ($errors->has('type'))
											<span class="help-block">
									<strong>{{ $errors->first('type') }}</strong>
								</span>
										@endif
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Titulo</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="title" value="{{ $news->title }}" required>
									</div>
								</div>

								<div class="noticia_data form-group{{ $errors->has('category') ? ' has-error' : '' }}">
									<label for="roles_id" class="col-md-4 control-label">Categoria</label>

									<div class="col-md-6">
										<select id="type"  class="form-control" name="category">
											<option @if($news->volanta=='Marketing') selected @endif value="Marketing">Marketing</option>
											<option @if($news->volanta=='Marketing Digital') selected @endif value="Marketing Digital">Marketing Digital</option>
											<option @if($news->volanta=='Comunicación') selected @endif value="Comunicación">Comunicación</option>
											<option @if($news->volanta=='Traducción') selected @endif value="Traducción">Traducción</option>
										</select>

										@if ($errors->has('category'))
											<span class="help-block">
												<strong>{{ $errors->first('category') }}</strong>
											</span>
										@endif
									</div>
								</div>

								<div class="noticia_data form-group">
									<label class="col-md-4 control-label">Volanta</label>
									<div class="col-md-6">
										<textarea maxlength="100" name="volanta" id="volanta" rows="3" cols="52">{{$news->volanta}}</textarea>
									</div>
								</div>

								<div class="noticia_data form-group">
									<label class="col-md-4 control-label">Copete</label>
									<div class="col-md-6">
										<textarea name="copete" id="copete" rows="3" cols="52">{{$news->copete}}</textarea>
									</div>
								</div>

								<div class="noticia_data form-group">
									<label class="col-md-4 control-label">Texto</label>
									<div class="col-md-6">
										<textarea name="bajada" id="bajada" rows="3" cols="52">{{$news->bajada}}</textarea>
									</div>
								</div>

								<div class="noticia_data form-group">
									<label class="col-md-4 control-label">Imagen Chica</label>
									<div class="col-md-6">
										@if($news->small_pic!=null)
											<img src="{{asset('publicaciones/'.$news->small_pic)}}" class="img-responsive" >
										@endif
										<input type="file" class="form-control" name="small_pic">
									</div>
								</div>

								<div class="noticia_data form-group">
									<label class="col-md-4 control-label">Imagen Grande</label>
									<div class="col-md-6">
										 @if($news->big_pic!=null)
		                                 <img src="{{asset('publicaciones/'.$news->big_pic)}}" class="img-responsive" >
		                                 @endif
										<input type="file" class="form-control" name="big_pic">
									</div>
								</div>

								<div class="evento_data form-group">
									<label class="col-md-4 control-label">Fecha y hora</label>
									<div class="col-md-6">
										<textarea name="date" id="date" rows="3" cols="52">{{$news->date}}</textarea>
									</div>
								</div>

								<div class="evento_data form-group">
									<label class="col-md-4 control-label">Lugar</label>
									<div class="col-md-6">
										<textarea name="lugar" id="lugar" rows="3" cols="52">{{$news->place}}</textarea>
									</div>
								</div>
								
								<div class="form-group">	
									<div class="col-md-6 col-md-offset-5"><br/>
										<button type="submit" class="btn btn-primary">
											Editar Publicación
										</button>
									</div>
								</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <script>
      
     </script>
	@endsection

@section('scripts')
	<script>
        $(document).ready(function () {
            @if($news->type=='Evento')
				$('.noticia_data').hide();
            @else
				$('.evento_data').hide();
            @endif
            $('#type').change(function () {
                if($(this).val()=='Evento'){
                    $('.noticia_data').hide();
                    $('.evento_data').slideDown('slow');
                } else {
                    $('.evento_data').hide();
                    $('.noticia_data').slideDown('slow');
                }
            });
        });
	</script>
@endsection

