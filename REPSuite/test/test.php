<?php
	$name = $_POST['name'];

    $f = fopen("test.txt", "a+");  
    fwrite($f,"\n $name ");
    fclose($f);

    echo($name);
?>