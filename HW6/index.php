<?php
require ("Worker.php");
require ("Form.php");

$form = new Form();



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
    <title>HomeWork 6</title>
</head>
<body>
    <?php
    echo $form->open(['action'=>'index.php', 'method'=>'POST']);
    echo $form->input(['type'=>'text', 'placeholder'=>'Your name', 'name'=>'name']);
    echo $form->password(['placeholder'=>'Your password', 'name'=>'pass']);
    echo $form->submit(['value'=>'Submit']);
    echo $form->close();
    ?>
</body>
</html>
