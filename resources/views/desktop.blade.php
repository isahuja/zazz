
@extends('default')

@section('content')
<style>
	nav{background:#f05f40!important;}
	#main{min-height: 500px;}
	center{margin:50px auto 40px;}
	nav li{display: none;}
</style>
<center>
			<input type="hidden" id="category" value="desktop"><br>
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
				$('.questionbank').css('opacity', '0.5');
				$('#question-insert-div').append(data);
			} 
		});
	});

	function validateEmail(email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
  }

  function validateName(name) {
      var re = /^([^0-9]*)$/;
      return re.test(name);
  }

	$('body').on("submit", "form#qryform", function(e)
	{

		var email = validateEmail($('#qryform #email').val()),
          name = validateName($('#qryform #name').val());

		if(email ==  true && name == true){

			 $('.name-box .errorbox').hide();
           $('.email-box .errorbox').hide();

			e.preventDefault();
			var formData = new FormData(this);
			$.ajax(
			{
				url: base_url + '/register',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data)
				{
					alert('Your query has been submitted. We will get back to you soon');
				},
				cache: false,
				contentType: false,
				processData: false
			});
		} else {
			e.preventDefault();


			 if(email == true && name == false){
            $('.name-box .errorbox').show();
	        } else if(email == false && name == true){
	           $('.email-box .errorbox').show();
	        } else{
	          $('.name-box .errorbox').show();
	           $('.email-box .errorbox').show();

	        }
		}
		
	});
</script>
@stop
