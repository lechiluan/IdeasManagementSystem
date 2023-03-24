<?php
if (isset($_POST['add'])) {
    $role_id = $_POST['role_id'];
    $role_name = $_POST['role_name'];
    $sql = "INSERT INTO Role (RoleID, RoleName) VALUES ('$role_id', '$role_name')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Role added successfully";
    } else {
        echo "Error adding role";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Role</title>
</head>

<body>
    <h1>Add Role</h1>
    <form method="post" action="index.php?page=add_role">
        <label>Role ID:</label>
        <input type="text" name="role_id" required><br>
        <label>Role Name:</label>
        <input type="text" name="role_name" required><br>
        <button type="submit" name="add">Create</button>
    </form>
    <a href="index.php?page=view_role">Back to View Roles</a>
</body>

</html>