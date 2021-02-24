<?php
require_once '../Employee.php';

$employee = (new Employee)->getAll();

echo $employee;