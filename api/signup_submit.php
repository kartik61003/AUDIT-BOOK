<?php
require("../includes/database_connect.php");

$name= $_POST['name'];
$course = $_POST['course'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM teacher_acc WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
    $response = array("success" => false, "message" => "This email id is already registered with us!");
    echo json_encode($response);
    return;
}

$sql = "INSERT INTO teacher_acc (name,course,email,password) VALUES ('$name', '$course', '$email', '$password')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Your account has been created successfully!");
echo json_encode($response);
mysqli_close($conn);
