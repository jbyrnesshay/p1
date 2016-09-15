<?php

//this is in htdocs/test
$array1[10]=6;
 $array1[] = 9;//this is using the highest value index + 1
 var_dump($array1);

 echo '<br>';

 $array1['y'] = 501;

 var_dump($array1);

 unset($array1['y']);
 echo '<br>';
 var_dump($array1);

 unset($array1[]);
 echo '<br>';
 

?>