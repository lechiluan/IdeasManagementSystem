<!DOCTYPE html>
<html>

<head>
    <title>View Departments</title>
</head>

<body>
    <h1>View Departments</h1>

    <?php include_once("connection.php"); ?>

    <?php $sql = "SELECT * FROM Department";
    $result = mysqli_query($conn, $sql); ?>

    <?php if (mysqli_num_rows($result) > 0) : ?>
        <table class="table">
            <tr>
                <th>Department ID</th>
                <th>Department Name</th>
                <th>Action</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $row["DepartmentID"]; ?></td>
                    <td><?php echo $row["DepartmentName"]; ?></td>
                    <td>
                        <a href="index.php?page=update_department&id=<?php echo $row["DepartmentID"]; ?>">Update</a>
                        <a href="index.php?page=view_department&function=delete_department&id=<?php echo $row["DepartmentID"]; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else : ?>
        <p>No departments found.</p>
    <?php endif; ?>

    <br>
    <a href="index.php?page=add_department">Add Department</a>
</body>

</html>

<?php
include_once("connection.php");
// code to delete a department
if (isset($_GET["function"]) && $_GET["function"] == "delete_department") {
    $id = $_GET["id"];
    $sql = "DELETE FROM Department WHERE DepartmentID = '$id'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($result) {
        echo "Department deleted successfully";
    } else {
        echo "Error deleting department";
    }
    // redirect to the view departments page
    header("Location: index.php?page=view_departments");
}
?>
