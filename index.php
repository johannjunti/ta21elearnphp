<?php

echo 'Heloo World';
//print'Helou vorld';
//printf('heipa vorld');

$hello = 'World';
$hello = 3;
$world = '\nHello $hello';
$world = "\nHello $hello";
echo $world;
$array = array(1, 2, 3, 4);
$array = [1, 2, 3, 4];
$array[] = 5;
print_r($array);
var_dump($world);
$array = ['name' => 'Juhan', 'age' => 18];
var_dump($world);
$array = ['name' => 'Juhan', 'age' => 18, 17, 16];
var_dump($world);
if($array){

} elseif(!$array){
    
} else{

}
$num=1;
switch($num) {
    case 1 :
        echo 'Hello';
    case 2 :
        echo 'World';
        break;
    default:
        echo'default';
    
}

for($i = 1; $i<10; $i++){
    var_dump($i);
    $i++;
}
do{
    var_dump($i);
    $i++;
} while($i<10);

foreach($array as $item){
    var_dump($item);
}
foreach($array as $key=>$item){
    var_dump($key, $item);
}
var_dump($array);
foreach($array as &$item){
    $item = 0;
}
var_dump($array)








?>