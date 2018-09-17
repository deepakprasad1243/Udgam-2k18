<html>
<head>
<title>
H-V Registration
</title>
<link rel="icon" href="images/high_voltage.png" type="image" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>


body {
    background-image: url("images/bg3.jpg");
}
.ddd{
text-align:center;
color:white;
}
.frm{
color:black;
		border:solid black 2px;
		width:60%;
		margin:10px auto;
		background:#e5e0e0	;

		border-radius:3px;
		
		text-align:center;
		padding-top:20px;
		padding-bottom:10px;
		padding-left:180px;
		opacity:.8;
}
br {
   display: block;
   margin: 5px 0;
}
</style>
<script type="text/javascript">

function validation(){
	var bname=document.getElementById('band').value;
	var city=document.getElementById('city').value;
	var email=document.getElementById('email').value;
	var genre=document.getElementById('genre').value;
	var mname=document.getElementById('mname').value;
	var mcont=document.getElementById('mcont').value;

	if(bname!=""&&city!=""&&email!=""&&genre!=""&&mname!=""&&mcont!="")
alert ("We Registered "+bname+" for High Voltage\n Welcome to the Battle");
else
	alert("Please fill the required fields !");
}

$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Name-Role" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"name.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
});
</script>
</head>

<body class="container" >
	<div class="ddd">
	<h2>HIGH VOLTAGE REGISTRATION</h2>
		<div class="row">
			<div class="frm">
				<form method="post" action="register.php">
				<input type="text" name="band" class="form-control" id="band"placeholder="Band name" style="width:70%;align:center;" required>
				<br>
				<input type="text" name="city" class="form-control" id="city"placeholder="City" style="width:70%;align:center"required>
				<br>
				<input type="email" name="email" class="form-control" id="email" placeholder="Email Address" style="width:70%;align:center"required>
				<br>
				<input type="text" name="genre" class="form-control" id="genre"placeholder="Genre" style="width:70%;align:center"required>
				<br>
				<p align="left" style="padding-left:10px;">Member's Detail:</p>
						<table class="table table-bordered" id="dynamic_field" style="padding-top:0px">
							<tr>
								<td><input type="text" name="name[]" placeholder="Name-Role (e.g. Mike Portnoy-Drums)" class="form-control name_list" required /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
							</tr>
						</table>
				<input type="text" name="mname" class="form-control" id="mname"placeholder="Manager Name" style="width:70%;align:center" required>
				<br>
				<input type="text" name="mcont" class="form-control" id="mcont"placeholder="Managers contact Number" maxlength="10" style="width:70%;align:center"required>
				<br>
				<input type="text" name="fblink" class="form-control" placeholder="Band's Facebook link(optional)" style="width:70%;align:center">
				<br>
				<input type="text" name="olink" class="form-control" placeholder="Band's Reverbnation/sound cloud/youtube link(optional)" style="width:70%;align:center">
				<br>
				<p align="left" style="padding-left:10px;">*Genre of Band should fall under Rock&Metal</p>
				<span align="left" style="padding-right:150px;"><input type="submit" style="background:black"	onclick="validation();" name="submit" id="submit" class="btn btn-info" value="Register for High Voltage" /></span>
				</form>
			</div>
		</div>
																							
	</div>

</body>
</html>