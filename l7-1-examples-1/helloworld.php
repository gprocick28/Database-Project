<html>
<head> <title> Hello </title> </head>
	<body>

	<form action="helloworld.php" method=get>
		Enter your name: <input type=text size=20 name="name">
		<input type=submit value="submit">
		<input type="hidden" name="form_submitted" value="1" >
	</form>

<?php 
if (!isset($_GET["form_submitted"]))
{ 
	echo "Hello World. <p>Please submit the form.";
}

else { 
	echo "Thanks! <p> Hello, " . $_GET["name"];
}

?>
 
	</body>
</html>
