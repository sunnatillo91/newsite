<?php
$conn = mysql("localhost", "root", "", "cart_system");
if($conn->connect-error){
    die("Connection Failed!".$conn->connect_error);
}
?>