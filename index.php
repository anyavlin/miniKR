<?php

spl_autoload_register(function ($class) {
    require __DIR__ . DIRECTORY_SEPARATOR . implode(
            DIRECTORY_SEPARATOR,
            explode('\\', str_replace('control', '', $class))
        ) . '.php';
});


$student = new Student(
  'Sidr',
  'Sidorov',
  new DateTime('2022-02-02'),
  'male',
  "ISP 20-22",
  new DateTime('2022-02-02'));

$student->setMiddleName('Sidorovich');
$student->Expel(true, new DateTime(2022-02-02));
echo($student->status());