@extends('admin.template.main')

@section('title', 'Lista de Estudiantes')
@endsection


@section('content')
	<a class="btn btn-info" href="{{route('admin.estudiantes.create')}}" role="button">Nuevo Estudiante</a><hr>
	@if(Session::has('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  {{Session::get('message')}}
	</div>
    @endif
    <table class="table table-striped ">
 		<thead> 			
 			<th>Nombre</th>
 			<th>Curso</th> 			
 			<th>Acciones</th> 				
 		</thead>

 		<tbody>
 			<tr>
 			@foreach ($estudiantes as $estudiante ) 
 			
 			<td>{{$estudiante->name}}</td>
 			
 			<td>{{$estudiante->curso->name}}</td>

 			<td><a class="btn btn-success" href="{{route('admin.cursos.edit', $estudiante->id)}}"  role="button">
 			<i class="fa fa-pencil-square-o"></i></a>

 			<a class="btn btn-danger" href="{{route('admin.cursos.destroy', $estudiante->id)}}" onclick="return confirm('¿Deseas eliminar el registro?')" role="button"><i class="fa fa-trash-o"></i></a>  			    
 			</td>
 			</tr>
 			@endforeach	
 		</tbody>
 	</table>
 	{!! $estudiantes->render() !!}
   
@endsection