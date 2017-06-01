<?php

// for ($c = 'a'; $c <= 'z'; $c++) { 
//   echo $c . "<br />"; 
// }
//php 常见bug
for ($i = ord('a'); $i <= ord('z'); $i++) { 
  echo chr($i) . "\n"; 
}
echo '<br>';
$letters = range('a', 'z'); 
for ($i = 0; $i < count($letters); $i++) { 
  echo $letters[$i] . "\n"; 
}

$array = []; 
var_dump(empty($array));    // outputs bool(true) 
$array = new ArrayObject(); 
var_dump(empty($array));    // outputs bool(false) 


$array = []; 
var_dump(count($array));    // outputs int(0) 
$array = new ArrayObject(); 
var_dump(count($array));    // outputs int(0)