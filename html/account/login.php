<!-- Login Form -->
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
</div>

<!-- Path: html\account\login.php -->
<!-- Compare this snippet from connection.php: -->
<?php

if(isset($_POST['email']) && isset($_POST['password']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Staff WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['Password']))
        {
            $_SESSION['staff_id'] = $row['StaffID'];
            $_SESSION['full_name'] = $row['FullName'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['phone'] = $row['Phone'];
            $_SESSION['role_id'] = $row['RoleID'];
            $_SESSION['department_id'] = $row['DepartmentID'];
            echo "Login successful";
            header("Location: index.php");
        }
        else
        {
            echo "Invalid email or password";
        }
    }
    else
    {
        echo "No email or password";
    }
}
?>
