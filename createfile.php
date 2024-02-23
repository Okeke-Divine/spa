<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create file</title>
</head>
<body>

<?php

	if(isset($_POST['create'])){
		$fname = $_POST['fname'];
		$fcont = $_POST['fcont'];
		$myfile = fopen($fname, "w");
		fwrite($myfile, $fcont);
		fclose($myfile);
	}

?>

	<form action="" method="post">
		<input type="text"  name="fname" placeholder="File name"><br />
		<textarea placeholder="File Content" name="fcont" style="width: 100%;height: 100px;"></textarea><br />
		<button name="create">Create</button>
	</form>

</body>
</html>