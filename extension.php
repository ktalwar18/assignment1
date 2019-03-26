 <!-- Write a PHP program to get the extension of a file. -->

 <?php
   
   $filename="index.php";
   $ext=pathinfo($filename);
   echo $ext['extension'];

 ?>