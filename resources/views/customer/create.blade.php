@extends('main')
@section('content')

<h1>
Create Customer
</h1>
<hr/>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-7">
		{!! Form::open(array('url' => 'customer/store')) !!}
		<div class="row"> 
		   {{  Form::label('first_name', 'First Name')}}
		   {{ Form::text('first_name',null,['class'=>'form-control','required'=>''])}}
		</div>
		<div class="row"> 
		   {{  Form::label('last_name', 'Last Name')}}
		   {{ Form::text('last_name',null,['class'=>'form-control','required'=>''])}}
		</div>
		<div class="row"> 
		   {{  Form::label('email', 'Email')}}
		   {{ Form::text('email',null,['class'=>'form-control','required'=>''])}}
		</div>
		{{ Form::submit('Submit',['class'=>'btn btn-success'])}}
		{!! Form::close() !!}		
	</div>

</div>
@endsection

