<?php
require ("Worker.php");

$worker1 = new Worker();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker();
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeWork 2</title>
</head>
<body>
<p> <?php echo ($worker1->getName()); ?> </p>
<p> <?php echo ("зарплата: {$worker1->getSalary()}, возраст: {$worker1->getAge()}"); ?> </p>
<p> <?php echo ($worker2->getName()); ?> </p>
<p> <?php echo ("зарплата: {$worker2->getSalary()}, возраст: {$worker2->getAge()}"); ?> </p>
</body>
</html>
