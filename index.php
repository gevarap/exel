<?php
require "vendor/autoload.php";
use Box\Spout\Writer\WriterFactory;
use Box\Spout\Common\Type;
$writer = WriterFactory::create(Type::XLSX);
$writer->openToFile(__DIR__ . '/index.xlsx');
$arr = [];
for ($i = 1; $i < 1000000; $i++) {
  $arr[] = ['data1', 1234, null, '', 'data5'];
}
$writer->addRows($arr); // add multiple rows at a time
$writer->close();