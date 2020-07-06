<?php
require '../dbconfig.php';

//http://localhost/internship/api/putdata.php

/*
Type this json in body. It will be added to the table:
[{
"Name":"albert"
}]
*/

//Output will be:
//albert

$put=file_get_contents('php://input');
$data=(array)json_decode($put, true);

//print_r($data[0]['name']);

$squery="INSERT INTO user (`Name`) VALUES ('".$data[0]['Name']."')";
$result=$conn->query($squery);
print_r($data[0]['Name']);

?>
