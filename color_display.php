<!-- $color = array('white', 'green', 'red'') Go to the editor
Write a PHP script which will display the colors in the following way : 
Output : 
white, green, red -->

<?php

   $color = array('white', 'green', 'red');

   foreach ($color as $colors)
   {
    echo "$colors, ";
   } 
?>