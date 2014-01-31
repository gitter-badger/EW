<?php
	if(!(fopen("installed", 'r'))) {
		echo "Already installed!";
		exit;
	}
?>