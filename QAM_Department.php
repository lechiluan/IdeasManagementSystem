<?php
include("connection.php");
session_start(); // Start the session
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
} else {
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
              integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
              crossorigin="anonymous">
        <!-- main css -->
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <title>Quality Assurance Manager</title>
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
                            <a href="Settings.php" class="d-flex align-items-center text-decoration-none text-dark">
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
                                    <i class="fa-solid fa-bars-progress topic-icon" style="font-size: 35px;"></i>
                                </div>
                                <div>
                                    <p class="m-0" style="padding-left: 10px;">Manage Topics</p>
                                </div>
                            </a>
                        </li>

                        <!-- top 2 -->
                        <li class="dropdown-item p-1 rounded">
                            <a href="#" class="d-flex align-items-center text-decoration-none text-dark"
                               id="manage-topics">
                                <div class="p-2">
                                    <i class="fa-solid fa-bars-progress topic-icon active" style="font-size: 35px;"></i>
                                </div>
                                <div>
                                    <p class="m-0" style="padding-left: 10px;" id="manage-topics-text">Manage
                                        Departments</p>
                                </div>
                            </a>
                        </li>

                        <!-- top 3 -->
                        <li class="dropdown-item p-1 rounded">
                            <a href="QAM_Account.php" class="d-flex align-items-center text-decoration-none text-dark"
                               id="manage-topics">
                                <div class="p-2">
                                    <i class="fa-solid fa-bars-progress topic-icon" style="font-size: 35px;"></i>
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
                    <h1>Manage Departments</h1>
                    <!-- Create Department -->
                    <div class="d-flex justify-content-end align-items-center my-4">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createDepartmentModal">
                            <i class="fas fa-plus-circle"></i> Create Department
                        </button>
                    </div>

                    <!-- Create Department Modal -->
                    <div class="modal fade" id="createDepartmentModal" tabindex="-1"
                         aria-labelledby="createDepartmentModalLabel"
                         aria-hidden="true" data-bs-backdrop="false">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="createDepartmentModalLabel">Create New Department</h5>
                                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="QAM_Department.php">
                                        <div class="mb-3">
                                            <label for="departmentName" class="form-label text-primary">Department
                                                Name:</label>
                                            <input type="text" class="form-control" id="departmentName"
                                                   name="departmentName" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary w-100" name="add">Create
                                                Department
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    include("connection.php");
                    if (isset($_POST['add'])) {
                        $department_name = $_POST['departmentName'];
                        $sql = "INSERT INTO Department (DepartmentName) VALUES ('$department_name')";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            echo "<script>alert('Department added successfully!')</script>";
                            echo "<script>window.location.href='QAM_Department.php'</script>";
                        } else {
                            echo "<script>alert('Department added failed!')</script>";
                            echo "<script>window.location.href='QAM_Department.php'</script>";
                        }
                    }
                    ?>
                    <?php include_once("connection.php"); ?>

                    <?php $sql = "SELECT * FROM Department";
                    $result = mysqli_query($conn, $sql); ?>

                    <?php if (mysqli_num_rows($result) > 0) : ?>

                    <!-- Department Table -->
                    <div class="bg-light p-3">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Department Name</th>
                                <th>Account Count</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                <tbody>
                                <tr>
                                    <td><?php echo $row['DepartmentID']; ?></td>
                                    <td><?php echo $row['DepartmentName']; ?></td>
                                    <td><?php
                                        $department_id = $row['DepartmentID'];
                                        $sql = "SELECT COUNT(*) AS count FROM Staff WHERE DepartmentID = '$department_id'";
                                        $result2 = mysqli_query($conn, $sql);
                                        $row2 = mysqli_fetch_assoc($result2);
                                        echo $row2['count'];
                                        ?>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary" data-bs-toggle="modal"
                                                id="edit-department"
                                                data-id="<?php echo $row['DepartmentID']; ?>"
                                                data-name="<?php echo $row['DepartmentName']; ?>"
                                                data-toggle="modal"
                                                data-bs-target="#editDepartmentModal"><i class="fas fa-edit"></i> Edit
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            <?php endwhile; ?>
                        </table>
                        <?php else : ?>
                            <p>No departments found.</p>
                        <?php endif; ?>

                        <?php
                        include("connection.php");
                        if (isset($_POST['edit'])) {
                            $department_id = $_POST['editDepartmentID'];
                            $department_name = $_POST['editDepartmentName'];
                            $sql = "UPDATE Department SET DepartmentName = '$department_name' WHERE DepartmentID = '$department_id'";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                echo "<script>alert('Department updated successfully')</script>";
                                echo "<script>window.location.href='QAM_Department.php'</script>";
                            } else {
                                echo "<script>alert('Error updating department')</script>";
                                echo "<script>window.location.href='QAM_Department.php'</script>";
                            }
                        }
                        ?>
                        <!-- Edit Department Modal -->
                        <div class="modal fade" id="editDepartmentModal" tabindex="-1"
                             aria-labelledby="editDepartmentModalLabel"
                             aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="editDepartmentModalLabel">Edit Department</h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="QAM_Department.php">
                                            <div class="mb-3">
                                                <input type="hidden" name="editDepartmentID" id="editDepartmentID">
                                                <label for="editDepartmentName" class="form-label text-primary">Department
                                                    Name:</label>
                                                <input type="text" class="form-control" id="editDepartmentName"
                                                       name="editDepartmentName" required>
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
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Code to update house modal-->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            //NOTE: passing value to update house modal
            var editRole = document.querySelectorAll('#edit-department');
            editRole.forEach(function (e) {
                e.addEventListener('click', function () {
                    // Get the values from the data attributes
                    var DepartmentID = e.getAttribute('data-id');
                    var DepartmentName = e.getAttribute('data-name');
                    // Set the values in the input fields
                    document.getElementById('editDepartmentID').value = DepartmentID;
                    document.getElementById('editDepartmentName').value = DepartmentName;

                    // Show the modal
                    var editDepartmentModal = new bootstrap.Modal(document.getElementById('editDepartmentModal'));
                    editDepartmentModal.show();
                });
            });
        });
    </script>
    </body>

    </html>
<?php } ?>