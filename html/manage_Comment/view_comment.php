<?php
    include_once("connection.php");
?>

<?php
    include_once("connection.php");
    if (isset($_GET["function"]) && $_GET["function"] == "delete_comment") {
        $id = $_GET["id"];
        $sql = "DELETE FROM Comment WHERE CommentID = '$id'";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if ($result) {
            echo "Comment deleted successfully";
        } else {
            echo "Error deleting comment";
        }
        header("Location: index.php?page=view_comment");
    }
?>