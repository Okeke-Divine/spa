<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Single Page app | Images</title>
	<link rel="stylesheet" type="text/css" href="spikeJs.css?r=<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="assets/main.css?r=<?php echo rand(); ?>">
</head>
<body>


<?php $i = 3;include("header.php"); ?>


<div id="app"></div>


</body>
</html>
<script type="text/javascript" src="spikeJs.js?r=<?php echo rand(); ?>"></script>
<script type="text/javascript">
	// spikeJs.urlPushState('off','');
	spikeJs.routerName = 'router.json';


</script>