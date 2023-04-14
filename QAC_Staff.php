<?php
include("connection.php");
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/favicon.ico">
    <!-- fontawesome   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Quality Assurance Coordinator</title>
</head>

<body class="bg-gray">
<!--============ Header =========-->
<?php
include 'header.php';
?>

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
                                <p class="m-0"><?php echo $_SESSION['full_name']; ?></p>
                            </div>
                        </a>
                    </li>
                    <!-- top 1 -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="QAM_Topics.php" class="d-flex align-items-center text-decoration-none text-dark"
                           id="manage-topics">
                            <div class="p-2">
                                <i class="fa-solid fa-bars-progress topic-icon active" style="font-size: 35px;"></i>
                            </div>
                            <div>
                                <p class="m-0" style="padding-left: 10px;" id="manage-topics-text">Staffs Management</p>
                            </div>
                        </a>
                    </li>

                    <!-- top 2 -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="QAC_Topic.php" class="d-flex align-items-center text-decoration-none text-dark"
                           id="manage-topics">
                            <div class="p-2">
                                <i class="fa-solid fa-bars-progress topic-icon " style="font-size: 35px;"></i>
                            </div>
                            <div>
                                <p class="m-0" style="padding-left: 10px;">Topics</p>
                            </div>
                        </a>
                    </li>

                    <hr class="m-0"/>
                </ul>
            </div>
        </div>
        <?php

        // Get the staffs data from the database where section is Session department_id when i save in login page
        $id = $_SESSION['department_id'];
        $sql = "SELECT Staff.*, Role.RoleName, Department.DepartmentName FROM Staff JOIN Role ON Staff.RoleID = Role.RoleID JOIN Department ON Staff.DepartmentID = Department.DepartmentID WHERE Staff.DepartmentID = '$id'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        ?>

        <!-- ================= Timeline ================= -->
        <div class="col-12 col-lg-12">
            <div class="d-flex flex-column justify-content-center mx-auto main-container">
                <h1>Your Staffs Management</h1>
                <?php if (mysqli_num_rows($result) > 0) { ?>
                <!-- Department Table -->
                <div class="bg-light">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Department</th>
                        </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tbody>
                            <tr>
                                <td><?php echo $row['StaffID']; ?></td>
                                <td><?php echo $row['FullName']; ?></td>
                                <td><?php echo $row['Email']; ?></td>
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
                                <td><?php echo $row['DepartmentName']; ?></td>
                            </tr>

                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</div>

<!--============ Footer =========-->
<?php
include 'footer.php';
?>


<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<!-- main js -->
<script src="./js/main.js"></script>
</body>

</html>