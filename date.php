<?php
  echo date('d'); //Day
  echo date('m');//month
  echo date('Y');//year
  echo date('l'); // day of the week

  echo date('d/m/y/ l');
  echo date('h');//hour
  echo date('i'); //Min
  echo date('s'); //Seconds
  echo date('a'); // AM PM
  //set time zone

  // date_default_timezone_set('America/New_York');
  // echo date('h:i:sa');

  $timestamp = mktime(10, 14, 54, 9, 10, 1981);
  // echo $timestamp;
  // echo date('m/d/Y h:i:sa', $stimestamp);

  $timestamp2 = strtotime('7:00pm Marc 22 2018');
  echo $timestamp2;

  echo date('m/d/Y')

 ?>
