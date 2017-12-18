<?php

define('EMPLOYEES_MAX_AMOUNT', 50);

$names = [
'Eyde Carnow',
'Erhard Hartnett',
'Flint Wilcher',
'June Perrat',
'Sheelah Epgrave',
'Gabriello Fargher',
'Christy Celloni',
'Wade Sprouls',
'Talbert Vanyashkin',
'Netty Standidge',
'Gideon Leggon',
'Salvidor Tinn',
'Murielle Vowden',
'Chadd Probbin',
'Noby Fotitt',
'Jen Greenstreet',
'Patti Steart',
'Darleen Blazic',
'Peg Frith'
];

$cities = [
'Murmansk',
'Telaga',
'Tanahbeureum',
'Changnyeong',
'Bang Lamung',
'Ostrožská Lhota',
'Abdurahmoni Jomí',
'San José de Feliciano',
'Samokov',
'Tul’chyn',
];

$namesMaxIndex = count($names) - 1;
$citiesMaxIndex = count($cities) - 1;

$employeesAmount = rand(5, EMPLOYEES_MAX_AMOUNT);

for($i = 1; $i <= $employeesAmount; $i++){
    $nameIndex = rand(0, $namesMaxIndex);
    $cityIndex = rand(0, $citiesMaxIndex);
    
    $employee = [
    'id' => $i,    
    'name' => $names[$nameIndex] ,
    'city' => $cities[$cityIndex],
];

    $employees[] = $employee;

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        tr.even td {
            background: #555;
        }
    </style>
</head>
<body>
    <h1>Employees</h1>
    <table border=1 width=100%>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>City</th>
        </tr>
        
        <?php foreach ($employees as $i => $employee) : ?>
            
        <tr <?=($i % 2==0) ? " class='even' " : '' ?>>
            <td><?=$employee['id']?></td>
            <td><?=$employee['name']?></td>
            <td><?=$employee['city']?></td>
        </tr>
        
       <?php endforeach; ?>
       
    </table>
    
</body>
</html>