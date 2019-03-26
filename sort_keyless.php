 <!-- Write a PHP program to get a sorted array without preserving the keys -->

 <?php
   
   $fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
   
   ksort($fruits);
   
     foreach ($fruits as $key => $val)
      {
       echo "<pre>";	
       echo "$val\n";
      }
?>