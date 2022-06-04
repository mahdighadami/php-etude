<?php
require 'Password.php';

$charset = null;
$len = null;

$p = new Password();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$charset = $_POST['input001'];
	$len = $_POST['input002'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Password Generator</title>
</head>
<body>

	<div style="margin: 8%">
		<form action="" method="post" style="text-align: center;">
			<p>Set Type(L/U/D):  </p>
			<input type="text" name="input001"><br>
			<p>Set lenght: </p>
			<input type="number" name="input002"><br><br>
			<input type="submit" name="submit" value="send">
	</div>		
	</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	?><div style=" text-align:center; "><?php
	echo "The Password generated is: "."<br><br>".$p->setCharSet($charset)
													->setCharLen($len)
													->generate();
}

?>
</div>
</body>
</html>