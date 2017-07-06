<?php

	include ('calcul_zile.php');
	
	echo returnLegalDays( !empty($_GET['year']) ? $_GET['year'] : date("Y"), true );

?>