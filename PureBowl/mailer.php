<?php
if (isset($_POST['ajax'])) {
$to = $_POST['to'];
$subject = $_POST['sub'];
$msg = $_POST['msg'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$_POST['name']."<".$_POST['from'].">";


$send = mail($to,$subject,$msg,$headers);

if ($send)
{
	echo "<p id='success'>✔️  $to</p>";
}else{
	echo "<p id='error'>❌  $to</p>";
}
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">-->
	<!--<link rel="icon" href="">-->
	 <!-- Site Icons -->
	 <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->


    <link rel="stylesheet" href="css/style.css"> 
        <link rel="stylesheet" href="css/style1.css">    

    <link rel="stylesheet" href="css/style.css">    
	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="css/classic.css">    
	<link rel="stylesheet" href="css/classic.date.css">    
	<link rel="stylesheet" href="css/classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
 <title>Email Spoofer - Hak9</title>
	<style>
	body{
		margin: 0;
		padding: 0;
		background-color: #222;
	}
	::placeholder {
    	color: red;
    	opacity: .9;
    	font-size: 15px!important;
	}
	.main{
		max-width: 768px;
		margin: 0 auto;
	}
	#title{
		color: lime;
	    text-shadow: 0 0 20px lime;
		text-align: center;
		font-family: Montserrat;
	}
	input[type="text"]{
		background-color: #000;
		box-shadow: 0 0 11px 0px lime;
		height: 40px;
		width: 47%;
		border: none;
		border-radius: 4px;
		padding: 15px;
		margin: 1%;
		box-sizing: border-box;
		outline: none;
		transition: .5s ease-in;
		color: red;
		font-family: Montserrat;
		font-size: 14px;
	}
	input[type="text"]:hover{
		box-shadow: 0 0 11px 0px red;
	}
	#sub{
		width: 96.5%;
	}
	textarea{
		background-color: #000;
		box-shadow: 0 0 11px 0px lime;
		height: 300px;
    	width: 47%;
    	max-width: 49%;
		border: none;
		border-radius: 4px;
		padding: 15px;
		margin: 1%;
		box-sizing: border-box;
		outline: none;
		transition: .5s ease-in;
		color: red;
		font-family: Montserrat;
		font-size: 14px;
	}
	textarea:hover{
		box-shadow: 0 0 11px 0px red;
	}
	#btn{
		background-color: #000;
		box-shadow: 0 0 11px 0px lime;
		width: 96.5%;
		height: 40px;
	    margin-left: 5px;
		margin-bottom: 40px;
		color: lime;
		border: none;
		border-radius: 4px;
		font-family: Montserrat;
		font-size: 18px;
		font-weight: bold;
		letter-spacing: 1px;
		box-sizing: border-box;
		outline: none;
		transition: .5s ease-in;
		cursor: pointer;
	}
	#btn:hover{
		color: red;
	}
	#success{
		font-family: Montserrat;
		color: green;
	}
	#error{
		font-family: Montserrat;
		color: red;
	}
	</style>
</head>
<body>
<form action="" method="post">
<div class="main" style="margin-top: 100px;">
	<h1 id="title">Email Spoofer - Hak9</h1>
	<div>
		<input type="text" name="from" id="from" class="form-control"  value="purebowlcontact@gmail.com" readonly required autofocus>
		<input type="text" name="name" id="name" class="form-control"  value="Pure Bowl" readonly required autofocus>
	</div><br>
	<div>
		<input type="text" name="sub" id="sub" class="form-control"  value="You Got a Gift !" readonly required autofocus>">
	</div><br>
	<div>
		<textarea name="msg" id="msg" placeholder="Write your message here ... "></textarea>
		<textarea name="to" id="to" placeholder="to ..( write an email )"></textarea>
	</div>
	<div><br><br>
		<button id="btn" onclick="return false">SEND</button>
	</div>
	<div id="result"></div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#btn").on('click',function(){
		var mailist = $("#to").val().split("\n");
		var tmailist =  mailist.length;
		for (var current = 0; current < tmailist; current++) {
		var from = $("#from").val();
		var name = $("#name").val();
		var sub = $("#sub").val();
		var msg = $("#msg").val();
		var to = mailist[current];
		var data = "ajax=1&from=" + from + "&name=" + name + "&sub=" + sub + "&msg=" + msg + "&to=" + to;
			$.ajax({
				type : 'POST',
				data:  data,
				success: function(data) {
	                $("#result").append(data);
	            }
			});
		}


	});
});
</script>
</body>
</html>