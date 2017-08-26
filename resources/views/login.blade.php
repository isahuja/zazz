@extends('default')

@section('content')
<style>
	nav{background:#f05f40!important;}
	#main{min-height: 500px;}
	center{margin:150px auto 40px;}
	nav li{display: none;}
</style>

<center>
		<form action="{{ URL::to('/login') }}" method="POST">
			<div>
				<label for="">Username</label>
				<input type="text" name="name"><br>
			</div>

			<div>
				<label for="">Password</label>
				<input type="password" name="password"><br>
			</div>
			
			<input type="submit" class="btn">
		</form>
</center>
@stop