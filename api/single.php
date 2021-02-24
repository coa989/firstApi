<?php
require_once '../Employee.php';

$employee = (new Employee)->getSingle($_GET['id']);

echo $employee;