<?php 

$n = 1000; 
$count = 0; 

for($n = 1000; $n >= 50; $n /= 2){
    $count++;
}

echo "#12: Iterations: {$count} => Result: {$n} <hr>"; 
echo '#13: ';
echo '<table>';
$rand_i = rand(1,3);
$rand_j = rand(1,3);
for($i = 1; $i <= $rand_i; $i++){
    echo '<tr>';
    for($j = 1; $j <= $rand_j; $j++){
        $randomR = dechex(rand(0, 255));
        $randomG = dechex(rand(0, 255));
        $randomB = dechex(rand(0, 255));
        $color = "$randomR . $randomG . $randomB";
        echo '<td bgcolor="#' . $color .'">' . $j * $i . '</td>'; 
    }
    echo '</tr>'; 
}
echo '</table> <hr>';

// $names = ['Andy', 'Mike', 'Bob'];
// var_dump(isset($names[4]));

echo "#17: <br>";
$months = ['Dec', 'Oct', 'Nov', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'Jul', 'Aug', 'Sep']; 

foreach($months as $month){
    if($month == date('M')){
        $month = "<b>{$month}</b>";
    }
    echo $month;
    echo '<br>'; 
}
echo "<hr>";

// chanding values in array
// $numbers = range(1, 10); 

// foreach($numbers as & $number){
//     $number *= 2;
// }
// unset($number); 
// var_dump($numbers);

/*foreach($numbers as $i => $number){
    $numbers[$i] *= 2; 
    echo $numbers[$i]; 
}*/

echo "#23: <br>";

$a = $b = 6556; // 2 + 5 + 6  652: 6, 60+5, 650+2
$reversed_a = 0; 
$sum = 0; 

while ($a){
    $r = $a % 10; //6, 5, 2 
    $reversed_a = $reversed_a * 10 + $r; 
    $sum += $r; 
    $a /= 10; // 25.6, 2.5, 0.2
    $a = (int) $a; //25, 2, 0
}
echo var_dump($b == $reversed_a); 

echo "<hr>";

//echo $a = false && true || false && true || !false && true; // true


// for($i=2;$i<100;$i++){
//     if($i<2)
//     continue;
//     else
//     {
//     $check=true;
//     for($j=2;$j<$i;$j++){
        
//         if ($i%$j==0) 
//         $check=false;
        
//         }
//         if ($check)
//         echo $i." ";
//     }
// }


// $i=2;
// while($i<100){
//     if($i<2)
//     continue;
//     else
//     {
//     $check=true;
//     $j=2;
//     while($j<$i){
        
//         if ($i%$j==0)
//         $check=false;
//         $j++;
//         }
//         if ($check)
//         echo $i." ";
//     }
//     $i++;
// }


// for($i=200;$i<400;$i++){
//     if($i<200){
//     continue;
//     }
//     else
//     {
//     $check=true;
//     for($j=2;$j<$i;$j++){
        
//         if ($i%$j==0) 
//         $check=false;
        
//         }
//         if ($check){
//         echo $i." ";
//         break;
//         }
//     }
// }

// Создать текстовый файл, в котором будет 10 строк.
// В первой строке записать 1, во второй 22, в третьей 33, ..., 
// в десятой - десять десяток

// for($i = 1; $i < 2; $i++){
    
//     if($i == 1){
//     echo $i . '<br>';
//     } 
    
//     for($j = 2; $j < 11; $j++){
//     echo $j . $j . '<br>';
//     }
// }


// for($i = 1; $i < 2; $i++){
    
//     if($i == 1){
//     $f = fopen('test.txt', 'w');
//     fwrite($f, $i . PHP_EOL);
//     fclose($f);
//     } 
//     for($j = 2; $j < 11; $j++){
//     $f = fopen('test.txt', 'a');
//     fwrite($f, $j . $j  . PHP_EOL);
//     fclose($f);
    
//     }
// }


$arr = [range(1,10)];  

function myfunction (Array $x){
   
 print_r (shuffle($x)); 
   
}

myfunction(shuffle($arr)); 



