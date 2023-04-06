<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/favicon.ico">
    <!-- fontawesome   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                            <div class="input-group-text bg-gray border-0 rounded-pill" style="min-height: 40px; min-width: 300px;">
                                <i class="fas fa-search me-2 text-muted"></i>
                                <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Search Ideas ..." id="searchInput">
                                <button class="btn btn-outline-secondary border-0 rounded-circle" type="button" id="clearSearch"><i class="fas fa-times"></i></button>
                            </div>
                        </li>
                    </div>
                </div>
                <script>
                    // Clear search input when X button is clicked
                    document.getElementById('clearSearch').addEventListener('click', function() {
                        document.getElementById('searchInput').value = '';
                    });
                </script>
                <!-- menus -->
                <div class="col d-flex align-items-center justify-content-end">
                    <!-- notifications -->
                    <div class="rounded-circle p-1 bg-gray d-flex align-items-center justify-content-center mx-2" style="width: 38px; height: 38px" type="button" id="notMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="fas fa-bell"></i>
                    </div>
                    <!-- notification dd -->
                    <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="notMenu" style="width: 23em; max-height: 600px; overflow-y: auto">
                        <!-- header -->
                        <li class="p-1">
                            <div class="d-flex justify-content-between">
                                <h2>Notifications</h2>
                                <div>
                                    <i class="fas fa-ellipsis-h pointer p-2 rounded-circle bg-gray" type="button" data-bs-toggle="dropdown"></i>
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
                            <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-evenly
                    text-decoration-none text-dark
                  ">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
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
                            <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-evenly
                    text-decoration-none text-dark
                  ">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
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
                            <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-evenly
                    text-decoration-none text-dark
                  ">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
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
                    " style="width: 38px; height: 38px" type="button" id="secondMenu" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="fas fa-caret-down"></i>
                    </div>
                    <!-- sec dd -->
                    <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="secMenu" style="width: 23em;max-height: 600px;">
                        <!-- avatar -->
                        <li class="dropdown-item p-1 rounded d-flex" type="button">
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover;">
                            <div>
                                <p class="m-0"></p>
                                <p class="m-0 text-muted">My Profile</p>
                            </div>
                        </li>
                        <hr />
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
                        <hr />
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
                <div class="d-none d-xxl-block h-100 fixed-top overflow-hidden scrollbar" style="max-width: 360px; width: 100%; z-index: 4">
                    <ul class="navbar-nav mt-4 ms-3 d-flex flex-column pb-5 mb-5" style="padding-top: 56px">
                        <!-- top -->
                        <!-- avatar -->
                        <li class="dropdown-item p-1 rounded">
                            <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                                <div class="p-2">
                                    <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="m-0">Quality Assurance Manager</p>
                                </div>
                            </a>
                        </li>

                        <!-- top 1 -->
                        <li class="dropdown-item p-1 rounded">
                            <a href="#" class="d-flex align-items-center text-decoration-none text-dark" id="manage-topics">
                                <div class="p-2">
                                    <i class="fa-solid fa-bars-progress topic-icon active" style="font-size: 35px;"></i>
                                </div>
                                <div>
                                    <p class="m-0" style="padding-left: 10px;" id="manage-topics-text">Manage Topics</p>
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
                            <a href="QAM_Account.php" class="d-flex align-items-center text-decoration-none text-dark" id="manage-topics">
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
                            <a href="QAM_Role.php" class="d-flex align-items-center text-decoration-none text-dark" id="manage-topics">
                                <div class="p-2">
                                    <i class="fa-solid fa-bars-progress topic-icon" style="font-size: 35px;"></i>
                                </div>
                                <div>
                                    <p class="m-0" style="padding-left: 10px; ">Manage Role</p>
                                </div>
                            </a>
                        </li>

                        <hr class="m-0" />
                    </ul>
                </div>
            </div>

            <!-- ================= Timeline ================= -->
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center mx-auto main-container">
                    <h1>Manage Topics</h1>

                    <!-- Topic 1 -->
                    <div class="d-flex justify-content-end align-items-center my-4">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTopicModal">
                            <i class="fas fa-plus-circle"></i> Create New Topic</button>
                    </div>
                    <?php
                    // add topic
                    include 'connection.php';
                    if (isset($_POST['add'])) {
                        $topicName = $_POST['topicName'];
                        // Check topic name is exist
                        $sql = "SELECT * FROM Topic WHERE TopicName = '$topicName'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            echo "<script>alert('Topic name is already exist')</script>";
                        } else {
                            $topicDescription = $_POST['topicDescription'];
                            $sql = "INSERT INTO Topic (TopicName, Description) VALUES ('$topicName', '$topicDescription')";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                echo "<script>alert('Topic added successfully')</script>";
                                echo "<script>window.location.href='QAM_Topic.php'</script>";
                            } else {
                                echo "<script>alert('Topic not added')</script>";
                                echo "<script>window.location.href='QAM_Topic.php'</script>";
                            }
                        }
                    }
                    ?>
                    <!-- Create Topic Modal -->
                    <div class="modal fade" id="createTopicModal" tabindex="-1" aria-labelledby="createTopicModalLabel" aria-hidden="true" data-bs-backdrop="false">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="createTopicModalLabel">Create New Topic</h5>
                                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="QAM_Topics.php">
                                        <div class="mb-3">
                                            <label for="topicName" class="form-label text-primary">Topic Name:</label>
                                            <input type="text" class="form-control" id="topicName" name="topicName" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="topicDescription" class="form-label text-primary">Topic
                                                Description:</label>
                                            <textarea class="form-control" id="topicDescription" name="topicDescription" rows="5" required></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary w-100" name="add">Create Topic</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form class="bg-light p-3">
                        <!-- Deadline -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="idea-submission-deadline" class="form-label font-weight-bold fs-4">Deadline
                                    for Idea Submission</label>
                                <div class="d-flex flex-column">
                                    <span class="deadline-time fs-5"><i class="far fa-clock"></i> 4 hours and 56 minutes
                                        left</span>
                                    <span class="deadline-status fs-5"><i class="fas fa-exclamation-circle text-danger"></i> The deadline has
                                        passed</span>
                                    <button class="btn btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#editDeadlineModal1" data-bs-title="Edit Deadline for Idea Submission"><i class="fas fa-edit"></i>
                                        Edit Deadline</button>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="comment-deadline" class="form-label font-weight-bold fs-4">Deadline to Close
                                    Comment</label>
                                <div class="d-flex flex-column">
                                    <span class="deadline-time fs-5"><i class="far fa-clock"></i> 2 days and 4 hours
                                        left</span>
                                    <span class="deadline-status fs-5"><i class="fas fa-clock text-success"></i> Open
                                        for comments</span>
                                    <button class="btn btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#editDeadlineModal2" data-bs-title="Edit Deadline to Close Comment"><i class="fas fa-edit"></i> Edit
                                        Deadline</button>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Deadline Modal -->
                        <div class="modal fade" id="editDeadlineModal1" tabindex="-1" aria-labelledby="editDeadlineModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="editDeadlineModalLabel">Deadline for Idea Submission
                                        </h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="newDeadlineTime" class="form-label text-primary">New
                                                    Deadline:</label>
                                                <input type="datetime-local" class="form-control" id="newDeadlineTime" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary w-100">Update Deadline</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editDeadlineModal2" tabindex="-1" aria-labelledby="editDeadlineModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="editDeadlineModalLabel">Deadline to Close Comment
                                        </h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="newDeadlineTime" class="form-label text-primary">New
                                                    Deadline:</label>
                                                <input type="datetime-local" class="form-control" id="newDeadlineTime" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary w-100">Update Deadline</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Topic list -->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Topic Name</th>
                                        <th scope="col">Topic Description</th>
                                        <th scope="col">Ideas Count</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Topic 1</td>
                                        <td>Description of Topic 1</td>
                                        <td>10</td>
                                        <td>Closed Submission</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary edit-deadline" data-bs-toggle="modal" data-bs-target="#editDeadlineModal">Edit Topic</button>
                                            <button class="btn btn-sm btn-danger delete-topic" data-bs-toggle="modal" data-bs-target="#deleteTopicModal">Delete</button>
                                            <button class="btn btn-sm btn-secondary view-ideas" onclick="window.location.href='QAM_Ideas.php'">View all ideas</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <!-- Edit Deadline Modal -->
                        <div class="modal fade" id="editDeadlineModal" tabindex="-1" aria-labelledby="editDeadlineModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="editDeadlineModalLabel">Edit Topic</h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="topicName" class="form-label text-primary">Topic Name:</label>
                                                <input type="text" class="form-control" id="topicName" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="topicDescription" class="form-label text-primary">Topic Description:</label>
                                                <textarea class="form-control" id="topicDescription" rows="5" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="deadlineFirst" class="form-label text-primary">Closing Date of First Deadline:</label>
                                                <input type="datetime-local" class="form-control" id="deadlineFirst" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="deadlineFinal" class="form-label text-primary">Closing Date of Final Deadline:</label>
                                                <input type="datetime-local" class="form-control" id="deadlineFinal" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary w-100">Save Topic</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Topic Modal -->
                        <div class="modal fade" id="deleteTopicModal" tabindex="-1" aria-labelledby="deleteTopicModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title" id="deleteTopicModalLabel">Delete Topic</h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this topic?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- topic 2 -->
                    <div class="d-flex justify-content-end align-items-center my-4" style="padding-top: 50px;">
                    </div>

                    <!-- Create Topic Modal -->
                    <div class="modal fade" id="createTopicModal" tabindex="-1" aria-labelledby="createTopicModalLabel" aria-hidden="true" data-bs-backdrop="false">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="createTopicModalLabel">Create New Topic</h5>
                                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="topicName" class="form-label text-primary">Topic Name:</label>
                                            <input type="text" class="form-control" id="topicName" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="topicDescription" class="form-label text-primary">Topic
                                                Description:</label>
                                            <textarea class="form-control" id="topicDescription" rows="5" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="deadlineFirst" class="form-label text-primary">Closing Date of First Deadline:</label>
                                            <input type="datetime-local" class="form-control" id="deadlineFirst" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="deadlineFinal" class="form-label text-primary">Closing Date of Final Deadline:</label>
                                            <input type="datetime-local" class="form-control" id="deadlineFinal" required>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary w-100">Create Topic</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form class="bg-light p-3">
                        <!-- Deadline -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="idea-submission-deadline" class="form-label font-weight-bold fs-4">Deadline
                                    for Idea Submission</label>
                                <div class="d-flex flex-column">
                                    <span class="deadline-time fs-5"><i class="far fa-clock"></i> 4 hours and 56 minutes
                                        left</span>
                                    <span class="deadline-status fs-5"><i class="fas fa-exclamation-circle text-danger"></i> The deadline has
                                        passed</span>
                                    <button class="btn btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#editDeadlineModal1" data-bs-title="Edit Deadline for Idea Submission"><i class="fas fa-edit"></i>
                                        Edit Deadline</button>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="comment-deadline" class="form-label font-weight-bold fs-4">Deadline to Close
                                    Comment</label>
                                <div class="d-flex flex-column">
                                    <span class="deadline-time fs-5"><i class="far fa-clock"></i> 2 days and 4 hours
                                        left</span>
                                    <span class="deadline-status fs-5"><i class="fas fa-clock text-success"></i> Open
                                        for comments</span>
                                    <button class="btn btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#editDeadlineModal2" data-bs-title="Edit Deadline to Close Comment"><i class="fas fa-edit"></i> Edit
                                        Deadline</button>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Deadline Modal -->
                        <div class="modal fade" id="editDeadlineModal1" tabindex="-1" aria-labelledby="editDeadlineModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="editDeadlineModalLabel">Deadline for Idea Submission
                                        </h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="newDeadlineTime" class="form-label text-primary">New
                                                    Deadline:</label>
                                                <input type="datetime-local" class="form-control" id="newDeadlineTime" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary w-100">Update Deadline</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editDeadlineModal2" tabindex="-1" aria-labelledby="editDeadlineModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="editDeadlineModalLabel">Deadline to Close Comment
                                        </h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="newDeadlineTime" class="form-label text-primary">New
                                                    Deadline:</label>
                                                <input type="datetime-local" class="form-control" id="newDeadlineTime" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary w-100">Update Deadline</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Topic list -->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Topic Name</th>
                                        <th scope="col">Topic Description</th>
                                        <th scope="col">Ideas Count</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Topic 1</td>
                                        <td>Description of Topic 1</td>
                                        <td>10</td>
                                        <td>Closed Submission</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary edit-deadline" data-bs-toggle="modal" data-bs-target="#editDeadlineModal">Edit Topic</button>
                                            <button class="btn btn-sm btn-danger delete-topic" data-bs-toggle="modal" data-bs-target="#deleteTopicModal">Delete</button>
                                            <button class="btn btn-sm btn-secondary view-ideas" onclick="window.location.href='QAM_Ideas.php'">View all ideas</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Edit Deadline Modal -->
                        <div class="modal fade" id="editDeadlineModal" tabindex="-1" aria-labelledby="editDeadlineModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="editDeadlineModalLabel">Edit Topic</h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="topicName" class="form-label text-primary">Topic Name:</label>
                                                <input type="text" class="form-control" id="topicName" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="topicDescription" class="form-label text-primary">Topic Description:</label>
                                                <textarea class="form-control" id="topicDescription" rows="5" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="deadlineFirst" class="form-label text-primary">Closing Date of First Deadline:</label>
                                                <input type="datetime-local" class="form-control" id="deadlineFirst" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="deadlineFinal" class="form-label text-primary">Closing Date of Final Deadline:</label>
                                                <input type="datetime-local" class="form-control" id="deadlineFinal" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary w-100">Save Topic</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Topic Modal -->
                        <div class="modal fade" id="deleteTopicModal" tabindex="-1" aria-labelledby="deleteTopicModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title" id="deleteTopicModalLabel">Delete Topic</h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this topic?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- topic 3 -->
                    <div class="d-flex justify-content-end align-items-center my-4" style="padding-top: 50px;">
                    </div>

                    <!-- Create Topic Modal -->
                    <div class="modal fade" id="createTopicModal" tabindex="-1" aria-labelledby="createTopicModalLabel" aria-hidden="true" data-bs-backdrop="false">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="createTopicModalLabel">Create New Topic</h5>
                                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="topicName" class="form-label text-primary">Topic Name:</label>
                                            <input type="text" class="form-control" id="topicName" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="topicDescription" class="form-label text-primary">Topic
                                                Description:</label>
                                            <textarea class="form-control" id="topicDescription" rows="5" required></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary w-100">Create Topic</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form class="bg-light p-3">
                        <!-- Deadline -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="idea-submission-deadline" class="form-label font-weight-bold fs-4">Deadline
                                    for Idea Submission</label>
                                <div class="d-flex flex-column">
                                    <span class="deadline-time fs-5"><i class="far fa-clock"></i> 4 hours and 56 minutes
                                        left</span>
                                    <span class="deadline-status fs-5"><i class="fas fa-exclamation-circle text-danger"></i> The deadline has
                                        passed</span>
                                    <button class="btn btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#editDeadlineModal1" data-bs-title="Edit Deadline for Idea Submission"><i class="fas fa-edit"></i>
                                        Edit Deadline</button>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="comment-deadline" class="form-label font-weight-bold fs-4">Deadline to Close
                                    Comment</label>
                                <div class="d-flex flex-column">
                                    <span class="deadline-time fs-5"><i class="far fa-clock"></i> 2 days and 4 hours
                                        left</span>
                                    <span class="deadline-status fs-5"><i class="fas fa-clock text-success"></i> Open
                                        for comments</span>
                                    <button class="btn btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#editDeadlineModal2" data-bs-title="Edit Deadline to Close Comment"><i class="fas fa-edit"></i> Edit
                                        Deadline</button>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Deadline Modal -->
                        <div class="modal fade" id="editDeadlineModal1" tabindex="-1" aria-labelledby="editDeadlineModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="editDeadlineModalLabel">Deadline for Idea Submission
                                        </h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="newDeadlineTime" class="form-label text-primary">New
                                                    Deadline:</label>
                                                <input type="datetime-local" class="form-control" id="newDeadlineTime" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary w-100">Update Deadline</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editDeadlineModal2" tabindex="-1" aria-labelledby="editDeadlineModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="editDeadlineModalLabel">Deadline to Close Comment
                                        </h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="newDeadlineTime" class="form-label text-primary">New
                                                    Deadline:</label>
                                                <input type="datetime-local" class="form-control" id="newDeadlineTime" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary w-100">Update Deadline</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Topic list -->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Topic Name</th>
                                        <th scope="col">Topic Description</th>
                                        <th scope="col">Ideas Count</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Topic 1</td>
                                        <td>Description of Topic 1</td>
                                        <td>10</td>
                                        <td>Closed Submission</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary edit-deadline" data-bs-toggle="modal" data-bs-target="#editDeadlineModal">Edit Topic</button>
                                            <button class="btn btn-sm btn-danger delete-topic" data-bs-toggle="modal" data-bs-target="#deleteTopicModal">Delete</button>
                                            <button class="btn btn-sm btn-secondary view-ideas" onclick="window.location.href='QAM_Ideas.php'">View all ideas</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Edit Deadline Modal -->
                        <div class="modal fade" id="editDeadlineModal" tabindex="-1" aria-labelledby="editDeadlineModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="editDeadlineModalLabel">Edit Topic</h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="topicName" class="form-label text-primary">Topic Name:</label>
                                                <input type="text" class="form-control" id="topicName" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="topicDescription" class="form-label text-primary">Topic Description:</label>
                                                <textarea class="form-control" id="topicDescription" rows="5" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="deadlineFirst" class="form-label text-primary">Closing Date of First Deadline:</label>
                                                <input type="datetime-local" class="form-control" id="deadlineFirst" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="deadlineFinal" class="form-label text-primary">Closing Date of Final Deadline:</label>
                                                <input type="datetime-local" class="form-control" id="deadlineFinal" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary w-100">Save Topic</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Topic Modal -->
                        <div class="modal fade" id="deleteTopicModal" tabindex="-1" aria-labelledby="deleteTopicModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title" id="deleteTopicModalLabel">Delete Topic</h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this topic?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

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
                    <div">
                        <p>
                            Privacy &#8226; Terms &#8226; Ideas Uni © 2024
                        </p>
                </div>
            </div>
        </div>
        </div>
    </footer>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- main js -->
    <script src="./js/main.js"></script>
</body>

</html>