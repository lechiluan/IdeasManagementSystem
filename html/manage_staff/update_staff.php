<?php
include_once("connection.php");
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM Staff WHERE StaffID = '$id'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $staff_id = $row["StaffID"];
        $full_name = $row["FullName"];
        $email = $row["Email"];
        $phone = $row["Phone"];
        $password = $row["Password"];
        $role_id = $row["RoleID"];
        $department_id = $row["DepartmentID"];
    }
    else {
        // if the query returns no results, you may want to redirect to an error page or back to the view staff page
        header("Location: view_staff.php");
        exit();
    }
}
else {
    // initialize the variables to prevent the undefined variable error
    $staff_id = "";
    $full_name = "";
    $email = "";
    $phone = "";
    $password = "";
    $role_id = "";
    $department_id = "";
}

if(isset($_POST["update"])){
    $staff_id = $_POST["staff_id"];
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role_id = $_POST["role_id"];
    $department_id = $_POST["department_id"];
    $sql = "UPDATE Staff SET FullName = '$full_name', Email = '$email', Phone = '$phone', Password = '$password', RoleID = '$role_id', DepartmentID = '$department_id' WHERE StaffID = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Staff updated successfully";
    }else{
        echo "Error updating staff";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update Staff</title>
</head>
<body>
  <h1>Update Staff</h1>
  <form method="post" action="index.php?page=update_staff&id=<?php echo $id; ?>">
    <label>Staff ID:</label>
    <input type="text" name="staff_id" value="<?php echo $staff_id; ?>" readonly><br>
    <label>Full Name:</label>
    <input type="text" name="full_name" value="<?php echo $full_name; ?>"><br>
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $email; ?>"><br>
    <label>Phone:</label>
    <input type="text" name="phone" value="<?php echo $phone; ?>"><br>
    <label>Password:</label>
    <input type="password" name="password" value=""><br>
    <label>Role:</label>
    <select name="role_id">
        <?php
        $sql = "SELECT * FROM Role";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $selected = $role_id == $row['RoleID'] ? "selected" : "";
            echo "<option value='" . $row['RoleID'] . "' " . $selected . ">" . $row['RoleName'] . "</option>";
        }
        ?>
    </select><br>
    <label>Department:</label>
    <select name="department_id">
        <?php
        $sql = "SELECT * FROM Department";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $selected = $department_id == $row['DepartmentID'] ? "selected" : "";
            echo "<option value='" . $row['DepartmentID'] . "' " . $selected . ">" . $row['DepartmentName'] . "</option>";
        }
        ?>
    </select><br>

    <input type="submit" name="update" value="Update">
    </form>
</body>
</html>

