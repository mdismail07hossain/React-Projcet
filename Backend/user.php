<?php
header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Headers: * ");
header("Access-Control-Allow-Methods: * ");

$cont= mysqli_connect("localhost","root","","react_project");

$user="SELECT * FROM user ORDER BY id DESC";
$mysqli=mysqli_query($cont,$user);
$json_data=array();
while($row=mysqli_fetch_assoc($mysqli)){
    $json_data[]=$row;
}
echo json_encode(['phpuser'=>$json_data]);    
?>