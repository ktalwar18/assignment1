<!-- Write a PHP program to sort an associative array (alphanumeric with case-sensitive data) by values -->

<?php
    
   $value = array(
    
    0 => 'EXAMple121',
    1 => 'Example11',
    2 => 'example10',
    3 => 'Example6',
    4 => 'example4',
    5 => 'EXAMPLE40',
    6 => 'example10'
    );

    asort($value);
    echo "<pre>";
    print_r($value);

?>