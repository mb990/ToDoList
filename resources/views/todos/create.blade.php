@extends('layouts.app')

@section('content')
	<h1>Create Todo</h1>
	<div class="row">
		<div id='margina_div' class="col-md-4"><hr>
			{!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
		    	{{ Form::bsText('text') }}
		    	{{ Form::bsTextArea('body') }}
		    	{{ Form::bsText('due') }}
		    	{{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
			{!! Form::close() !!}
		</div>
	</div>
@endsection

