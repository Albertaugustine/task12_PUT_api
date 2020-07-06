<?php
require '../dbconfig.php';

//http://localhost/internship/api/add_data.php
/*[{
"Name":"albert"
}]*/

$put=file_get_contents('php://input');
$data=(array)json_decode($put, true);

//print_r($data[0]['name']);

$squery="INSERT INTO user (`Name`) VALUES ('".$data[0]['Name']."')";
$result=$conn->query($squery);
?>