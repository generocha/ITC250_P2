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
 // verify if the user entered the a vaild number in the input
   if(!is_numeric($temp) || (empty($temp) && $temp != 0)){
                   echo '<h4>You must enter a numeric value!</h4>
                         <p><button class="submit"><a href="' . THIS_PAGE . '">Convert another temp</a></button></p>
                         </div></div>';
               }
  
   // verify if the user choose one conversion mode
   else if(empty($type)&&!empty($temp)){
                   echo '<h4>You must choose one conversion mode!</h4>
                         <p><button class="submit"><a href="' . THIS_PAGE . '">Convert another temp</a></button></p>
                         </div></div>';
               }
