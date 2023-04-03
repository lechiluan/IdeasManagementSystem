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
                                    <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle"
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
                                    <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle"
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
                                    <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle"
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
                                     class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover"/>
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
                        <a href="QAM_Department.php" class="d-flex align-items-center text-decoration-none text-dark" id="manage-topics">
                            <div class="p-2">
                                <i class="fa-solid fa-bars-progress topic-icon" style="font-size: 35px;"></i>
                            </div>
                            <div>
                                <p class="m-0" style="padding-left: 10px;">Manage Departments</p>
                            </div>
                        </a>
                    </li>

                    <!-- top 3 -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="QAM_Account.php" class="d-flex align-items-center text-decoration-none text-dark"
                           id="manage-topics">
                            <div class="p-2">
                                <i class="fa-solid fa-bars-progress topic-icon " style="font-size: 35px;"></i>
                            </div>
                            <div>
                                <p class="m-0" style="padding-left: 10px;">Manage Account</p>
                            </div>
                        </a>
                    </li>

                    <!-- top 4 -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="QAM_Role.php" class="d-flex align-items-center text-decoration-none text-dark"
                           id="manage-topics">
                            <div class="p-2">
                                <i class="fa-solid fa-bars-progress topic-icon active" style="font-size: 35px;"></i>
                            </div>
                            <div>
                                <p class="m-0" style="padding-left: 10px; " id="manage-topics-text">Manage Role</p>
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
                <h1>Manage Roles</h1>
                <!-- Create role -->
                <div class="d-flex justify-content-end align-items-center my-4">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createroleModal">
                        <i class="fas fa-plus-circle"></i> Create Role
                    </button>
                </div>

                <!-- Create role Modal -->
                <div class="modal fade" id="createroleModal" tabindex="-1" aria-labelledby="createroleModalLabel"
                     aria-hidden="true" data-bs-backdrop="false">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="createroleModalLabel">Create New Role</h5>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="QAM_Role.php">
                                    <div class="mb-3">
                                        <label for="roleName" class="form-label text-primary">Role Name:</label>
                                        <input type="text" class="form-control" id="roleName" name="role_name" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary w-100" name="add">Create role
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                // Add role
                include("connection.php");
                if (isset($_POST['add'])) {
                    $role_name = $_POST['role_name'];
                    $sql = "INSERT INTO Role (RoleName) VALUES ('$role_name')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "<script>alert('Role added successfully')</script>";
                        echo "<script>window.location.href='QAM_Role.php'</script>";
                    } else {
                        echo "<script>alert('Role added failed')</script>";
                        echo "<script>window.location.href='QAM_Role.php'</script>";
                    }
                }
                ?>

                <?php include_once("connection.php"); ?>

                <?php $sql = "SELECT * FROM Role";
                $result = mysqli_query($conn, $sql); ?>

                <?php if (mysqli_num_rows($result) > 0) : ?>

                <!-- role Table -->
                <div class="bg-light p-3">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Role Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <tbody>
                        <tr>
                            <td><?php echo $row['RoleID']; ?></td>
                            <td><?php echo $row['RoleName']; ?></td>
                            <td>
                                <button class="btn btn-outline-primary" id="edit-role"
                                        data-id="<?php echo $row['RoleID']; ?>"
                                        data-name="<?php echo $row['RoleName']; ?>" data-toggle="modal"
                                        data-target="#editroleModal"><i class="fas fa-edit"></i> Edit
                                </button>
                            </td>
                        </tr>
                        <?php endwhile; ?>

                        </tbody>
                    </table>
                    <?php else : ?>
                        <p>No roles found.</p>
                    <?php endif; ?>


                    <?php
                    // Edit role
                    if (isset($_POST["edit"])) {
                        $role_id = $_POST["edit_role_id"];
                        $role_name = $_POST["role_name"];
                        $sql = "UPDATE Role SET RoleName = '$role_name' WHERE RoleID = '$role_id'";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            echo "<script>alert('Role updated successfully')</script>";
                            echo "<script>window.location.href='QAM_Role.php'</script>";
                        } else {
                            echo "<script>alert('Error updating role')</script>";
                            echo "<script>window.location.href='QAM_Role.php'</script>";
                        }
                    }
                    ?>
                    <!-- Edit role Modal -->
                    <div class="modal fade" id="editroleModal" tabindex="-1" aria-labelledby="editroleModalLabel"
                         aria-hidden="true" data-bs-backdrop="false">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="editroleModalLabel">Edit Role</h5>
                                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="QAM_Role.php">
                                        <div class="mb-3">
                                            <input type="hidden" name="edit_role_id" id="edit_role_id">
                                            <label for="editroleName" class="form-label text-primary">Role Name:</label>
                                            <input type="text" class="form-control" id="editroleName" required
                                                   name="role_name">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary" name="edit">Save Changes
                                            </button>
                                        </div>
                                    </form>
                                </div>
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
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        //NOTE: passing value to update house modal
        var editRole = document.querySelectorAll('#edit-role');
        editRole.forEach(function (e) {
            e.addEventListener('click', function () {
                var RoleID = e.getAttribute('data-id');
                var RoleName = e.getAttribute('data-name');

                // Set the values in the input fields
                document.getElementById('edit_role_id').value = RoleID;
                document.getElementById('editroleName').value = RoleName;

                // Show the modal
                var editroleModal = new bootstrap.Modal(document.getElementById('editroleModal'));
                editroleModal.show();
            });
        });
    });
</script>

</body>

</html>