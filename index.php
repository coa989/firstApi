<?php
require_once 'Employee.php';

$employee = (new Employee)->getAll();
var_dump($employee);