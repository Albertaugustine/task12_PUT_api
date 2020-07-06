<?php
include '../dbconfig.php';
////http://localhost/internship/api/getdata.php

//Output will be:
//Last entry name is:"albert"

$output=array();
$query="SELECT * FROM user ORDER BY id DESC LIMIT 1";
$gresult = $conn -> query($query);
if(mysqli_num_rows($gresult)>0){
  while($row=$gresult -> fetch_assoc()){
    $output=$row;
  }
echo ('Last entry name is:');
echo json_encode($output['Name']);
}
?>
