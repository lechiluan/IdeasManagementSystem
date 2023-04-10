<?php
    if (isset($_POST['logout'])) {
        session_destroy();
        echo "You have been logged out";
        header("Location: index.php");
    }
?>