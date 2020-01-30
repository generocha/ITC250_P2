<?php
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
if(isset($_POST['Temp']))
{
  // get the temperature from the input and add to the variable $temp
  $temp = $_POST['Temp'];
  // get the type of selected from the user and add to the variable $type
  $type = $_POST['TemperatureConversion'];
   echo '<p id="title">Temp Converter</p>
        <div class="container">
        <div id="inputbox">';
