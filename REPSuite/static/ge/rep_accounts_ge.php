<?php

  $date=date("d.m.y"); // число.месяц.год 
  $time=date("H:i"); // часы:минуты:секунды 
  $account = $_POST['account']; // User account

  $rep_info = "$date $time $account";
  $f = fopen("rep_accounts_ge.txt", "a+");  
  fwrite($f,"\n $rep_info ");
  fclose($f);

?>