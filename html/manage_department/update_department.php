<?php 
include_once("connection.php");
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM Department WHERE DepartmentID = '$id'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $department_id = $row["DepartmentID"];
        $department_name = $row["DepartmentName"];
    }
    else {
        // if the query returns no results, you may want to redirect to an error page or back to the view departments page
        header("Location: view_departments.php");
        exit();
    }
}
else {
    // initialize the variable to prevent the undefined variable error
    $department_id = "";
}

if(isset($_POST["update"])){
    $department_id = $_POST["department_id"];
    $department_name = $_POST["department_name"];
    $sql = "UPDATE Department SET DepartmentID = '$department_id', DepartmentName = '$department_name' WHERE DepartmentID = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Department updated successfully";
    }else{
        echo "Error updating department";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Department</title>
</head>
<body>
  <h1>Update Department</h1>
  <form method="post" action="index.php?page=update_department&id=<?php echo $id; ?>">
    <label>Department ID:</label>
    <input type="text" name="department_id" value="<?php echo $department_id; ?>" required><br>
    <label>Department Name:</label>
    <input type="text" name="department_name" value="<?php echo $department_name; ?>" required><br>
    <button type="submit" name="update">Update</button>
    </form>
    <a href="index.php?page=view_department">Back to View Departments</a>
</body>
</html>