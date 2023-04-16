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
            <?php
            // get ideas that sent with get method ?idea = id
            if (isset($_GET['topic'])) {
                $topic = $_GET['topic'];
                $sql = "SELECT * FROM Topic, Deadline WHERE Topic.DeadlineID = Deadline.DeadlineID AND TopicID = '$topic'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
            }
            ?>
            <!-- ================= Timeline ================= -->
            <div class="col-12 col-lg-12">
                <div class="d-flex flex-column justify-content-center mx-auto main-container">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Latest Topics form -->
                            <div class="bg-light p-3 text-center mb-3">
                                <a href="QAM_Ideas.php?topic=<?php echo $topic; ?>"
                                   class="text-decoration-none text-dark">
                                    <i class="fas fa-book fa-3x mb-3"></i>
                                    <h5 class="mb-2"><?php echo $row['TopicName']; ?></h5>
                                    <p class="mb-1"><i class="fas fa-calendar-alt"></i> <strong>Deadline for
                                            submit:</strong> <span
                                            class="font-weight-bold"><?php echo $row['ClosureDate']; ?></span>
                                    </p>
                                    <p><i class="fas fa-calendar-alt"></i> <strong>Final deadline:</strong> <span
                                            class="font-weight-bold"><?php echo $row['FinalClosureDate']; ?></span></p>
                                </a>
                            </div>

                            <!-- Number of ideas -->
                            <div class="bg-light p-3 text-center mb-3">
                                <h5 class="mb-2">Number of ideas: <?php
                                    $sql = "SELECT COUNT(*) AS total FROM Idea WHERE TopicID = '$topic'";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['total'];
                                    ?></h5>
                            </div>

                            <!-- Download and Export Ideas -->
                            <div class="bg-light p-3 text-center mb-3">
                                <h5 class="mb-2">Download and Export Ideas</h5>
                                <a href="QAM_Download_File_Upload_By_Topics.php?topic=<?php echo $topic; ?>"
                                   class="btn btn-sm btn-primary mb-2"><i class="fas fa-file-archive"></i>
                                    Download all ideas (.zip)</a>
                                <a href="QAM_Download_All_Ideas_Of_Topics.php?topic=<?php echo $topic; ?>"
                                   class="btn btn-sm btn-primary mb-2"><i class="fas fa-file-csv"></i> Export ideas
                                    (.csv)</a>
                            </div>

                            <!-- List of TOP Ideas -->
                            <div class="bg-light p-3 text-center mb-3">
                                <a href="Top_Ideas.php" class="btn btn-sm btn-primary"><i class="fas fa-list"></i>
                                    Statistics of TOP Ideas</a>
                            </div>
                        </div>

                        <?php
                        // get ideas that sent with get method ?idea = id
                        if (isset($_GET['topic'])) {
                            $topic = $_GET['topic'];
                            $sql = "SELECT * FROM Idea, Staff, Topic WHERE Idea.StaffID = Staff.StaffID AND Idea.TopicID = Topic.TopicID AND Topic.TopicID = $topic ORDER BY Idea.PostDate DESC";
                            $result = mysqli_query($conn, $sql);
                        }
                        ?>
                        <?php if (mysqli_num_rows($result) > 0) { ?>
                            <div class="d-flex flex-column justify-content-center w-100 mx-auto"
                                 style="max-width: 680px;">
                                <?php if (mysqli_num_rows($result) > 0) { ?>
                                    <div class="d-flex flex-column justify-content-center w-100 mx-auto"
                                         style="max-width: 680px;">
                                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <div class="bg-white p-4 rounded shadow mt-3">
                                                <!-- author -->
                                                <div class="d-flex justify-content-between">
                                                    <!-- avatar -->
                                                    <div class="d-flex">
                                                        <img src="https://source.unsplash.com/collection/happy-people"
                                                             alt="avatar"
                                                             alt="avatar"
                                                             class="rounded-circle me-2"
                                                             style="width: 38px; height: 38px; object-fit: cover"/>
                                                        <div>
                                                            <p class="m-0 fw-bold"><?php
                                                                if ($row['StaffID'] == $_SESSION['staff_id'] && $row['is_anonymous'] == 1) {
                                                                    echo "You (Anonymous)";
                                                                } else if ($row['StaffID'] == $_SESSION['staff_id']) {
                                                                    echo "You";
                                                                } else if ($row['is_anonymous'] == 1) {
                                                                    echo "Anonymous";
                                                                } else {
                                                                    echo $row['FullName'];
                                                                }
                                                                ?></p>
                                                            <span class="text-muted fs-7"><?php
                                                                $current_time = new DateTime();
                                                                $post_time = new DateTime($row['PostDate']);
                                                                // Calculate the difference between the current time and the post time
                                                                $diff = $current_time->diff($post_time);
                                                                if ($diff->y > 0) {
                                                                    echo $diff->y . " year" . ($diff->y > 1 ? "s" : "") . " ago";
                                                                } else if ($diff->m > 0) {
                                                                    echo $diff->m . " month" . ($diff->m > 1 ? "s" : "") . " ago";
                                                                } else if ($diff->d > 0) {
                                                                    echo $diff->d . " day" . ($diff->d > 1 ? "s" : "") . " ago";
                                                                } else if ($diff->h > 0) {
                                                                    echo $diff->h . " hour" . ($diff->h > 1 ? "s" : "") . " ago";
                                                                } else if ($diff->i > 0) {
                                                                    echo $diff->i . " minute" . ($diff->i > 1 ? "s" : "") . " ago";
                                                                } else if ($diff->s > 0) {
                                                                    echo $diff->s . " second" . ($diff->s > 1 ? "s" : "") . " ago";
                                                                }
                                                                ?></span>
                                                        </div>
                                                    </div>
                                                    <!-- edit -->
                                                    <i class="fas fa-ellipsis-h" type="button" id="post1Menu"
                                                       data-bs-toggle="dropdown"
                                                       aria-expanded="false"></i>
                                                    <!-- edit menu -->
                                                    <ul class="dropdown-menu border-0 shadow"
                                                        aria-labelledby="post1Menu">
                                                        <li class="d-flex align-items-center">
                                                            <a class="dropdown-item d-flex justify-content-around align-items-center fs-7"
                                                               href="#">Edit
                                                                Post</a>
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <a class="dropdown-item d-flex justify-content-around align-items-center fs-7"
                                                               href="#">Delete
                                                                Post</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="my-3">
                                                    <h6>Topic Name: <?php echo $row['TopicName']; ?></h6>
                                                    <h6>Idea Title: <?php echo $row['Title']; ?></h6>
                                                </div>
                                                <!-- content -->
                                                <div class="my-3">
                                                    <p><?php echo $row['Content']; ?></p>
                                                    <?php
                                                    // Check if a document exists in the database and display a download button if it does
                                                    $sql_download = "SELECT * FROM Document WHERE Document.IdeaID = " . $row['IdeaID'];
                                                    $result_download = mysqli_query($conn, $sql_download);
                                                    if (mysqli_num_rows($result_download) > 0) {
                                                        // Build a zip file containing all the documents for this idea
                                                        $zip = new ZipArchive();
                                                        $zipName = "documents-" . $row['IdeaID'] . ".zip";
                                                        $zipPath = "uploads/" . $zipName;
                                                        if ($zip->open($zipPath, ZipArchive::CREATE) !== TRUE) {
                                                            echo "Error: Could not create zip file";
                                                        }
                                                        while ($row_download = mysqli_fetch_assoc($result_download)) {
                                                            $filePath = $row_download['DocumentPath'];
                                                            $fileName = basename($filePath);
                                                            $zip->addFile($filePath, $fileName);
                                                        }
                                                        $zip->close();
                                                        ?>
                                                        <a href="<?php echo $zipPath; ?>"
                                                           download="<?php echo $zipName; ?>"
                                                           class="btn btn-primary"><i class="fas fa-download"></i>
                                                            Download Documents</a>
                                                        <?php
                                                    }
                                                    ?>

                                                </div>
                                                <!-- like and dislike buttons -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-outline-primary btn-sm me-2 like-btn"
                                                                id="btnLike-<?php echo $row['IdeaID']; ?>"
                                                                data-idea-id="<?php echo $row['IdeaID']; ?>">
                                                            <i class="far fa-thumbs-up"></i> Like (<span
                                                                class="like-count"><?php
                                                                $sql2 = "SELECT * FROM Vote WHERE Vote.IdeaID = " . $row['IdeaID'] . " AND Vote.Status = 1";
                                                                $result2 = mysqli_query($conn, $sql2);
                                                                echo mysqli_num_rows($result2);
                                                                // Check if the user has already liked the post change the color of the button
                                                                $staffID = $_SESSION['staff_id'];
                                                                $ideaID = $row['IdeaID'];

                                                                $sql3 = "SELECT * FROM Vote WHERE Vote.IdeaID = $ideaID AND Vote.StaffID = $staffID AND Vote.Status = 1";
                                                                $result3 = mysqli_query($conn, $sql3);
                                                                if (mysqli_num_rows($result3) > 0) {
                                                                    // Change class of the button
                                                                    echo "<script>document.getElementById('btnLike-$ideaID').classList.add('btn-primary');</script>";
                                                                    echo "<script>document.getElementById('btnLike-$ideaID').classList.remove('btn-outline-primary');</script>";
                                                                } else {
                                                                    echo "<script>document.getElementById('btnLike-$ideaID').classList.add('btn-outline-primary');</script>";
                                                                    echo "<script>document.getElementById('btnLike-$ideaID').classList.remove('btn-primary');</script>";
                                                                }
                                                                ?></span>)
                                                        </button>
                                                        <button type="button"
                                                                class="btn btn-outline-danger btn-sm dislike-btn"
                                                                id="btnDislike-<?php echo $row['IdeaID']; ?>"
                                                                data-idea-id="<?php echo $row['IdeaID']; ?>">
                                                            <i class="far fa-thumbs-down"></i> Dislike (<span
                                                                class="dislike-count"><?php
                                                                $sql4 = "SELECT * FROM Vote WHERE Vote.IdeaID = " . $row['IdeaID'] . " AND Vote.Status = 0";
                                                                $result4 = mysqli_query($conn, $sql4);
                                                                echo mysqli_num_rows($result4);
                                                                // Check if the user has already disliked the post change the color of the button
                                                                $staffID = $_SESSION['staff_id'];
                                                                $ideaID = $row['IdeaID'];
                                                                $sql5 = "SELECT * FROM Vote WHERE Vote.IdeaID = $ideaID AND Vote.StaffID = $staffID AND Vote.Status = 0";
                                                                $result5 = mysqli_query($conn, $sql5);
                                                                if (mysqli_num_rows($result5) > 0) {
                                                                    // Change class of the button
                                                                    echo "<script>document.getElementById('btnDislike-$ideaID').classList.add('btn-danger');</script>";
                                                                    echo "<script>document.getElementById('btnDislike-$ideaID').classList.remove('btn-outline-danger');</script>";
                                                                } else {
                                                                    echo "<script>document.getElementById('btnDislike-$ideaID').classList.add('btn-outline-danger');</script>";
                                                                    echo "<script>document.getElementById('btnDislike-$ideaID').classList.remove('btn-danger');</script>";
                                                                }
                                                                ?></span>)
                                                        </button>
                                                    </div>

                                                    <button type="button"
                                                            class="btn btn-outline-secondary btn-sm comment-toggle"
                                                            data-bs-toggle="collapse"
                                                            href="#comment<?php echo $row['IdeaID']; ?>"
                                                            aria-expanded="false" aria-controls="comment">
                                                        <i class="far fa-comment"></i> Comment (<?php
                                                        $sql3 = "SELECT * FROM Comment WHERE Comment.IdeaID = " . $row['IdeaID'];
                                                        $result3 = mysqli_query($conn, $sql3);
                                                        echo mysqli_num_rows($result3);
                                                        ?>)
                                                    </button>
                                                </div>

                                                <!-- comment section -->
                                                <?php
                                                include("connection.php");
                                                $sql2 = "SELECT * FROM Comment, Staff WHERE Comment.StaffID = Staff.StaffID AND Comment.IdeaID = " . $row['IdeaID'] . " ORDER BY Comment.CommentDate ASC";
                                                $result2 = mysqli_query($conn, $sql2); ?>
                                                <div id="comment<?php echo $row['IdeaID']; ?>" class="collapse">
                                                    <?php if (mysqli_num_rows($result2) > 0) { ?>
                                                        <!-- Comment section -->
                                                        <?php while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                                                            <div class="comments mt-3">
                                                                <!-- Single comment -->
                                                                <div class="d-flex align-items-start comment">
                                                                    <!-- Avatar -->
                                                                    <img
                                                                        src="https://source.unsplash.com/collection/happy-people"
                                                                        alt="avatar" class="rounded-circle me-2"
                                                                        style="width: 38px; height: 38px; object-fit: cover">
                                                                    <div class="comment-body">
                                                                        <!-- Commenter name -->
                                                                        <p class="m-0 fw-bold"><?php
                                                                            if ($row2['StaffID'] == $_SESSION['staff_id'] && $row2['is_anonymous'] == 1) {
                                                                                echo "You (Anonymous)";
                                                                            } else if ($row2['StaffID'] == $_SESSION['staff_id']) {
                                                                                echo "You";
                                                                            } else if ($row2['is_anonymous'] == 1) {
                                                                                echo "Anonymous";
                                                                            } else {
                                                                                echo $row2['FullName'];
                                                                            }
                                                                            ?></p>
                                                                        <!-- Comment time -->
                                                                        <span class="text-muted fs-7"><?php
                                                                            $current_time = new DateTime();
                                                                            $comment_time = new DateTime($row2['CommentDate']);
                                                                            // Calculate the difference between the current time and the post time
                                                                            $diff = $current_time->diff($comment_time);
                                                                            if ($diff->y > 0) {
                                                                                echo $diff->y . " year" . ($diff->y > 1 ? "s" : "") . " ago";
                                                                            } else if ($diff->m > 0) {
                                                                                echo $diff->m . " month" . ($diff->m > 1 ? "s" : "") . " ago";
                                                                            } else if ($diff->d > 0) {
                                                                                echo $diff->d . " day" . ($diff->d > 1 ? "s" : "") . " ago";
                                                                            } else if ($diff->h > 0) {
                                                                                echo $diff->h . " hour" . ($diff->h > 1 ? "s" : "") . " ago";
                                                                            } else if ($diff->i > 0) {
                                                                                echo $diff->i . " minute" . ($diff->i > 1 ? "s" : "") . " ago";
                                                                            } else if ($diff->s > 0) {
                                                                                echo $diff->s . " second" . ($diff->s > 1 ? "s" : "") . " ago";
                                                                            }
                                                                            ?>
                                                                        </span>
                                                                        <!-- Comment content -->
                                                                        <p class="mt-2"><?php echo $row2['CommentContent']; ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    <?php
                                                    // Check current data if greater than closuredate and finalclosuredate then hide the comment form. If just greater than closuredate and less than finalclosuredate then show the comment form with a warning message.
                                                    // Use sql to get ClosureDate and FinalClosureDate
                                                    $current_date = new DateTime();
                                                    $sql6 = "SELECT * FROM Topic, Deadline WHERE Topic.DeadlineID = Deadline.DeadlineID AND Topic.TopicID = " . $row['TopicID'];
                                                    $result6 = mysqli_query($conn, $sql6);
                                                    $row6 = mysqli_fetch_assoc($result6);
                                                    // Convert to DateTime
                                                    $closure_date = new DateTime($row6['ClosureDate']);
                                                    $final_closure_date = new DateTime($row6['FinalClosureDate']);
                                                    if ($current_date > $closure_date && $current_date > $final_closure_date) {
                                                        echo "<div class='alert alert-danger mt-3' role='alert'>This idea has been closed. You can no longer comment on this idea.</div>";
                                                    } else if ($current_date > $closure_date && $current_date < $final_closure_date) { ?>
                                                        <div class="alert alert-warning mt-3" role="alert">This idea has
                                                            been closed. You
                                                            can still comment on this idea but it will be reviewed by
                                                            the
                                                            admin.
                                                        </div>
                                                        <!-- Comment form -->
                                                        <div class="mt-3">
                                                            <form
                                                                action="QAM_Ideas.php?topicID=<?php echo $row['TopicID']; ?>"
                                                                method="post">
                                                                <!-- Comment content input -->
                                                                <input type="hidden" name="ideaID"
                                                                       value="<?php echo $row['IdeaID']; ?>">
                                                                <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Leave a comment here"
                                                      id="commentContent" style="height: 100px"
                                                      name="commentContent" required></textarea>
                                                                    <label for="commentContent">Leave a comment
                                                                        here</label>
                                                                </div>
                                                                <!-- Checkbox for anonymous comment -->
                                                                <div class="form-check mb-3">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           value=""
                                                                           id="anonymousComment"
                                                                           name="anonymousComment">
                                                                    <label class="form-check-label"
                                                                           for="anonymousComment">
                                                                        Post anonymously
                                                                    </label>
                                                                </div>
                                                                <!-- Submit button -->
                                                                <button type="submit" class="btn btn-primary"
                                                                        name="add-comment">Submit
                                                                </button>
                                                            </form>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="alert alert-success mt-3" role="alert">You can
                                                            comment
                                                            on this idea.
                                                        </div>
                                                        <!-- Comment form -->
                                                        <div class="mt-3">
                                                            <form
                                                                action="QAM_Ideas.php?topic=<?php echo $row['TopicID']; ?>"
                                                                method="post">
                                                                <!-- Comment content input -->
                                                                <input type="hidden" name="ideaID"
                                                                       value="<?php echo $row['IdeaID']; ?>">
                                                                <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Leave a comment here"
                                                      id="commentContent" style="height: 100px"
                                                      name="commentContent" required></textarea>
                                                                    <label for="commentContent">Leave a comment
                                                                        here</label>
                                                                </div>
                                                                <!-- Checkbox for anonymous comment -->
                                                                <div class="form-check mb-3">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           value=""
                                                                           id="anonymousComment"
                                                                           name="anonymousComment">
                                                                    <label class="form-check-label"
                                                                           for="anonymousComment">
                                                                        Post anonymously
                                                                    </label>
                                                                </div>
                                                                <!-- Submit button -->
                                                                <button type="submit" class="btn btn-primary"
                                                                        name="add-comment">Submit
                                                                </button>
                                                            </form>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <?php
                        include("connection.php");
                        // add comment for topic
                        if (isset($_POST['add-comment'])) {
                            $ideaID = $_POST['ideaID'];
                            $content = $_POST['commentContent'];
                            $staffID = $_SESSION['staff_id'];
                            $commentDate = date("Y-m-d H:i:s");
                            $isAnonymous = isset($_POST['anonymousComment']) ? 1 : 0;

                            $sql = "INSERT INTO Comment (CommentContent, StaffID, IdeaID, is_anonymous, CommentDate) VALUES ('$content', '$staffID', '$ideaID', '$isAnonymous', '$commentDate')";

                            if (mysqli_query($conn, $sql)) {
                                //  The author of an idea receives an automatic email notification whenever a comment is submitted to any of their ideas.
                                $sql2 = "SELECT * FROM Idea WHERE IdeaID = '$ideaID'";
                                $result2 = mysqli_query($conn, $sql2);
                                $row2 = mysqli_fetch_assoc($result2);
                                $authorID = $row2['StaffID'];
                                $sql3 = "SELECT * FROM Staff WHERE StaffID = '$authorID'";
                                $result3 = mysqli_query($conn, $sql3);
                                $row3 = mysqli_fetch_assoc($result3);
                                $authorEmail = $row3['Email'];
                                $authorName = $row3['StaffName'];
                                $to = $authorEmail;
                                $subject = "New comment on your idea";
                                $message = "Dear " . $row3['StaffName'] . ",<br><br> A new comment has been submitted to your idea $row2[Title].<br><br>";
                                $message .= 'Comment: ' . $content . '<br><br>';
                                $message .= 'Please login at https://greenwichideas.cleverapps.io/ to your account to view the comment.<br><br>';
                                $message .= 'Thank you,<br>Greenwich Quality Assurance Manager';

                                // Set up the email headers
                                $mail = new PHPMailer\PHPMailer\PHPMailer();

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
                                    $mail->addAddress($to, $authorName);

                                    // Content
                                    $mail->isHTML(true);
                                    $mail->Subject = $subject;
                                    $mail->Body = $message;
                                    $mail->send();
                                    echo "<script>alert('Comment added successfully!')</script>";
                                    echo "<script>window.location.href='Staff.php'</script>";
                                } catch (Exception $e) {
                                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                }
                            } else {
                                echo "<script>alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
                            }
                        }
                        ?>
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
            <script>
                // Like button click event listener
                document.querySelectorAll('.like-btn').forEach((btn) => {
                    btn.addEventListener('click', () => {
                        const ideaID = btn.getAttribute('data-idea-id');
                        const xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function () {
                            if (this.readyState == 4 && this.status == 200) {
                                // Update like count
                                const likeCount = btn.querySelector('.like-count');
                                const data = JSON.parse(this.responseText);
                                likeCount.textContent = data.like;
                                // Update dislike count
                                const dislikeCount = btn.parentNode.querySelector('.dislike-count');
                                dislikeCount.textContent = data.dislike;
                                // Change button style
                                const likeBtn = document.getElementById('btnLike-' + ideaID);
                                const dislikeBtn = document.getElementById('btnDislike-' + ideaID);
                                // Check if the user has already liked the idea
                                if (data.status == 1 && data.idea_id == ideaID) {
                                    // If the user has already liked the idea, remove the like
                                    likeBtn.classList.remove('btn-outline-primary');
                                    likeBtn.classList.add('btn-primary');
                                    dislikeBtn.classList.remove('btn-danger');
                                    dislikeBtn.classList.add('btn-outline-danger');

                                } else if (data.status == 0 && data.idea_id == ideaID) {
                                    // If the user has already disliked the idea, remove the dislike
                                    dislikeBtn.classList.remove('btn-outline-danger');
                                    dislikeBtn.classList.add('btn-danger');

                                    likeBtn.classList.remove('btn-primary');
                                    likeBtn.classList.add('btn-outline-primary');
                                } else {
                                    // If the user has not liked or disliked the idea, add the like
                                    likeBtn.classList.add('btn-outline-primary');
                                    dislikeBtn.classList.add('btn-outline-danger');
                                }
                            }
                        };
                        xhr.open("POST", "vote.php", true);
                        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xhr.send(`idea_id=${ideaID}&status=1`);
                    });
                });

                // Dislike button click event listener
                document.querySelectorAll('.dislike-btn').forEach((btn) => {
                    btn.addEventListener('click', () => {
                        const ideaID = btn.getAttribute('data-idea-id');
                        const xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function () {
                            if (this.readyState == 4 && this.status == 200) {
                                // Update dislike count and like count
                                const dislikeCount = btn.querySelector('.dislike-count');
                                const data = JSON.parse(this.responseText);
                                dislikeCount.textContent = data.dislike;
                                const likeCount = btn.parentNode.querySelector('.like-count');
                                likeCount.textContent = data.like;

                                // Change button style
                                const likeBtn = document.getElementById('btnLike-' + ideaID);
                                const dislikeBtn = document.getElementById('btnDislike-' + ideaID);

                                // Check if the user has already liked the idea
                                if (data.status == 1 && data.idea_id == ideaID) {
                                    // If the user has already liked the idea, remove the like
                                    likeBtn.classList.remove('btn-outline-primary');
                                    likeBtn.classList.add('btn-primary');

                                    dislikeBtn.classList.remove('btn-danger');
                                    dislikeBtn.classList.add('btn-outline-danger');
                                } else if (data.status == 0 && data.idea_id == ideaID) {
                                    // If the user has already disliked the idea, remove the dislike
                                    dislikeBtn.classList.remove('btn-outline-danger');
                                    dislikeBtn.classList.add('btn-danger');
                                    likeBtn.classList.remove('btn-primary');
                                    likeBtn.classList.add('btn-outline-primary');
                                } else {
                                    // If the user has not liked or disliked the idea, add the like
                                    likeBtn.classList.add('btn-outline-primary');
                                    dislikeBtn.classList.add('btn-outline-danger');
                                }
                            }
                        };
                        xhr.open("POST", "vote.php", true);
                        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xhr.send(`idea_id=${ideaID}&status=0`);
                    });
                });
            </script>

    </body>

    </html>
<?php } ?>