<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Single Page app | Index</title>
	<link rel="stylesheet" type="text/css" href="spikeJs.css?r=<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="assets/main.css?r=<?php echo rand(); ?>">
</head>
<body>


<?php $i = 1;include("header.php"); ?>


<div id="app"></div>


</body>
</html>
<!-- <script type="text/javascript" src="spikeJs.js?r=<?php echo rand(); ?>"></script> -->
<script type="text/javascript" src="instantclick.js"></script>
<script type="text/javascript">
	// spikeJs.routerName = 'router.json';

	InstantClick.init();
</script>