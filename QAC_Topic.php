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
                            <a href="QAC_Staff.php" class="d-flex align-items-center text-decoration-none text-dark"
                               id="manage-topics">
                                <div class="p-2">
                                    <i class="fa-solid fa-bars-progress topic-icon " style="font-size: 35px;"></i>
                                </div>
                                <div>
                                    <p class="m-0" style="padding-left: 10px;">Staffs Management</p>
                                </div>
                            </a>
                        </li>

                        <!-- top 2 -->
                        <li class="dropdown-item p-1 rounded">
                            <a href="QAC_Topic.php" class="d-flex align-items-center text-decoration-none text-dark"
                               id="manage-topics">
                                <div class="p-2">
                                    <i class="fa-solid fa-bars-progress topic-icon active" style="font-size: 35px;"></i>
                                </div>
                                <div>
                                    <p class="m-0" style="padding-left: 10px;" id="manage-topics-text">Topics</p>
                                </div>
                            </a>
                        </li>
                        <hr class="m-0"/>
                    </ul>
                </div>
            </div>
            <!-- ================= Timeline ================= -->
            <div class="col-12 col-lg-12">
                <div class="d-flex flex-column justify-content-center mx-auto main-container">

                    <!-- Latest Topics -->
                    <div class="bg-white p-3 mb-3">
                        <h3 class="text-dark mb-3 text-center">Latest Topics</h3>
                        <?php
                        $sql = "SELECT * FROM Topic, Deadline WHERE Topic.DeadlineID = Deadline.DeadlineID AND Deadline.ClosureDate > NOW() AND Deadline.FinalClosureDate > NOW()  ORDER BY Deadline.ClosureDate DESC";
                        $result = mysqli_query($conn, $sql);
                        ?>
                        <?php if (mysqli_num_rows($result) > 0) { ?>
                            <div class="row">
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <div class="col-6 col-md-4 mb-3">
                                        <a href="QAC_Topic_Detail.php?topic=<?php echo $row['TopicID']; ?>"
                                           class="text-decoration-none text-dark">
                                            <div class="bg-light p-3 text-center">
                                                <i class="fas fa-book fa-3x mb-3"></i>
                                                <h5 class="mb-2"><?php echo $row['TopicName']; ?></h5><span
                                                    class="badge bg-success">Open</span>
                                                <p class="mb-1"><i class="fas fa-calendar-alt"></i> <strong>Deadline for
                                                        submit:</strong> <span
                                                        class="font-weight-bold"><?php echo $row['ClosureDate']; ?></span>
                                                </p>

                                                <p><i class="fas fa-calendar-alt"></i> <strong>Final deadline:</strong>
                                                    <span
                                                        class="font-weight-bold"><?php echo $row['FinalClosureDate']; ?></span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- Topic Has Closed -->
                    <div class="bg-white p-3 mb-3">
                        <h3 class="text-dark mb-3 text-center">Topic Has Closed</h3>
                        <?php
                        // Get all topics that has closed where the current date is greater than the closure date

                        $sql = "SELECT * FROM Topic, Deadline WHERE Topic.DeadlineID = Deadline.DeadlineID AND Deadline.ClosureDate < NOW() AND Deadline.FinalClosureDate > NOW() ORDER BY Deadline.ClosureDate DESC";
                        $result = mysqli_query($conn, $sql);
                        ?>
                        <?php if (mysqli_num_rows($result) > 0) { ?>
                            <div class="row">
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <div class="col-6 col-md-4 mb-3">
                                        <a href="QAC_Topic_Detail.php?topic=<?php echo $row['TopicID']; ?>"
                                           class="text-decoration-none text-dark">
                                            <div class="bg-light p-3 text-center">
                                                <i class="fas fa-book fa-3x mb-3"></i>
                                                <h5 class="mb-2"><?php echo $row['TopicName']; ?></h5> <span
                                                    class="badge bg-warning">Closed for submission</span>
                                                <p class="mb-1"><i class="fas fa-calendar-alt"></i> <strong>Deadline for
                                                        submit:</strong> <span
                                                        class="font-weight-bold"><?php echo $row['ClosureDate']; ?></span>
                                                </p>

                                                <p><i class="fas fa-calendar-alt"></i> <strong>Final deadline:</strong>
                                                    <span
                                                        class="font-weight-bold"><?php echo $row['FinalClosureDate']; ?></span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- Topic Has Completely Closed  -->
                    <div class="bg-white p-3 mb-3">
                        <h3 class="text-dark mb-3 text-center">Topic Has Completely Closed</h3>
                        <?php
                        $sql = "SELECT * FROM Topic, Deadline WHERE Topic.DeadlineID = Deadline.DeadlineID AND Deadline.ClosureDate < NOW() AND Deadline.FinalClosureDate < NOW()";
                        $result = mysqli_query($conn, $sql);
                        ?>
                        <?php if (mysqli_num_rows($result) > 0) { ?>
                            <div class="row">
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <div class="col-6 col-md-4 mb-3">
                                        <a href="QAC_Topic_Detail.php?topic=<?php echo $row['TopicID']; ?>"
                                           class="text-decoration-none text-dark">
                                            <div class="bg-light p-3 text-center">
                                                <i class="fas fa-book fa-3x mb-3"></i>
                                                <h5 class="mb-2"><?php echo $row['TopicName']; ?></h5> <span
                                                    class="badge bg-danger">Closed</span>
                                                <p class="mb-1"><i class="fas fa-calendar-alt"></i> <strong>Deadline for
                                                        submit:</strong> <span
                                                        class="font-weight-bold"><?php echo $row['ClosureDate']; ?></span>
                                                </p>

                                                <p><i class="fas fa-calendar-alt"></i> <strong>Final deadline:</strong>
                                                    <span
                                                        class="font-weight-bold"><?php echo $row['FinalClosureDate']; ?></span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- ================= Footer ================= -->
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
<?php } ?>