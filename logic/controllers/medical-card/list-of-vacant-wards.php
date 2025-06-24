<?php

include_once "../../logic/functions_db.php";

$res = getListOfVacantWards();

createDropDownListOptions($res, 'id', ['departmentName', "wardNumber"], ', ');
