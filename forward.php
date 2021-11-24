
<?php


if($_POST["message"]) {


mail("carlbuitems@gmail.com", $_POST["subject"],
$_POST["message"]. 
	 "From: $_POST["subject"]");


}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
</body>
</html>