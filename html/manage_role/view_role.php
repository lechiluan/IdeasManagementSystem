<!DOCTYPE html>
<html>

<head>
    <title>View Roles</title>
</head>

<body>
    <h1>View Roles</h1>

    <?php include_once("connection.php"); ?>

    <?php $sql = "SELECT * FROM Role";
    $result = mysqli_query($conn, $sql); ?>

    <?php if (mysqli_num_rows($result) > 0) : ?>
        <table class="table">
            <tr>
                <th>Role ID</th>
                <th>Role Name</th>
                <th>Action</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $row["RoleID"]; ?></td>
                    <td><?php echo $row["RoleName"]; ?></td>
                    <td>
                        <a href="index.php?page=update_role&id=<?php echo $row["RoleID"]; ?>">Update</a>
                        <a href="index.php?page=view_role&function=delete_role&id=<?php echo $row["RoleID"]; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else : ?>
        <p>No roles found.</p>
    <?php endif; ?>

    <br>
    <a href="index.php?page=add_role">Add Role</a>
</body>

</html>
<?php
include_once("connection.php");
// code to delete a role
if (isset($_GET["function"]) && $_GET["function"] == "delete_role") {
    $id = $_GET["id"];
    $sql = "DELETE FROM Role WHERE RoleID = '$id'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($result) {
        echo "Role deleted successfully";
    } else {
        echo "Error deleting role";
    }
    // redirect to the view roles page
    header("Location: index.php?page=view_roles");
}
?>
