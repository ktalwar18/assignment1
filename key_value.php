<!-- Write a PHP function to get an array with the first key and value -->

<?php

  function array_1st_element($my_array)
  {
    list($k) = array_keys($my_array);
    $result  = array($k=>$my_array[$k]);
    unset($my_array[$k]);
  
    return $result;

  }

    $colors = array('c1'=>'Red','c2'=>'Green','c3'=>'Black');
    // echo "<pre>";
    print_r(array_1st_element($colors));
?>
