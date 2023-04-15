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
                                    <i class="fa-solid fa-bars-progress topic-icon active" style="font-size: 35px;"></i>
                                </div>
                                <div>
                                    <p class="m-0" style="padding-left: 10px;" id="manage-topics-text">Manage Topics</p>
                                </div>
                            </a>
                        </li>

                        <!-- top 2 -->
                        <li class="dropdown-item p-1 rounded">
                            <a href="QAM_Department.php"
                               class="d-flex align-items-center text-decoration-none text-dark"
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
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTopicModal"
                                data-id
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
                    include 'connection.php';
                    // Edit Topic
                    if (isset($_POST['edit-topic'])) {
                        $TopicID = $_POST['Edit-TopicID'];
                        $TopicName = $_POST['topicName'];
                        $TopicDescription = $_POST['topicDescription'];
                        // Check Topic Name is exist
                        $sql = "SELECT * FROM Topic WHERE TopicName = '$TopicName' AND TopicID != '$TopicID'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            echo "<script>alert('Topic name is already exist')</script>";
                        } else {
                            $sql = "UPDATE Topic SET TopicName = '$TopicName', Description = '$TopicDescription' WHERE TopicID = '$TopicID'";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                echo "<script>alert('Topic updated successfully')</script>";
                                echo "<script>window.location.href='QAM_Topics.php'</script>";
                            } else {
                                echo "<script>alert('Topic not updated')</script>";
                                echo "<script>window.location.href='QAM_Topics.php'</script>";
                            }
                        }
                    }
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
                        // Check if the final closure date is before the first closure date


                        // Check if the final closure date is before the current date
                        if ($finalClosureDate < $firstClosureDate) {
                            echo "<script>alert('The final closure date must be after the first closure date')</script>";
                            echo "<script>window.location.href='QAM_Topics.php'</script>";
                        } else if ($finalClosureDate < date('Y-m-d H:i:s')) {
                            // Check if the final closure date is before the current date
                            echo "<script>alert('The final closure date must be after the current date')</script>";
                            echo "<script>window.location.href='QAM_Topics.php'</script>";
                        } else if ($firstClosureDate < date('Y-m-d H:i:s')) {
                            // Check if the first closure date is before the current date
                            echo "<script>alert('The first closure date must be after the current date')</script>";
                            echo "<script>window.location.href='QAM_Topics.php'</script>";
                        } else if ($firstClosureDate > $finalClosureDate) {
                            // Check if the first closure date is before the final closure date
                            echo "<script>alert('The first closure date must be before the final closure date')</script>";
                            echo "<script>window.location.href='QAM_Topics.php'</script>";
                        } else {
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
                            echo "<script>alert('Deadline assigned successfully')</script>";
                            echo "<script>window.location.href='QAM_Topics.php'</script>";
                        }
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
                                    <form method="post" action="QAM_Topics.php" id="assignDeadlineModalForm">
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary" name="assign"
                                                    onclick="validateDate()">Assign
                                            </button>
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
                    <?php if (mysqli_num_rows($result) > 0) { ?>
                        <!-- Topic list -->
                        <div class="row mb-5 bg-white" style="margin-bottom: 10px;">
                            <div class="table-responsive">
                                <!-- Button Assign Deadline -->
                                <div
                                    class="d-flex justify-content-center align-items-center my-4 fs-4 font-weight-bold">
                                    Topics that have not been
                                    set deadlines
                                </div>

                                <div class="d-flex justify-content-end align-items-center my-4"
                                     style="margin-right: 5px;">
                                    <button class="btn btn-primary assign-deadline" id="assignBtn"
                                            data-bs-toggle="modal"
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
                                            <td>
                                                <button class="btn btn-sm btn-primary edit-deadline"
                                                        data-bs-toggle="modal"
                                                        id="editTopic"
                                                        data-bs-target="#editTopicModal"
                                                        data-id="<?php echo $row['TopicID'] ?>"
                                                        data-name="<?php echo $row['TopicName'] ?>"
                                                        data-description="<?php echo $row['Description'] ?>"
                                                >Edit Topic
                                                </button>
                                                <?php
                                                // assume $row['TopicID'] contains the ID of the topic being checked
                                                // you also need to query the database to check if the topic has any ideas
                                                $query = "SELECT COUNT(*) FROM Idea WHERE TopicID = ?";
                                                $stmt = $conn->prepare($query);
                                                $stmt->bind_param("i", $row['TopicID']);
                                                $stmt->execute();
                                                $stmt->bind_result($idea_count);
                                                $stmt->fetch();
                                                $stmt->close();

                                                ?>

                                                <button class="btn btn-sm btn-danger delete-topic"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteTopicModal" id="deleteTopic"
                                                        data-id-delete="<?php echo $row['TopicID'] ?>" <?php if ($idea_count != 0) echo 'disabled'; ?>>
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    <?php } ?>
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
                                            <span class="deadline-time fs-5"><i
                                                    class="far fa-clock"></i><strong> <?php echo $row['ClosureDate'] ?></strong> -
                                                <?php
                                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                                $currentDate = date("Y-m-d H:i:s");
                                                $date1 = new DateTime($currentDate);
                                                $date2 = new DateTime($row['ClosureDate']);
                                                $interval = $date1->diff($date2);
                                                $interval->format('%a days %h hours %i minutes');
                                                // Check if the deadline has passed
                                                if ($currentDate < $row['ClosureDate']) {
                                                    echo '<span class="badge bg-success">' . $interval->format('%a days %h hours %i minutes') . '</span>';
                                                } else {
                                                    echo '<span class="badge bg-danger">Closed</span>';
                                                }
                                                ?>
                                            </span>
                                        <button class="btn btn-outline-primary mt-2" data-bs-toggle="modal"
                                                id="editDeadline1"
                                                data-bs-target="#editDeadlineModal1"
                                                data-bs-title="Edit Deadline for Idea Submission"
                                                data-id-1="<?php echo $row['DeadlineID'] ?>"
                                                data-closuredate="<?php echo $row['ClosureDate'] ?>">
                                            <i class="fas fa-edit"></i>
                                            Edit Deadline
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="comment-deadline" class="form-label font-weight-bold fs-4">Deadline to
                                        Close
                                        Comment</label>
                                    <div class="d-flex flex-column">
                                            <span class="deadline-time fs-5"><i
                                                    class="far fa-clock"></i><strong><?php echo $row['FinalClosureDate'] ?></strong> -
                                                <?php
                                                // Cal Time Left
                                                $date1 = new DateTime($row['FinalClosureDate']);
                                                $date2 = new DateTime(date("Y-m-d H:i:s"));
                                                $interval = $date1->diff($date2);
                                                $timeLeft = $interval->format('%a days, %h hours, %i minutes');
                                                // Check Time Left is passed
                                                if ($timeLeft < 0) {
                                                    echo '<span class="badge bg-danger">Closed</span>';
                                                } else {
                                                    echo '<span class="badge bg-success">' . $timeLeft . '</span>';
                                                }
                                                ?>
                                            </span>
                                        <button class="btn btn-outline-primary mt-2" data-bs-toggle="modal"
                                                id="editDeadline2"
                                                data-bs-target="#editDeadlineModal2"
                                                data-bs-title="Edit Deadline to Close Comment"
                                                data-id-2="<?php echo $row['DeadlineID'] ?>"
                                                data-finalclosuredate="<?php echo $row['FinalClosureDate'] ?>">
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
                                                <th scope="col">Created Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <?php while ($row = mysqli_fetch_assoc($result2)) { ?>
                                                <tbody>
                                                <tr>
                                                    <td><?php echo $row['TopicName']; ?></td>
                                                    <td><?php echo $row['Description']; ?></td>
                                                    <td><?php
                                                        include 'connection.php';
                                                        $sql = "SELECT COUNT(*) AS total FROM Idea WHERE TopicID = $row[TopicID]";
                                                        $result3 = mysqli_query($conn, $sql);
                                                        $row2 = mysqli_fetch_assoc($result3);
                                                        echo $row2['total'];
                                                        ?></td>
                                                    <td>
                                                        <?php
                                                        include 'connection.php';
                                                        // Check if ClosureDate is passed display status is Closed Submission, If FinalClosureDate is passed display status is Closed Comment
                                                        $sql = "SELECT * FROM Deadline WHERE DeadlineID = $row[DeadlineID]";
                                                        $result4 = mysqli_query($conn, $sql);
                                                        $row3 = mysqli_fetch_assoc($result4);
                                                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                                                        $currentDate = date("Y-m-d H:i:s");

                                                        if ($currentDate > $row3['ClosureDate'] && $currentDate < $row3['FinalClosureDate']) {
                                                            echo '<span class="badge bg-warning">Closed Submission</span>';
                                                        } else if ($currentDate > $row3['FinalClosureDate'] && $currentDate > $row3['ClosureDate']) {
                                                            echo '<span class="badge bg-danger">Closed Comment</span>';
                                                        } else {
                                                            echo '<span class="badge bg-success">Open</span>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $row['CreateDate']; ?></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary edit-deadline"
                                                                data-bs-toggle="modal" id="editTopic"
                                                                data-bs-target="#editTopicModal"
                                                                data-id="<?php echo $row['TopicID'] ?>"
                                                                data-name="<?php echo $row['TopicName'] ?>"
                                                                data-description="<?php echo $row['Description'] ?>"
                                                        >Edit Topic
                                                        </button>
                                                        <?php
                                                        // assume $row['TopicID'] contains the ID of the topic being checked
                                                        // you also need to query the database to check if the topic has any ideas
                                                        $query = "SELECT COUNT(*) FROM Idea WHERE TopicID = ?";
                                                        $stmt = $conn->prepare($query);
                                                        $stmt->bind_param("i", $row['TopicID']);
                                                        $stmt->execute();
                                                        $stmt->bind_result($idea_count);
                                                        $stmt->fetch();
                                                        $stmt->close();

                                                        ?>
                                                        <button class="btn btn-sm btn-danger delete-topic"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteTopicModal" id="deleteTopic"
                                                                data-id-delete="<?php echo $row['TopicID'] ?>" <?php if ($idea_count != 0) echo 'disabled'; ?>>
                                                            Delete
                                                        </button>
                                                        <a class="btn btn-sm btn-success view-ideas"
                                                           href="QAM_Ideas.php?topic=<?php echo $row['TopicID'] ?>">View
                                                            Ideas</a>
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

                    <?php
                    include 'connection.php';
                    if (isset($_POST['update-deadline-1'])) {
                        $DeadlineID = $_POST['Edit-DeadlineID-1'];
                        // Get new deadline time
                        $newDeadlineTime1 = $_POST['newDeadlineTime1'];
                        $newDeadlineTime1 = date('Y-m-d H:i:s', strtotime($newDeadlineTime1));

                        // Check if the new deadline time is earlier than the final closure date
                        $sql = "SELECT * FROM Deadline WHERE DeadlineID = $DeadlineID";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $finalClosureDate = $row['FinalClosureDate'];
                        if ($newDeadlineTime1 > $finalClosureDate) {
                            echo "<script>alert('The new deadline time must be earlier than the final closure date!')</script>";
                            echo "<script>window.location.href='QAM_Topics.php'</script>";
                            exit();
                        } else {
                            $sql = "UPDATE Deadline SET ClosureDate = '$newDeadlineTime1' WHERE DeadlineID = $DeadlineID";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                echo "<script>alert('Closure Date updated successfully!')</script>";
                                echo "<script>window.location.href='QAM_Topics.php'</script>";
                            } else {
                                echo "<script>alert('Failed to update deadline!')</script>";
                                echo "<script>window.location.href='QAM_Topics.php'</script>";
                            }
                        }
                    }

                    if (isset($_POST['update-deadline-2'])) {
                        $DeadlineID = $_POST['Edit-DeadlineID-2'];
                        // Get new deadline time
                        $newDeadlineTime2 = $_POST['newDeadlineTime2'];
                        $newDeadlineTime2 = date('Y-m-d H:i:s', strtotime($newDeadlineTime2));
                        // Check if the new deadline time is earlier than the final closure date
                        $sql = "SELECT * FROM Deadline WHERE DeadlineID = $DeadlineID";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $closureDate = $row['ClosureDate'];
                        if ($newDeadlineTime2 < $closureDate) {
                            echo "<script>alert('The new deadline time must be later than the closure date!')</script>";
                            echo "<script>window.location.href='QAM_Topics.php'</script>";
                            exit();
                        } else {
                            $sql = "UPDATE Deadline SET FinalClosureDate = '$newDeadlineTime2' WHERE DeadlineID = $DeadlineID";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                echo "<script>alert('Final Closure Date updated successfully!')</script>";
                                echo "<script>window.location.href='QAM_Topics.php'</script>";
                            } else {
                                echo "<script>alert('Failed to update deadline!')</script>";
                                echo "<script>window.location.href='QAM_Topics.php'</script>";
                            }
                        }
                    }
                    ?>

                    <!-- Edit Deadline Modal 1-->
                    <div class="modal fade" id="editDeadlineModal1" tabindex="-1"
                         aria-labelledby="editDeadlineModalLabel"
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
                                    <form action="QAM_Topics.php" method="post">
                                        <div class="mb-3">
                                            <input type="hidden" name="Edit-DeadlineID-1" id="Edit-DeadlineID-1">
                                            <label for="newDeadlineTime" class="form-label text-primary">New
                                                Deadline:</label>
                                            <input type="datetime-local" class="form-control" id="newDeadlineTime1"
                                                   name="newDeadlineTime1"
                                                   required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary w-100"
                                                    name="update-deadline-1">
                                                Update Deadline
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Deadline Modal 2-->
                    <div class="modal fade" id="editDeadlineModal2" tabindex="-1"
                         aria-labelledby="editDeadlineModalLabel"
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
                                    <form action="QAM_Topics.php" method="post">
                                        <div class="mb-3">
                                            <input type="hidden" name="Edit-DeadlineID-2" id="Edit-DeadlineID-2">
                                            <label for="newDeadlineTime" class="form-label text-primary">New
                                                Deadline:</label>
                                            <input type="datetime-local" class="form-control" id="newDeadlineTime2"
                                                   name="newDeadlineTime2"
                                                   required>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary w-100"
                                                        name="update-deadline-2">Update Deadline
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Topic Modal -->
                    <div class="modal fade" id="editTopicModal" tabindex="-1" aria-labelledby="editDeadlineModalLabel"
                         aria-hidden="true" data-bs-backdrop="false">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="editDeadlineModalLabel">Edit Topic</h5>
                                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="QAM_Topics.php" method="post">
                                        <input type="hidden" name="Edit-TopicID" id="edit-TopicID">
                                        <div class="mb-3">
                                            <label for="topicName" class="form-label text-primary">Topic Name:</label>
                                            <input type="text" class="form-control" id="edit-topicName" name="topicName"
                                                   required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="topicDescription" class="form-label text-primary">Topic
                                                Description:</label>
                                            <textarea class="form-control" id="edit-topicDescription" rows="5"
                                                      name="topicDescription"
                                                      required></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary w-100" name="edit-topic">Save
                                                Topic
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    // Delete Topic
                    include 'connection.php';
                    if (isset($_POST['delete'])) {
                        $topicID = $_POST['Delete-TopicID'];
                        // Check if deadline have only one topic left in the database before deleting it
                        $sql = "SELECT * FROM `topic` WHERE `TopicID` = '$topicID'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $deadlineID = $row['DeadlineID'];
                        $sql = "SELECT * FROM `topic` WHERE `DeadlineID` = '$deadlineID'";
                        $result = mysqli_query($conn, $sql);
                        $num = mysqli_num_rows($result);
                        if ($num == 1) {
                            $sql = "DELETE FROM `topic` WHERE `TopicID` = '$topicID'";
                            $result1 = mysqli_query($conn, $sql);
                            $sql = "DELETE FROM `deadline` WHERE `DeadlineID` = '$deadlineID'";
                            $result2 = mysqli_query($conn, $sql);
                            if ($result1 && $result2) {
                                echo '<script>alert("Topic Deleted Successfully")</script>';
                                echo '<script>window.location.href = "QAM_Topics.php"</script>';
                            } else {
                                echo '<script>alert("Topic Deleted Failed")</script>';
                                echo '<script>window.location.href = "QAM_Topics.php"</script>';
                            }
                        }
                        $sql = "DELETE FROM `topic` WHERE `TopicID` = '$topicID'";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            echo '<script>alert("Topic Deleted Successfully")</script>';
                            echo '<script>window.location.href = "QAM_Topics.php"</script>';
                        } else {
                            echo '<script>alert("Topic Deleted Failed")</script>';
                            echo '<script>window.location.href = "QAM_Topics.php"</script>';
                        }
                    }
                    ?>
                    <!-- Delete Topic Modal -->
                    <div class="modal fade" id="deleteTopicModal" tabindex="-1" aria-labelledby="deleteTopicModalLabel"
                         aria-hidden="true" data-bs-backdrop="false">
                        <div class="modal-dialog modal-dialog-centered">
                            <form action="QAM_Topics.php" method="post">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title" id="deleteTopicModalLabel">Delete Topic</h5>
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <input type="hidden" name="Delete-TopicID" id="delete-TopicID">
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this topic?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel
                                        </button>
                                        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
        function validateDate() {
            const closureDate = new Date(document.getElementById("firstClosureDate").value);
            const finalClosureDate = new Date(document.getElementById("finalClosureDate").value);
            const currentDateTime = new Date().toLocaleString("en-US", {timeZone: "Asia/Ho_Chi_Minh"});
            const currentDate = new Date(currentDateTime);

            if (closureDate <= currentDate) {
                document.getElementById("firstClosureDate").setCustomValidity("Closure date must be greater than the current date");
            } else if (finalClosureDate <= currentDate) {
                document.getElementById("finalClosureDate").setCustomValidity("Final closure date must be greater than the current date");
            } else if (finalClosureDate <= closureDate) {
                document.getElementById("finalClosureDate").setCustomValidity("Final closure date must be greater than the closure date");
            } else {
                document.getElementById("firstClosureDate").setCustomValidity("");
                document.getElementById("finalClosureDate").setCustomValidity("");
                document.getElementById("assignDeadlineModalForm").submit();
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var editDeadline1 = document.querySelectorAll('#editDeadline1');

            editDeadline1.forEach(function (e) {
                e.addEventListener('click', function () {
                    var ClosureDate = e.getAttribute('data-closuredate');
                    var DeadlineID = e.getAttribute('data-id-1');

                    // Set the values in the input fields
                    document.getElementById('Edit-DeadlineID-1').value = DeadlineID;
                    document.getElementById('newDeadlineTime1').value = ClosureDate;
                });
            });

            var editDeadline2 = document.querySelectorAll('#editDeadline2');

            editDeadline2.forEach(function (e) {
                e.addEventListener('click', function () {
                    var FinalClosureDate = e.getAttribute('data-finalclosuredate');
                    var DeadlineID = e.getAttribute('data-id-2');
                    // Set the values in the input fields
                    document.getElementById('newDeadlineTime2').value = FinalClosureDate;
                    document.getElementById('Edit-DeadlineID-2').value = DeadlineID;

                });
            });

            var editTopic = document.querySelectorAll('#editTopic');

            editTopic.forEach(function (e) {
                e.addEventListener('click', function () {
                    var topicID = e.getAttribute('data-id');
                    var topicName = e.getAttribute('data-name')
                    var topicDescription = e.getAttribute('data-description')
                    // Set the values in the input fields
                    document.getElementById('edit-TopicID').value = topicID;
                    document.getElementById('edit-topicName').value = topicName;
                    document.getElementById('edit-topicDescription').value = topicDescription;

                });
            });

            var deleteTopic = document.querySelectorAll('#deleteTopic');
            deleteTopic.forEach(function (e) {
                e.addEventListener('click', function () {
                    var topicID = e.getAttribute('data-id-delete');
                    // Set the values in the input fields
                    document.getElementById('delete-TopicID').value = topicID;

                });
            });
        });

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
<?php } ?>