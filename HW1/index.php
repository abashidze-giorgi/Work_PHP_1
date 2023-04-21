<?php
    require ('Worker.php');


    $worker1 = new Worker();
    $worker1->name = 'Иван';
    $worker1->age = 25;
    $worker1->salary = 1000;

    $worker2 = new Worker();
    $worker2->name = 'Вася';
    $worker2->age = 26;
    $worker2->salary = 2000;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeWork 1</title>
</head>
<body>
    <p> <?php echo ($worker1->name); ?> </p>
    <p> <?php echo ("зарплата: {$worker1->salary}, возраст: {$worker1->age}"); ?> </p>
    <p> <?php echo ($worker2->name); ?> </p>
    <p> <?php echo ("зарплата: {$worker2->salary}, возраст: {$worker2->age}"); ?> </p>

</body>
</html>
