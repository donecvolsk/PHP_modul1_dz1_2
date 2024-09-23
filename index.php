<?php
echo 'Имя файла: ' . basename(__FILE__, '.php') . PHP_EOL . 'Номер текущей строки: ' . __LINE__ . PHP_EOL;
    
$bigText = <<<heredoc_id
Одну большую строку можно разбить\nна несколько маленьких строк,\nчтобы её было удобнее читать.\n
heredoc_id;
echo $bigText;

$fish = 'Рыба';
$human = 'Человек';
echo $fish . ' рыбою сыта, а ' . $human . 'человеком.';