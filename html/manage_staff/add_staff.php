<?php
include_once("connection.php");

// Retrieve the list of roles
$sql = "SELECT * FROM Role";
$role_result = mysqli_query($conn, $sql);

// Retrieve the list of departments
$sql = "SELECT * FROM Department";
$dept_result = mysqli_query($conn, $sql);

if (isset($_POST['add'])) {
    $staff_id = $_POST['staff_id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role_id = $_POST['role'];
    $dept_id = $_POST['department'];

    $sql = "INSERT INTO Staff (StaffID, FullName, Email, Phone, Password, RoleID, DepartmentID) VALUES ('$staff_id', '$full_name', '$email', '$phone', '$password', '$role_id', '$dept_id')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Staff member added successfully";
    } else {
        echo "Error adding staff member";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Staff Member</title>
</head>

<body>
    <h1>Add Staff Member</h1>
    <form method="post" action="index.php?page=add_staff">
        <label>Staff ID:</label>
        <input type="text" name="staff_id" required><br>
        <label>Full Name:</label>
        <input type="text" name="full_name" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Phone:</label>
        <input type="text" name="phone" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <label>Role:</label>
        <select name="role" required>
            <?php foreach ($role_result as $role) : ?>
                <option value="<?= $role['RoleID']; ?>"><?= $role['RoleName']; ?></option>
            <?php endforeach; ?>
        </select><br>
        <label>Department:</label>
        <select name="department" required>
            <?php foreach ($dept_result as $dept) : ?>
                <option value="<?= $dept['DepartmentID']; ?>"><?= $dept['DepartmentName']; ?></option>
            <?php endforeach; ?>
        </select><br>
        <button type="submit" name="add">Add Staff Member</button>
    </form>
    <a href="index.php?page=view_staff">Back to View Staff Members</a>
</body>
</html>
