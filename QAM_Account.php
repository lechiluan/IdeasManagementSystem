<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome   -->
    <link rel="icon" type="image/png" href="./img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Quality Assurance Manager</title>
</head>

<body class="bg-gray">
<!--============ Appbar =========-->
<div class="bg-white d-flex align-items-center fixed-top shadow" style="min-height: 60px; z-index: 10;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- search -->
            <div class="col d-flex align-items-center">
                <!--logo -->
                <img class="logoImage" src="./img/logo.png" alt="University of Greenwich">
                <!-- search bar -->
                <div class="input-group ms-2">
                    <li class="p-1 d-flex">
                        <div class="input-group-text bg-gray border-0 rounded-pill"
                             style="min-height: 40px; min-width: 300px;">
                            <i class="fas fa-search me-2 text-muted"></i>
                            <input type="text" class="form-control rounded-pill border-0 bg-gray"
                                   placeholder="Search Ideas ..." id="searchInput">
                            <button class="btn btn-outline-secondary border-0 rounded-circle" type="button"
                                    id="clearSearch"><i class="fas fa-times"></i></button>
                        </div>
                    </li>
                </div>
            </div>
            <script>
                // Clear search input when X button is clicked
                document.getElementById('clearSearch').addEventListener('click', function () {
                    document.getElementById('searchInput').value = '';
                });
            </script>
            <!-- menus -->
            <div class="col d-flex align-items-center justify-content-end">
                <!-- notifications -->
                <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center mx-2"
                     style="width: 38px; height: 38px" type="button" id="notMenu" data-bs-toggle="dropdown"
                     aria-expanded="false" data-bs-auto-close="outside">
                    <i class="fas fa-bell"></i>
                </div>
                <!-- notification dd -->
                <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="notMenu"
                    style="width: 23em; max-height: 600px; overflow-y: auto">
                    <!-- header -->
                    <li class="p-1">
                        <div class="d-flex justify-content-between">
                            <h2>Notifications</h2>
                            <div>
                                <i class="fas fa-ellipsis-h pointer p-2 rounded-circle bg-gray" type="button"
                                   data-bs-toggle="dropdown"></i>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item d-flex align-items-center" type="button">
                                        <i class="fas fa-check me-3 text-muted"></i>
                                        <p class="m-0">Mark all as read</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex" type="button">
                            <p class="rounded-pill bg-gray p-2">All</p>
                            <p class="ms-3 rounded-pill bg-primary p-2 text-white">
                                Unread
                            </p>
                        </div>
                    </li>
                    <!-- news -->
                    <div class="d-flex justify-content-between mx-2">
                        <h5>New</h5>
                        <a href="#" class="text-decoration-none">See All</a>
                    </div>
                    <!-- news 1 -->
                    <li class="my-2 p-1">
                        <a href="#"
                           class="d-flex align-items-center justify-content-evenly text-decoration-none text-dark">
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2">
                                    <img src="https://source.unsplash.com/random/1" alt="avatar"
                                         class="rounded-circle"
                                         style="width: 58px; height: 58px; object-fit: cover"/>
                                </div>
                                <div>
                                    <p class="fs-7 m-0">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Harum unde amet at nulla quae porro.
                                    </p>
                                    <span class="fs-7 text-primary">about an hour ago</span>
                                </div>
                            </div>
                            <i class="fas fa-circle fs-7 text-primary"></i>
                        </a>
                    </li>
                    <!-- news 2 -->
                    <li class="my-2 p-1">
                        <a href="#"
                           class=" d-flex align-items-center justify-content-evenly text-decoration-none text-dark ">
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2">
                                    <img src="https://source.unsplash.com/random/2" alt="avatar"
                                         class="rounded-circle"
                                         style="width: 58px; height: 58px; object-fit: cover"/>
                                </div>
                                <div>
                                    <p class="fs-7 m-0">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Harum unde amet at nulla quae porro.
                                    </p>
                                    <span class="fs-7 text-primary">about an hour ago</span>
                                </div>
                            </div>
                            <i class="fas fa-circle fs-7 text-primary"></i>
                        </a>
                    </li>
                    <!-- news 3 -->
                    <li class="my-2 p-1">
                        <a href="#"
                           class=" d-flex align-items-center justify-content-evenly text-decoration-none text-dark ">
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2">
                                    <img src="https://source.unsplash.com/random/3" alt="avatar"
                                         class="rounded-circle"
                                         style="width: 58px; height: 58px; object-fit: cover"/>
                                </div>
                                <div>
                                    <p class="fs-7 m-0">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Harum unde amet at nulla quae porro.
                                    </p>
                                    <span class="fs-7 text-primary">about an hour ago</span>
                                </div>
                            </div>
                            <i class="fas fa-circle fs-7 text-primary"></i>
                        </a>
                    </li>
                </ul>
                <!-- second menu -->
                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        mx-2
                    " style="width: 38px; height: 38px" type="button" id="secondMenu" data-bs-toggle="dropdown"
                     aria-expanded="false" data-bs-auto-close="outside">
                    <i class="fas fa-caret-down"></i>
                </div>
                <!-- sec dd -->
                <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="secMenu"
                    style="width: 23em;max-height: 600px;">
                    <!-- avatar -->
                    <li class="dropdown-item p-1 rounded d-flex" type="button">
                        <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                             class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover;">
                        <div>
                            <p class="m-0"></p>
                            <p class="m-0 text-muted">My Profile</p>
                        </div>
                    </li>
                    <hr/>
                    <!-- feedback -->
                    <li class="dropdown-item p-1 rounded d-flex align-items-center" type="button">
                        <i class="fa-sharp fa-solid fa-gear bg-gray p-2 rounded-circle"></i>
                        <div class="ms-3">
                            <p class="m-0">Settings</p>
                            <p class="m-0 text-muted fs-7">
                                Settings the profile
                            </p>
                        </div>
                    </li>
                    <hr/>
                    <!-- log out -->
                    <li class="dropdown-item p-1 rounded d-flex align-items-center" type="button">
                        <i class="fa-solid fa-right-from-bracket bg-gray p-2 rounded-circle"></i>
                        <div class="ms-3">
                            <p class="m-0">Log out</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- ================= Main ================= -->
<div class="container-fluid" style="margin-bottom: 100px;">
    <div class="row justify-content-evenly">
        <!-- ================= Sidebar ================= -->
        <div class="col-12 col-lg-3">
            <div class="d-none d-xxl-block h-100 fixed-top overflow-hidden scrollbar"
                 style="max-width: 360px; width: 100%; z-index: 4">
                <ul class="navbar-nav mt-4 ms-3 d-flex flex-column pb-5 mb-5" style="padding-top: 56px">
                    <!-- top -->
                    <!-- avatar -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                            <div class="p-2">
                                <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                     class="rounded-circle me-2"
                                     style="width: 38px; height: 38px; object-fit: cover"/>
                            </div>
                            <div>
                                <p class="m-0">Quality Assurance Manager</p>
                            </div>
                        </a>
                    </li>
                    <!-- top 1 -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="QAManager.php" class="d-flex align-items-center text-decoration-none text-dark"
                           id="manage-topics">
                            <div class="p-2">
                                <i class="fa-solid fa-bars-progress topic-icon" style="font-size: 35px;"></i>
                            </div>
                            <div>
                                <p class="m-0" style="padding-left: 10px;">Manage Topics</p>
                            </div>
                        </a>
                    </li>

                    <!-- top 2 -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="QAM_Department.php"
                           class="d-flex align-items-center text-decoration-none text-dark" id="manage-topics">
                            <div class="p-2">
                                <i class="fa-solid fa-bars-progress topic-icon" style="font-size: 35px;"></i>
                            </div>
                            <div>
                                <p class="m-0" style="padding-left: 10px;">Manage
                                    Departments</p>
                            </div>
                        </a>
                    </li>

                    <!-- top 3 -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="QAM_Account.php"
                           class="d-flex align-items-center text-decoration-none text-dark" id="manage-topics">
                            <div class="p-2">
                                <i class="fa-solid fa-bars-progress topic-icon active" style="font-size: 35px;"></i>
                            </div>
                            <div>
                                <p class="m-0" style="padding-left: 10px;" id="manage-topics-text">Manage Account
                                </p>
                            </div>
                        </a>
                    </li>

                    <!-- top 4 -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="QAM_Role.php" class="d-flex align-items-center text-decoration-none text-dark"
                           id="manage-topics">
                            <div class="p-2">
                                <i class="fa-solid fa-bars-progress topic-icon" style="font-size: 35px;"></i>
                            </div>
                            <div>
                                <p class="m-0" style="padding-left: 10px; ">Manage Role</p>
                            </div>
                        </a>
                    </li>

                    <hr class="m-0"/>
                </ul>
            </div>
        </div>

        <!-- ================= Timeline ================= -->
        <div class="col-12">
            <div class="d-flex flex-column justify-content-center mx-auto main-container">
                <h1>Manage Accounts</h1>

                <!-- Create Department -->
                <div class="d-flex justify-content-end align-items-center my-4">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAccountModal">
                        <i class="fas fa-plus-circle"></i> Create New Account
                    </button>
                </div>
                <?php
                include_once("connection.php");

                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\Exception;

                require 'PHPMailer/src/PHPMailer.php';
                require 'PHPMailer/src/SMTP.php';
                require 'PHPMailer/src/Exception.php';

                // Retrieve the list of roles
                $sql = "SELECT * FROM Role";
                $role_result = mysqli_query($conn, $sql);

                // Retrieve the list of departments
                $sql = "SELECT * FROM Department";
                $dept_result = mysqli_query($conn, $sql);

                if (isset($_POST['add'])) {
                    $full_name = $_POST['fullName'];
                    $email = $_POST['email'];
                    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    $role_id = $_POST['role'];
                    $dept_id = $_POST['department'];

                    $sql = "INSERT INTO Staff (FullName, Email, Password, RoleID, DepartmentID) VALUES ('$full_name','$email', '$password', '$role_id', '$dept_id')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        // Send email to the new staff member about login details
                        $to = $email;
                        $subject = 'Login details for new staff member account';
                        $message = 'Dear ' . $full_name . ',<br><br>';
                        $message .= 'Your account has been created. Please use the following details to log in:<br><br>';
                        $message .= 'Email: ' . $email . '<br>';
                        $message .= 'Password: ' . $_POST['password'] . '<br><br>';
                        $message .= 'Thank you,<br>The Admin Team';

                        // Set up the email headers
                        $mail = new PHPMailer(true);

                        try {
                            // Server settings
                            $mail->SMTPDebug = 0;
                            $mail->isSMTP();
                            $mail->Host = 'smtp.gmail.com';
                            $mail->SMTPAuth = true;
                            $mail->Username = 'greenwich.qa@gmail.com';
                            $mail->Password = 'iebdmpqvvkpjglec';
                            $mail->SMTPSecure = 'tls';
                            $mail->Port = 587;

                            // Recipients
                            $mail->setFrom('greenwich.qa@gmail.com', 'Greenwich QA');
                            $mail->addAddress($to, $full_name);

                            // Content
                            $mail->isHTML(true);
                            $mail->Subject = $subject;
                            $mail->Body = $message;

                            $mail->send();
                            echo "<script>alert('Staff member added successfully')</script>";
                            echo "<script>window.location.href = 'QAM_Account.php'</script>";
                        } catch (Exception $e) {
                            echo "<script>alert('Error sending email.')</script>";
                            echo "<script>window.location.href = 'QAM_Account.php'</script>";
                        }
                    } else {
                        echo "<script>alert('Error adding staff member')</script>";
                        echo "<script>window.location.href = 'QAM_Account.php'</script>";
                    }
                }
                ?>

                <!-- Create Account Modal -->
                <div class="modal fade" id="createAccountModal" tabindex="-1"
                     aria-labelledby="createAccountModalLabel" aria-hidden="true" data-bs-backdrop="false">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="createAccountModalLabel">Create New Account</h5>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="QAM_Account.php">
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label text-primary">Full Name:</label>
                                        <input type="text" class="form-control" id="fullName" name="fullName"
                                               placeholder="Full Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label text-primary">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               placeholder="Email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label text-primary">Password:</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password"
                                                   placeholder="Password" required>
                                            <button class="btn btn-outline-secondary" type="button"
                                                    id="togglePasswordBtn">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="role" class="form-label text-primary">Role:</label>
                                        <select class="form-select" id="role" name="role" required>
                                            <option value="" disabled selected>Select Role</option>
                                            <?php foreach ($role_result as $role) : ?>
                                                <option value="<?= $role['RoleID']; ?>"><?= $role['RoleName']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="department" class="form-label text-primary">Department:</label>
                                        <select class="form-select" id="department" name="department" required>
                                            <option value="" disabled selected>Select Department</option>
                                            <?php foreach ($dept_result as $dept) : ?>
                                                <option value="<?= $dept['DepartmentID']; ?>"><?= $dept['DepartmentName']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary w-100" name="add">Create Account
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Script to toggle password visibility -->
                <script>
                    const togglePasswordBtn = document.getElementById('togglePasswordBtn');
                    const passwordInput = document.getElementById('password');

                    togglePasswordBtn.addEventListener('click', function () {
                        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                        passwordInput.setAttribute('type', type);
                        this.querySelector('i').classList.toggle('fa-eye-slash');
                    });
                </script>

                <?php
                include_once("connection.php");

                $sql = "SELECT Staff.*, Role.RoleName, Department.DepartmentName FROM Staff JOIN Role ON Staff.RoleID = Role.RoleID JOIN Department ON Staff.DepartmentID = Department.DepartmentID";
                $result = mysqli_query($conn, $sql);
                ?>

                <!-- Account Table -->
                <div class="bg-light p-3 table-responsive">
                    <?php if (mysqli_num_rows($result) > 0) { ?>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tbody>
                                <tr>
                                    <td><?= $row['FullName']; ?></td>
                                    <td><?= $row['Email']; ?></td>
                                    <?php if ($row['RoleID'] == '1') { ?>
                                        <td><span class="badge bg-danger rounded-pill"><?= $row['RoleName']; ?></span>
                                        </td>
                                    <?php } else if ($row['RoleID'] == '2') { ?>
                                        <td><span class="badge bg-warning rounded-pill"><?= $row['RoleName']; ?></span>
                                        </td>
                                    <?php } else if ($row['RoleID'] == '3') { ?>
                                        <td><span class="badge bg-success rounded-pill"><?= $row['RoleName']; ?></span>
                                        </td>
                                    <?php } ?>
                                    <td><?= $row['DepartmentName']; ?></td>
                                    <td>
                                        <button class="btn btn-outline-primary me-2" id="editStaff"
                                                data-id="<?php echo $row['StaffID']; ?>"
                                                data-fullname="<?php echo $row['FullName']; ?>"
                                                data-email="<?php echo $row['Email']; ?>"
                                                data-role="<?php echo $row['RoleID']; ?>"
                                                data-department="<?php echo $row['DepartmentID']; ?>"
                                                data-toggle="modal" data-target="#editAccountModal">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <button class="btn btn-outline-danger" data-bs-toggle="modal" id="deleteStaff"
                                                data-bs-target="#deleteAccountModal"
                                                data-id="<?php echo $row['StaffID']; ?>"
                                        ><i class="fas fa-trash"></i>
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    <?php } else { ?>
                        <p>No staff found.</p>
                    <?php } ?>
                </div>
                <?php
                include 'connection.php';
                if (isset($_POST["edit"])) {
                    $staff_id = $_POST["staffID"];
                    $full_name = $_POST["fullName"];
                    $email = $_POST["email"];
                    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    $role_id = $_POST["role"];
                    $department_id = $_POST["department"];
                    $sql = "UPDATE Staff SET FullName = '$full_name', Email = '$email', Password = '$password', RoleID = '$role_id', DepartmentID = '$department_id' WHERE StaffID = '$staff_id'";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "<script>alert('Account updated successfully')</script>";
                        echo "<script>window.location.href = 'QAM_Account.php'</script>";
                    } else {
                        echo "<script>alert('Failed to update account')</script>";
                        echo "<script>window.location.href = 'QAM_Account.php'</script>";
                    }
                }
                // Delete Account
                if (isset($_POST["delete"])) {
                    $staff_id = $_POST["staffID"];
                    $sql = "DELETE FROM Staff WHERE StaffID = '$staff_id'";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "<script>alert('Account deleted successfully')</script>";
                        echo "<script>window.location.href = 'QAM_Account.php'</script>";
                    } else {
                        echo "<script>alert('Failed to delete account')</script>";
                        echo "<script>window.location.href = 'QAM_Account.php'</script>";
                    }
                }
                ?>
                <!-- Edit Account Modal -->
                <div class="modal fade" id="editAccountModal" tabindex="-1" aria-labelledby="editAccountModalLabel"
                     aria-hidden="true" data-bs-backdrop="false">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="editAccountModalLabel">Edit Account</h5>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="QAM_Account.php">
                                    <input type="hidden" name="staffID" id="edit_staff_id">
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label text-primary">Full Name:</label>
                                        <input type="text" class="form-control" id="edit_fullname" name="fullName" placeholder="Full Name"
                                               required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label text-primary">Email:</label>
                                        <input type="email" class="form-control" id="edit_email" name="email" required placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label text-primary">New Password:</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="passwordEdit"
                                                   name="password" required placeholder="New password">
                                            <button class="btn btn-outline-secondary" type="button"
                                                    id="togglePasswordBtnEdit">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="role" class="form-label text-primary">Role:</label>
                                        <select class="form-select" id="edit_role" name="role" required>
                                            <option value="" disabled selected>Select Role</option>
                                            <?php foreach ($role_result as $role) : ?>
                                                <option value="<?= $role['RoleID']; ?>"><?= $role['RoleName']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="department" class="form-label text-primary">Department:</label>
                                        <select class="form-select" id="edit_department" name="department" required>
                                            <option value="" disabled selected>Select Department</option>
                                            <?php foreach ($dept_result as $dept) : ?>
                                                <option value="<?= $dept['DepartmentID']; ?>"><?= $dept['DepartmentName']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary w-100" name="edit">Update Account
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    const togglePasswordBtnEdit = document.getElementById('togglePasswordBtnEdit');
                    const passwordInputEdit = document.getElementById('passwordEdit');

                    togglePasswordBtnEdit.addEventListener('click', function () {
                        const type = passwordInputEdit.getAttribute('type') === 'password' ? 'text' : 'password';
                        passwordInputEdit.setAttribute('type', type);
                        this.querySelector('i').classList.toggle('fa-eye-slash');
                    });
                </script>


                <!-- Delete Account Modal -->
                <div class="modal fade" id="deleteAccountModal" tabindex="-1"
                     aria-labelledby="deleteAccountModalLabel" aria-hidden="true" data-bs-backdrop="false">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h5 class="modal-title" id="deleteAccountModalLabel">Delete Account</h5>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this account?</p>
                            </div>
                            <div class="modal-footer">
                                <form method="post" action="QAM_Account.php">
                                    <input type="hidden" name="staffID" id="delete_staff_id">
                                    <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel
                                    </button>
                                    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ================= Footer ================= -->
<footer class="bg-white d-flex align-items-center fixed-bottom shadow">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="margin-top: 20px;">
                <!-- terms -->
                <div
                ">
                <p>
                    Privacy &#8226; Terms &#8226; Ideas Uni © 2024
                </p>
            </div>
        </div>
    </div>
    </div>
</footer>


<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<!-- main js -->
<script src="./js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        //NOTE: passing value to update house modal
        var editStaff = document.querySelectorAll('#editStaff');
        var deleteStaff = document.querySelectorAll('#deleteStaff');
        editStaff.forEach(function (e) {
            e.addEventListener('click', function () {
                // Get the values
                var StaffID = e.getAttribute('data-id');
                var StaffName = e.getAttribute('data-fullname');
                var StaffEmail = e.getAttribute('data-email');
                var StaffRole = e.getAttribute('data-role');
                var StaffDepartment = e.getAttribute('data-department');
                // Set the values
                document.getElementById('edit_staff_id').value = StaffID;
                document.getElementById('edit_fullname').value = StaffName;
                document.getElementById('edit_email').value = StaffEmail;
                document.getElementById('edit_role').value = StaffRole;
                document.getElementById('edit_department').value = StaffDepartment;

                // Show the modal
                var editAccountModal = new bootstrap.Modal(document.getElementById('editAccountModal'));
                editAccountModal.show();
            });
        });
        deleteStaff.forEach(function (e) {
            e.addEventListener('click', function () {
                // Get the values
                var StaffID = e.getAttribute('data-id');
                // Set the values
                document.getElementById('delete_staff_id').value = StaffID;
                // Show the modal
                var deleteAccountModal = new bootstrap.Modal(document.getElementById('deleteAccountModal'));
                deleteAccountModal.show();
            });
        });
    });
</script>
</body>

</html>