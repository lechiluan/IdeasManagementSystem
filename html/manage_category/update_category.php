<?php
    include_once("connection.php");
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $sql = "SELECT * FROM Category WHERE CategoryID = 'id'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $category_id = $row["CategoryID"];
            $category_name = $row ["CategoryName"];
            $description = $row ["Description"];
            $closureDate = $row ["ClosureDate"];
            $deadline = $row ["Deadline"];
        }
        else
        {
            header("Location: view_category.php");
            exit();
        }
    }
    else
    {
        $category_id = "";
        $category_name = "";
        $description = "";
        $closureDate = "";
        $deadline = "";
    }
    if(isset($_POST["update"]))
    {
        $category_id = $_POST["category_id"];
        $category_name = $_POST["category_name"];
        $description = $_POST["description"];
        $closureDate = $_POST["closureDate"];
        $deadline = $_POST["deadline"];

        $sql = "UPDATE Category SET CategoryName = '$category_name', Description = '$description', ClosureDate = '$closureDate', Deadline = '$deadline' WHERE CategoryID = '$id'";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "Category update successfully";
        }
        else
        {
            echo "Error update category";
        }
    }
?>