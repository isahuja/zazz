<div class="form-end"><h2 style="text-transform: capitalize;">{{ $comment }}</h2>
	<br><br>
	Query Form
	<form id='qryform' name='qryform' enctype="multipart/form-data">
		<div>
			<label for="">Name :</label>
			<input type="text" id="name" name="name"><br>
			<div class="errorbox">Name cannot contain numbers</div><br>
		</div>
		<div>
			<label for="">Email : </label>
			<input type="text" id="email" name="email"><br>
			<div class="errorbox">Email should be in 'abc@domian.com' format</div><br>
		</div>
		<div>
			<label for="">Message:</label>
			<textarea name="query" id="query" cols="30" rows="10"></textarea>
		</div>
		<br>
		<div>
			Upload ID <input type="file" name='file' id='file'>
		</div>
		<button id="register" class="btn">Submit</button>
	</form>
</div>