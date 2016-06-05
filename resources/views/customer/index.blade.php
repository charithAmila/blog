@extends('main')
@section('content')
<h1>
this is a customer view
</h1>
<?php
foreach ($model as $i) 
{
	# code...
	echo $i->first_name;
}
?>
@endsection