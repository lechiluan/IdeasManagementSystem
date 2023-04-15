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
        <title>Top Ideas</title>
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
                            <a href="#" class="d-flex align-items-center text-decoration-none text-dark"
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
            <div class="col-12 col-lg-12">
                <div class="d-flex flex-column justify-content-center mx-auto main-container">
                    <div class="row">
                        <div class="col-6 grid-margin stretch-card">
                            <div class="card text-center h5 font-weight-bold">
                                <div class="card shadow">
                                    <div class="card-body">Top 5 favored ideas</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 grid-margin stretch-card">
                            <div class="card text-center h5 font-weight-bold">
                                <div class="card shadow">
                                    <div class="card-body">The 5 most-commented ideas</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 shadow">
                                <div class="card-body">
                                    <div class="media mb-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- avatar -->
                                            <div class="d-flex align-items-center">
                                                <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                                    class="rounded-circle me-2"
                                                    style="width: 38px; height: 38px; object-fit: cover"/>
                                                <div>
                                                    <p class="m-0 fw-bold">Marris Nguyen</p>
                                                    <span class="text-muted fs-7">July 17 at 1:23 pm</span>
                                                </div>
                                            </div>
                                            <button class="btn btn-outline-primary btn-icon-text" disabled="" style = "margin-right: 20px">
                                                    <i class="mdi mdi-thumb-up"></i>
                                                    <b id="like-count-23">
                                                        1
                                                    </b>&nbsp;&nbsp;Like
                                            </button>
                                        </div>
                                        <div class="my-3">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus provident totam
                                                velit optio,
                                                reprehenderit in impedit quidem, doloremque esse eos officiis, voluptas nobis maxime
                                                minima?
                                                Perspiciatis soluta enim veritatis neque!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4 shadow">
                                <div class="card-body">
                                    <div class="media mb-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- avatar -->
                                            <div class="d-flex align-items-center">
                                                <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                                    class="rounded-circle me-2"
                                                    style="width: 38px; height: 38px; object-fit: cover"/>
                                                <div>
                                                    <p class="m-0 fw-bold">Marris Nguyen</p>
                                                    <span class="text-muted fs-7">July 17 at 1:23 pm</span>
                                                </div>
                                            </div>
                                            <button class="btn btn-outline-primary btn-icon-text" disabled="" style = "margin-right: 20px">
                                                    <i class="mdi mdi-thumb-up"></i>
                                                    <b id="like-count-23">
                                                        1
                                                    </b>&nbsp;&nbsp;comment
                                            </button>
                                        </div>
                                        <div class="my-3">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus provident totam
                                                velit optio,
                                                reprehenderit in impedit quidem, doloremque esse eos officiis, voluptas nobis maxime
                                                minima?
                                                Perspiciatis soluta enim veritatis neque!</p>
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


    </body>

    </html>
    <?php
}
?>
