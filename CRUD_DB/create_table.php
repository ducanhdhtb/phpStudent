<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "admin";/* put your database name here */

/* Create connection */
$conn = mysqli_connect($servername, $username, $password, $dbname);
/* Check connection */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* sql query to create table */
$sql = "CREATE TABLE Student (
ID int NOT NULL AUTO_INCREMENT,
FirstName varchar(50),
LastName varchar(50),
RollNo varchar(50),
City varchar(50),
PRIMARY KEY (ID)
)";


if (mysqli_query($conn, $sql)) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

