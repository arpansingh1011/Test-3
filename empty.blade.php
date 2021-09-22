<?php 

$ele = array();
$count = 0;


for ($i=0; $i >-1 ; $i++) {


    $temp = readline('Enter array value: ');
    if($temp == "exit"){
        break;
    }
    else{ 
       
        array_push($ele , $temp);
        $count++;
    }
    
}

print_r($ele);

print_r($count);


?><?php 

$ele = array();
$count = 0;


for ($i=0; $i >-1 ; $i++) {

    
    
    $temp = readline('Enter array value: ');
    if($temp == "exit"){
        break;
    }
    else{ 
        
        array_push($ele , $temp);
        $count++;
    }
    
    
}

print_r($ele);

print_r($count);


?>