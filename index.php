<?php

define('EMPLOYEES_MAX_AMOUNT', 50);
$name = [
'Trey Crutchfield',
'Camilla Wastling',
'Lek Whitnell',
'Alena Verissimo',
'Mair Grason',
'Melisandra Chatterton',
'Mal Giorgione',
'Lyndell Escudier',
'Rosana Beidebeke',
'Chryste Meni',
'Saudra Freeberne',
'Creighton Brightwell',
'Marchelle Thiese',
'Amelie Archard',
'Kory Melburg',
'Frances Grzelczyk',
'Cordie Bragginton',
'Alano Spuner',
'Susanne Lomasney',
'Jacquelin Mulrooney',
];

$cities =[
'Vyborg',
'La Rochelle',
'Wates',
'Xindeng',
'Giebułtów',
'Wangchang',
'Detchino',
'Pasirhaur',
'Indaial',
'Canoinhas',
];

$namesMaxIndex = count($name) - 1;
$citiesMaxIndex = count($cities) - 1;
$employees = [];

//$employeesMaxAmount = EMPLOYEES_MAX_AMOUNT; 

$employeesAmount = rand(5, EMPLOYEES_MAX_AMOUNT);

for($i = 1; $i <= $employeesAmount; $i++){
    $nameIndex = rand(0, $namesMaxIndex);
    $cityIndex = rand(0, $citiesMaxIndex);
    
    $employee = [
        'id' => $i,
        'name' => $name[$nameIndex],
        'city' => $cities[$cityIndex]
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
            <td>Id</td>
            <td>Name</td>
            <td>City</td>
        </tr>
        <?php foreach ($employees as $i => $employee) : ?>
            
            <tr <?=$i % 2 == 0 ? "class='even'" : '' ?> >
                <td><?=$employee['id'] ?></td>
                <td><?=$employee['name'] ?></td>
                <td><?=$employee['city'] ?></td>
            </tr>
          
        <?php endforeach; ?>
        
    </table>
    
</body>
</html>
