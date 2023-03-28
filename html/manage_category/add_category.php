<?php
    include_once("connection.php");

    if (isset($_POST['add']))
    {
        $category_id = $_POST['category_id'];
        $category_name = $_POST['category_name'];
        $description = $_POST['description'];
        $closureDate = $_POST['closureDate'];
        $deadline = $_POST['deadline'];

        $sql ="INSERT INTO Category (CategoryID, CategoryName, Description, ClosureDate, Deadline)
         VALUE ('$category_id', '$category_name', '$description', '$closureDate', '$deadline')";
        $result = mysqli_query($conn, $sql);
        if ($result)
        {
            echo "Category member added successfully";
        }
        else
        {
            echo "Error adding category member";
        }
    }
?>