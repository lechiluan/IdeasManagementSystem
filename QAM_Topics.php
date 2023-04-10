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
    <style>
    </style>
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
                                     class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover"/>
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
                        <a href="QAM_Department.php" class="d-flex align-items-center text-decoration-none text-dark"
                           id="manage-topics">
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
                <h1>Manage Topics</h1>

                <!-- Topic 1 -->
                <div class="d-flex justify-content-end align-items-center my-4">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTopicModal" data-id
                    <i class="fas fa-plus-circle"></i> Create New Topic
                    </button>
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
                        // Create Date is current time
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $date = date('Y-m-d H:i:s');
                        $sql = "INSERT INTO Topic (TopicName, Description, CreateDate) VALUES ('$topicName', '$topicDescription', '$date')";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            echo "<script>alert('Topic added successfully')</script>";
                            echo "<script>window.location.href='QAM_Topics.php'</script>";
                        } else {
                            echo "<script>alert('Topic not added')</script>";
                            echo "<script>window.location.href='QAM_Topics.php'</script>";
                        }
                    }
                }
                ?>

                <!-- Create Topic Modal -->
                <div class="modal fade" id="createTopicModal" tabindex="-1" aria-labelledby="createTopicModalLabel"
                     aria-hidden="true" data-bs-backdrop="false">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="createTopicModalLabel">Create New Topic</h5>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="QAM_Topics.php">
                                    <div class="mb-3">
                                        <label for="topicName" class="form-label text-primary">Topic Name:</label>
                                        <input type="text" class="form-control" id="topicName" name="topicName"
                                               required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="topicDescription" class="form-label text-primary">Topic
                                            Description:</label>
                                        <textarea class="form-control" id="topicDescription" name="topicDescription"
                                                  rows="5" required></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary w-100" name="add">Create Topic
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                // Check if the form has been submitted
                if (isset($_POST['assign'])) {
                    // Get the selected topics from the hidden input field
                    $selectedTopics = $_POST['topicID'];

                    // Get the first and final closure dates from the form
                    $firstClosureDate = $_POST['firstClosureDate'];
                    $finalClosureDate = $_POST['finalClosureDate'];

                    // Convert the closure dates to MySQL datetime format
                    $firstClosureDate = date('Y-m-d H:i:s', strtotime($firstClosureDate));
                    $finalClosureDate = date('Y-m-d H:i:s', strtotime($finalClosureDate));

                    // Insert the closure dates into the Deadline table
                    $sql = "INSERT INTO Deadline (ClosureDate, FinalClosureDate) VALUES ('$firstClosureDate', '$finalClosureDate')";
                    $result = mysqli_query($conn, $sql);

                    // Get the ID of the newly inserted row
                    $deadlineID = mysqli_insert_id($conn);

                    foreach ($selectedTopics as $topic) {
                        // Update the selected topics with the new deadline ID
                        $sql = "UPDATE Topic SET DeadlineID=$deadlineID WHERE TopicID = ($topic)";
                        $result = mysqli_query($conn, $sql);
                    }

                    // Redirect to the topics page
                    echo "<script>window.location.href='QAM_Topics.php'</script>";
                }
                ?>
                <?php
                include 'connection.php';
                if (isset($_POST['assign'])) {
                    $topicID = $_POST['topicID'];
                    $sql = "DELETE FROM Topic WHERE TopicID = '$topicID'";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "<script>alert('Topic deleted successfully')</script>";
                        echo "<script>window.location.href='QAM_Topics.php'</script>";
                    } else {
                        echo "<script>alert('Topic not deleted')</script>";
                        echo "<script>window.location.href='QAM_Topics.php'</script>";
                    }
                }
                ?>

                <!-- Modal Assign Deadline -->
                <div class="modal fade" id="assignDeadlineModal" tabindex="-1"
                     aria-labelledby="assignDeadlineModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="assignDeadlineModalLabel">Assign deadline to topics</h5>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="QAM_Topics.php">
                                    <div id="section_topicID" class="mb-3">

                                    </div>

                                    <div class="mb-3">
                                        <label for="firstClosureDate" class="form-label text-primary">First closure
                                            date:</label>
                                        <input type="datetime-local" class="form-control" id="firstClosureDate"
                                               name="firstClosureDate" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="finalClosureDate" class="form-label text-primary">Final closure
                                            date:</label>
                                        <input type="datetime-local" class="form-control" id="finalClosureDate"
                                               name="finalClosureDate" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary" name="assign">Assign</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                // Display Topic Don't Have Deadline
                include 'connection.php';
                $sql = "SELECT * FROM Topic WHERE DeadlineID IS NULL";
                $result = mysqli_query($conn, $sql);
                ?>

                <!-- Topic list -->
                <div class="row mb-5 bg-white" style="margin-bottom: 10px;">

                    <div class="table-responsive">
                        <?php if (mysqli_num_rows($result) > 0) { ?>

                            <!-- Button Assign Deadline -->
                            <div class="d-flex justify-content-center align-items-center my-4 fs-4 font-weight-bold">Topics that have not been
                                set deadlines
                            </div>

                            <div class="d-flex justify-content-end align-items-center my-4" style="margin-right: 5px;">
                                <button class="btn btn-primary assign-deadline" id="assignBtn" data-bs-toggle="modal"
                                        data-bs-target="#assignDeadlineModal" disabled>Assign Deadline
                                </button>
                            </div>

                            <table class="table table-hover" id="nonAssignDeadline-table">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Topic Name</th>
                                    <th scope="col">Topic Description</th>
                                    <th scope="col">Create Date</th>
                                    <th scope="col">Ideas Count</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tbody>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input" name="selectedTopics[]"
                                                   id="checkRow"></td>
                                        <td hidden><?php echo $row['TopicID'] ?></td>
                                        <td><?php echo $row['TopicName']; ?></td>
                                        <td><?php echo $row['Description']; ?></td>
                                        <td><?php echo $row['CreateDate'] ?></td>
                                        <td>10</td>
                                        <td>Closed Submission</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary edit-deadline" data-bs-toggle="modal"
                                                    data-bs-target="#editDeadlineModal">Edit Topic
                                            </button>
                                            <button class="btn btn-sm btn-danger delete-topic" data-bs-toggle="modal"
                                                    data-bs-target="#deleteTopicModal">Delete
                                            </button>
                                            <button class="btn btn-sm btn-secondary view-ideas"
                                                    onclick="window.location.href='QAM_Ideas.php'">View all ideas
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                <?php } ?>
                            </table>
                        <?php } ?>
                    </div>
                </div>
                <!-- assignDeadlineModal -->

                <?php
                // Display Topic Don't Have Deadline
                include 'connection.php';
                $sql = "SELECT * FROM Deadline";
                $result = mysqli_query($conn, $sql);
                ?>
                <?php if (mysqli_num_rows($result) > 0) { ?>
                    <!-- Deadline -->
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                        <div class="row mb-5 bg-white" style="margin-bottom: 10px;">
                            <div class="col-md-6 mb-3">
                                <label for="idea-submission-deadline" class="form-label font-weight-bold fs-4">Deadline
                                    for Idea Submission</label>
                                <div class="d-flex flex-column">
                                            <span class="deadline-time fs-5"><i class="far fa-clock"></i> <?php echo $row['ClosureDate'] ?>
                                            </span>
                                    <span class="deadline-status fs-5"><i
                                            class="fas fa-exclamation-circle text-danger"></i> The deadline has
                                                passed</span>
                                    <button class="btn btn-outline-primary mt-2" data-bs-toggle="modal"
                                            data-bs-target="#editDeadlineModal1"
                                            data-bs-title="Edit Deadline for Idea Submission"><i
                                            class="fas fa-edit"></i>
                                        Edit Deadline
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="comment-deadline" class="form-label font-weight-bold fs-4">Deadline to Close
                                    Comment</label>
                                <div class="d-flex flex-column">
                                            <span class="deadline-time fs-5"><i class="far fa-clock"></i> <?php echo $row['FinalClosureDate'] ?>
                                            </span>
                                    <span class="deadline-status fs-5"><i class="fas fa-clock text-success"></i> Open
                                                for comments</span>
                                    <button class="btn btn-outline-primary mt-2" data-bs-toggle="modal"
                                            data-bs-target="#editDeadlineModal2"
                                            data-bs-title="Edit Deadline to Close Comment">
                                        <i class="fas fa-edit"></i> Edit
                                        Deadline
                                    </button>
                                </div>
                            </div>

                            <?php
                            include 'connection.php';
                            $sql = "SELECT * FROM Topic WHERE DeadlineID = $row[DeadlineID]";
                            $result2 = mysqli_query($conn, $sql);

                            ?>
                            <?php if (mysqli_num_rows($result2) > 0) { ?>

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
                                        <?php while ($row = mysqli_fetch_assoc($result2)) { ?>
                                            <tbody>
                                            <tr>
                                                <td><?php echo $row['TopicName']; ?></td>
                                                <td><?php echo $row['Description']; ?></td>
                                                <td>10</td>
                                                <td>Closed Submission</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary edit-deadline"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editDeadlineModal">Edit Topic
                                                    </button>
                                                    <button class="btn btn-sm btn-danger delete-topic"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteTopicModal">Delete
                                                    </button>
                                                    <button class="btn btn-sm btn-secondary view-ideas"
                                                            onclick="window.location.href='QAM_Ideas.php'">View all
                                                        ideas
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <?php } ?>

                <!-- Edit Deadline Modal -->
                <div class="modal fade" id="editDeadlineModal1" tabindex="-1" aria-labelledby="editDeadlineModalLabel"
                     aria-hidden="true" data-bs-backdrop="false">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="editDeadlineModalLabel">Deadline for Idea Submission
                                </h5>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
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

                <div class="modal fade" id="editDeadlineModal2" tabindex="-1" aria-labelledby="editDeadlineModalLabel"
                     aria-hidden="true" data-bs-backdrop="false">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="editDeadlineModalLabel">Deadline to Close Comment
                                </h5>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
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

                <!-- Edit Deadline Modal -->
                <div class="modal fade" id="editDeadlineModal" tabindex="-1" aria-labelledby="editDeadlineModalLabel"
                     aria-hidden="true" data-bs-backdrop="false">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="editDeadlineModalLabel">Edit Topic</h5>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
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
                                        <textarea class="form-control" id="topicDescription" rows="5"
                                                  required></textarea>
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
                <div class="modal fade" id="deleteTopicModal" tabindex="-1" aria-labelledby="deleteTopicModalLabel"
                     aria-hidden="true" data-bs-backdrop="false">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h5 class="modal-title" id="deleteTopicModalLabel">Delete Topic</h5>
                                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this topic?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel
                                </button>
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
<?php
include 'footer.php';
?>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<!-- main js -->
<script src="./js/main.js"></script>

<script>
    const checkboxes = document.querySelectorAll('#nonAssignDeadline-table input[type="checkbox"]');
    const assignBtn = document.querySelector('#assignBtn');

    function checkboxAssignButton() {
        const checked = Array.from(checkboxes).some(checkbox => checkbox.checked);
        assignBtn.disabled = !checked;
    }

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('click', checkboxAssignButton);
    });

    assignBtn.addEventListener('click', () => {
        const sectionTopicID = document.getElementById('section_topicID');
        sectionTopicID.innerHTML = '';


        Array.from(checkboxes).forEach(checkbox => {
            if (checkbox.checked) {
                const row = checkbox.closest('tr');
                const topicID = row.querySelector('td:nth-child(2)').innerText;
                // const topicName = row.querySelector('td:nth-child(4)').innerText;

                sectionTopicID.innerHTML += `<input type="hidden" name="topicID[]" value="${topicID}">`;
            }
        });

    });
</script>
</body>

</html>