<!-- Code View Staff -->
<?php
include_once("connection.php");

$sql = "SELECT Staff.*, Role.RoleName, Department.DepartmentName FROM Staff 
        JOIN Role ON Staff.RoleID = Role.RoleID
        JOIN Department ON Staff.DepartmentID = Department.DepartmentID";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>View Staff</title>
</head>
<body>
  <h1>View Staff</h1>
  <?php if(mysqli_num_rows($result) > 0) { ?>
  <table class="table">
    <tr>
      <th>ID</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Role</th>
      <th>Department</th>
      <th>Action</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?php echo $row['StaffID']; ?></td>
      <td><?php echo $row['FullName']; ?></td>
      <td><?php echo $row['Email']; ?></td>
      <td><?php echo $row['Phone']; ?></td>
      <td><?php echo $row['RoleName']; ?></td>
      <td><?php echo $row['DepartmentName']; ?></td>
      <td>
        <a href="index.php?page=update_staff&id=<?php echo $row['StaffID']; ?>">Update</a>
        <a href="index.php?page=view_staff&function=delete_staff&id=<?php echo $row["StaffID"]; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </table>
  <?php } else { ?>
  <p>No staff found.</p>
  <?php } ?>
  <a href="index.php?page=add_staff">Add Staff</a>
</body>
</html>


<?php
include_once("connection.php");
// code to delete a staff
if (isset($_GET["function"]) && $_GET["function"] == "delete_staff") {
    $id = $_GET["id"];
    $sql = "DELETE FROM Staff WHERE StaffID = '$id'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($result) {
        echo "Staff deleted successfully";
    } else {
        echo "Error deleting staff";
    }
    // redirect to the view staff page
    header("Location: index.php?page=view_staff");
}

?>
