<?php
// Connect with MySQL
$conn = mysqli_connect("localhost", "root", "", "db_ideas", "3306");
//$conn = mysqli_connect("bjzzesbzxmdkjy99zjrn-mysql.services.clever-cloud.com", "uc2fzankb4vckadp", "JuLLcnGBQKm1k1MN1gxp", "bjzzesbzxmdkjy99zjrn", "3306");
if (!$conn) {
    echo "<script>alert('Connection failed: " . mysqli_connect_error() . "')</script>";
}
?>