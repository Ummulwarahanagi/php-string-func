<?php
   $stringone="     Hello World! Welcome to PHP string functions  ";
   echo "The String is :".$stringone."<br>";
   echo "Printing the length of the string:".strlen($stringone)."<br>";
   echo "First occurrence of the word Hello :".strpos($stringone,"Hello")."<br>";
   echo "Replacing the World to Universe :",str_replace("World","Universe",$stringone)."<br>";
   echo "Converting the string to lowercase :".strtolower($stringone)."<br>";
   echo "Converting the string to uppercase :".strtoupper($stringone)."<br>";
   echo "Captilizing the first letter of each word :".ucwords($stringone)."<br>";
   echo "Capitalizing the first letter of the string :".ucfirst($stringone)."<br>";
   echo "Before the trim of white space : ".$stringone."<br>";
   echo "Removing white spaces from the begining and end of the string :".trim($stringone);
?>
