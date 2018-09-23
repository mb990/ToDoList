@extends('layouts.app')


@section('content')
	<a class="btn btn-default" href="/">Back</a>
	<h1>Edit Todo {{$todo->id}}</h1>
	<div class="row">
		<div id='margina_div' class="col-md-4"><hr>
			{!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
	    	{{ Form::bsText('text', $todo->text) }}
	    	{{ Form::bsTextArea('body', $todo->body) }}
	    	{{ Form::bsText('due', $todo->due) }}
	    	{{ Form::hidden('_method', 'PUT') }}
	    	{{ Form::bsSubmit('Confirm', ['class' => 'btn btn-primary']) }}
			{!! Form::close() !!}
		</div>
	</div>
@endsection