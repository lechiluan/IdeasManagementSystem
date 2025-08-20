<?php
// Connect with MySQL
$conn = mysqli_connect("localhost", "root", "", "db_ideas", "3306");

if (!$conn) {
    echo "<script>alert('Connection failed: " . mysqli_connect_error() . "')</script>";
}
?>