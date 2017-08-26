


@extends('default')

@section('content')
<style>
	nav{background:#f05f40!important;}
	#main{min-height: 500px;}
	center{margin:50px auto 40px;}
	nav li{display: none;}
</style>
<center>
		<input type="hidden" id="category" value="laptop"><br>
		<div id="question-insert-div"></div>
</center>
@stop

@section('scripts')
<script type="text/javascript">
	var base_url = "{{ URL::to('/') }}";
	$.ajax(
	{
		url  : 	base_url + '/get-first-question',
		type : 	"get",
		data : 	{
					'category'	: $('#category').val(),
				},
		success:function(data)
		{
			$('#question-insert-div').append(data);
		} 
	});

	$('body').on('click','.submit-option',function()
	{
		var id = $(this).data('id');
		var radio_name = id + '-radio';
		var value = $("input[name=" + radio_name + "]:checked").val();

		$.ajax(
		{
			url  : 	base_url + '/submit-option',
			type : 	"post",
			data : 	{
						'id'		: id,
						'value'		: value,
					},
			success:function(data)
			{
				$('#question-insert-div').append(data);
			} 
		});
	});

	$('body').on('click','#register',function()
	{
		var name = $('#name').val();
		var email = $('#email').val();
		var contact = $('#contact').val();
		var query = $('#query').val();
		var category = $('#category').val();

		$.ajax(
		{
			url  : 	base_url + '/register',
			type : 	"post",
			data : 	{
						'name' : name,
						'email' : email,
						'contact' : contact,
						'query' : query,
						'category'	: category,
					},
			success:function(data)
			{
				alert('Done');
			} 
		});
	});
</script>
@stop
