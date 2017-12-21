<?php 

$n = 1000; 
$count = 0; 

for($n = 1000; $n >= 50; $n /= 2){
    $count++;
}

echo "#12: Iterations: {$count} => Result: {$n} <hr>"; 
echo '#13: ';
echo '<table>';
$rand_i = rand(1,20);
$rand_j = rand(1,20);
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