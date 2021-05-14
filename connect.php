<?php
  $server="localhost"; //variable $server receives "localhost" value
  $dbuser="root"; //variable $dbuser receives "root" value
  $password=""; //variable $password receives empty value
  /*
  //variable $link receives a value that will:
  - connect with mysql using ($server,$dbuser,$password) variables
  */
  $link=mysqli_connect($server,$dbuser,$password);
  //using $link variable(connects with mysql) and select giftcompany database
  mysqli_select_db($link, "property");
?>