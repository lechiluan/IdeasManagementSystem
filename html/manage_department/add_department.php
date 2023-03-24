<?php
if (isset($_POST['add'])) {
    $department_id = $_POST['department_id'];
    $department_name = $_POST['department_name'];
    $sql = "INSERT INTO Department (DepartmentID, DepartmentName) VALUES ('$department_id', '$department_name')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Department added successfully";
    } else {
        echo "Error adding department";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Department</title>
</head>

<body>
    <h1>Add Department</h1>
    <form method="post" action="index.php?page=add_department">
        <label>Department ID:</label>
        <input type="text" name="department_id" required><br>
        <label>Department Name:</label>
        <input type="text" name="department_name" required><br>
        <button type="submit" name="add">Create</button>
    </form>
    <a href="index.php?page=view_department">Back to View Departments</a>
</body>

</html>