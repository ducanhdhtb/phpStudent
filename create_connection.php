<?php
$servername = "localhost";
$username = "pma";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if($conn){
    echo "connection success";
}
else{
    echo "connection not success";
};
?>