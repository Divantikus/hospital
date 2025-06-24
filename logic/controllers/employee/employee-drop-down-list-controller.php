<?php
include_once "../../logic/functions_db.php";
include_once "../../logic/functions/create-drop-down-list-options.php";

$res = getAllEmployee();

createDropDownListOptions($res, 'EmployeeID', ['fullName', "specialization", "category"], ", ");
