
<?php

$ele = array(3,8,9,3,1,7,2,8);
$sorted = array();

for ($i=0; $i < 100 ; $i++) { 
    
    if(in_array($i , $ele)){
        array_push($sorted , $i);
        } 
}
print_r($sorted);
?>