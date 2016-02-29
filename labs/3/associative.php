<? php

$firstEmployee = [
    "name" => "Jason",
    "department" => null
];

$itDepartment = [
    "name" => "IT",
    "employees" => [$firstEmployee]
];

$firstEmployee["department"] = $itDepartment;

$adminDepartment = [
    "name" => "Admin",
    "employees" => []
];


var_dump($firstEmployee);
var_dump($itDepartment["employees"][0]);

?>