<?php
require("../includes/database_connect.php");

$ReqTeacherid= $_POST['ReqTeacherid'];
$Date = $_POST['Date'];
$timeFrom = $_POST['timeFrom'];
$timeTo = $_POST['timeTo'];

$sql = "INSERT INTO teacher_acc (ReqTeacherid,Date,timeFrom,timeTo) VALUES ('$ReqTeacherid', '$Date', '$timeFrom', '$timeTo')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Someting went wrong!");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Request Submitted Succesfully");
echo json_encode($response);
mysqli_close($conn);
