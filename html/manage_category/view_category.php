<?php
    include_once("connection.php");

?>

<?php
    include_once("connection.php");

    if (isset($_GET["function"]) && $_GET["function"] == "delete_category")
    {
        $id = $_GET["id"];
        $sql = "DELETE FROM Category WHERE CategoryID = '$id'";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if ($result)
        {
            echo "Category delete successfully";
        }
        else
        {
            "Error deleting category";
        }
        header("Location: index.php?page=view_category");
    }
?>