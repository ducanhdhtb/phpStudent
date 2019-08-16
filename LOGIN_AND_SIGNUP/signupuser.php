<!DOCTYPE HTML>
<html>
<head>
    <title>User Signup</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php

extract($_POST);
include("database.php");


$fullname = $_POST['full-name'];
$email = $_POST['email-address'];
$username = $_POST['username'];
$phone = $_POST['phone-number'];

$presentAddress = $_POST['presentAddress'];
$permanentAddress = $_POST['permanent-address'];
$nidNumber = $_POST['nid-number'];

$sql = "INSERT INTO user(fullname,email,username,phoneNumber,presentAddress,permanentAddress,nidNumber)
		VALUES ('$fullname','$email','$username','$phone','$presentAddress','$permanentAddress','$nidNumber')";


if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode" => 200));
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


//?>
</body>
</html>