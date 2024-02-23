<?php

if(!isset($i)){
	$i = 1;
}

?>

<header>
	<nav spikeJsDef='navbar001'>
		<a href="index.php" class="<?php if($i==1){echo "activeL";} ?>" spikeJsLinkAttr='spaDefault'>Home</a>
		<a href="/videos.php" class="<?php if($i==2){echo "activeL";} ?>" spikeJsLinkAttr='spaDefault'>Videos</a>
		<a href="http://localhost/images.php" class="<?php if($i==3){echo "activeL";} ?>" spikeJsLinkAttr='spaDefault'>images</a>
		<a href="about.php" class="<?php if($i==4){echo "activeL";} ?>" spikeJsLinkAttr='spaRedir'>About</a>
	</nav>
</header>
<br>
	<h1>
		PHP SPA
	</h1>
