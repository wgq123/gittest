<?php

	
	 
    $a = 1;
	$b = 2;
	$a = &$b;
	$b =3;
	echo $a;