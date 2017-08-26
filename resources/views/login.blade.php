@extends('default')

@section('content')
<style>
	nav{background:#f05f40!important;}
	#main{min-height: 500px;}
	center{margin:50px auto 40px;}
	nav li{display: none;}
</style>

<center>
		<form action="{{ URL::to('/login') }}" method="POST">
			<input type="text" name="name"><br>
			<input type="password" name="password"><br>
			<input type="submit">
		</form>
</center>
@stop