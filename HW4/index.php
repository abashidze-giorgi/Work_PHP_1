<?php
require ("Worker.php");

$worker1 = new Worker('Дима', 25, 1000);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeWork 4</title>
</head>
<body>
    <p> <?= $worker1->getName() ?> </p>
    <?php $result =  $worker1->getSalary() * $worker1->getAge()?>
    <p> <?="произведение возраста и зарплаты: {$result}" ?> </p>
</body>
</html>
