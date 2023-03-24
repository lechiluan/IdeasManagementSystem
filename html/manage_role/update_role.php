<?php 
include_once("connection.php");
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM Role WHERE RoleID = '$id'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $role_id = $row["RoleID"];
        $role_name = $row["RoleName"];
    }
    else {
        // if the query returns no results, you may want to redirect to an error page or back to the view roles page
        header("Location: view_roles.php");
        exit();
    }
}
else {
    // initialize the variable to prevent the undefined variable error
    $role_id = "";
}

if(isset($_POST["update"])){
    $role_id = $_POST["role_id"];
    $role_name = $_POST["role_name"];
    $sql = "UPDATE Role SET RoleID = '$role_id', RoleName = '$role_name' WHERE RoleID = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Role updated successfully";
    }else{
        echo "Error updating role";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Update Role</title>
</head>
<body>
  <h1>Update Role</h1>
  <form method="post" action="index.php?page=update_role&id=<?php echo $id; ?>">
    <label>Role ID:</label>
    <input type="text" name="role_id" value="<?php echo $role_id; ?>" required><br>
    <label>Role Name:</label>
    <input type="text" name="role_name" value="<?php echo $role_name; ?>" required><br>
    <button type="submit" name="update">Update</button>
    </form>
    <a href="index.php?page=view_role">Back to View Roles</a>
</body>
</html>
