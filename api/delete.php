<?php
require_once '../Employee.php';

$data = json_decode(file_get_contents("php://input"));

$employee = (new Employee)->delete($data);