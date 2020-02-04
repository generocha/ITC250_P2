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
  else{
  // function declaration convertTemp
  function convertTemp($temp,$type){
   if($type == 'fc'){// Fahrenheit to Celsius selected
       $newTemp = round(($temp - 32) * 5/9,2);
       return $temp.'&deg; Fahrenheit = '.$newTemp.'&deg; Celsius';
   }elseif($type == 'cf'){// Celsius to Fahrenheit selected
       $newTemp = round(($temp * 9/5) + 32,2);
       return $temp.'&deg; Celsius = '.$newTemp.'&deg; Fahrenheit';
   }elseif($type == 'fk'){ // Fahrenheit to Kelvin selected
       $newTemp = round(($temp + 459.67) * 5/9,2);
       return $temp.'&deg; Fahrenheit = '.$newTemp.'&deg; Kelvin';
   }elseif($type == 'kf'){// Kelvin to Fahrenheit selected
       $newTemp = round(($temp * 9/5) - 459.67,2);
       return $temp.'&deg; Kelvin = '.$newTemp.'&deg; Fahrenheit';
   }elseif($type == 'kc'){// Kelvin to Celsius selected
       $newTemp = round($temp - 273.15,2);
       return $temp.'&deg; Kelvin = '.$newTemp.'&deg; Celsius';
   }elseif($type == 'ck'){// Celsius to Kelvin selected
       $newTemp = round($temp + 273.15,2);
       return $temp.'&deg; Celsius = '.$newTemp.'&deg; Kelvin';

   }
}
 }
}
// invoke the function and pass the $temp and $type parameters
echo '<h2>'.convertTemp($temp,$type).'</h2>
     <p><button class="submit"><a href="' . THIS_PAGE . '">Convert another temp</a></button></p>
     </div></div>';

  
}else{
// display the input
   echo '
   <p id="title">Temp Converter</p>
     <div class="container">
     <div id="inputbox">
           <form action="" method="POST">
               <h2>Enter your temperature <input type="number" max="500" name="Temp" />
               <input id="submit" type="submit" value="convert" /></h2><br />
                   <div id="optionwindow">
                   <legend>Select a temperature conversion</legend>
                   <span class="option">
                   <p><input type="radio" name="TemperatureConversion" value="fc" />Fahrenheit to Celsius</p><br />
                   <p><input type="radio" name="TemperatureConversion" value="cf" />Celsius to Fahrenheit</p>
                   </span>
                   <span class="option">
                   <p><input type="radio" name="TemperatureConversion" value="fk" />Fahrenheit to Kelvin</p><br />
                   <p><input type="radio" name="TemperatureConversion" value="kf" />Kelvin to Fahrenheit</p>
                   </span>
                   <span class="option">
                   <p><input type="radio" name="TemperatureConversion" value="kc" />Kelvin to Celsius</p><br />
                   <p><input type="radio" name="TemperatureConversion" value="ck" />Celsius to Kelvin</p>
                   </span>
                   <div>
           </form>
       </div>
       </div>';
    }
?>
</body>
</html>
