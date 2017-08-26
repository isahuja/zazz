@extends('default')

@section('content')
<style>
	nav{background:#f05f40!important;}
	#main{min-height: 500px;}
	center{margin:150px auto 40px;}
	nav li{display: none;}
</style>

<center>
{{ $users }}
		<ul>
		@for ($i = 0; $i < $users; $i++)
			<li>{{$users.name}}</li>
		@endfor
		</ul>
</center>
@stop