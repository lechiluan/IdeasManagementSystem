<?php
    include_once("connection.php");
?>

<?php
    include_once("connection.php");
    if(isset($_GET["function"]) && $_GET["function"] == "delete_document")
    {
        $id = $_GET["id"];
        $sql = "DELETE FROM Document WHERE DocumentID = '$id'";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if($result)
        {
            echo "Document deleled successfully";
        }
        else
        {
            echo "Error deleting document";
        }
        header("location: index.php?page=view_document");
    }
?>