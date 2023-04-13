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
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Create Topic</title>
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
                                    <p class="m-0"><?php echo $_SESSION['full_name']; ?></p>
                                </div>
                            </a>
                        </li>
                        <!-- top 1 -->
                        <li class="dropdown-item p-1 rounded">
                            <a href="Staff.php" class="d-flex align-items-center text-decoration-none text-dark"
                            id="manage-topics">
                                <div class="p-2">
                                    <i class="fa-solid fa-bars-progress topic-icon" style="font-size: 35px;"></i>
                                </div>
                                <div>
                                    <p class="m-0" style="padding-left: 10px;">Topics</p>
                                </div>
                            </a>
                        </li>

                        <!-- top 2 -->
                        <li class="dropdown-item p-1 rounded">
                            <a href="Staff_Topics.php" class="d-flex align-items-center text-decoration-none text-dark"
                               id="manage-topics">
                                <div class="p-2">
                                    <i class="fa-solid fa-bars-progress topic-icon active" style="font-size: 35px;"></i>
                                </div>
                                <div>
                                    <p class="m-0" style="padding-left: 10px;" id="manage-topics-text">Your Post</p>
                                </div>
                            </a>
                        </li>
                        <hr class="m-0" />
                    </ul>
                </div>
            </div>

            <!-- ================= Timeline ================= -->
            <div class="col-12 col-lg-12">
                <div class="d-flex flex-column justify-content-center mx-auto main-container">
                    <div class="row">
                    <div class="col-lg-6">
            <!-- Create Idea Form -->
            <div class="bg-light p-3 text-center mb-3">
                <form>
                    <!-- head -->
                    <div class="modal-header bg-primary text-white bg-white">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Submit Your Ideas for Topic 1
                        </h5>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                        <!-- choose topic (auto-synced) -->
                        <div class="mb-3">
                            <label for="topic" class="form-label text-primary">Topic:</label>
                            <select class="form-select" id="topic" required disabled>
                                <option selected value="Topic 1">Topic 1</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <!-- text -->
                            <label for="text" class="form-label text-primary">Your Ideas:</label>
                            <textarea class="form-control" id="text" rows="5" required></textarea>
                        </div>
                        <div class="mb-3">
                            <!-- options -->
                            <label class="form-label text-primary">Upload File:</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="file">
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="anonymousComment">
                            <label class="form-check-label" for="anonymousComment">
                                Post anonymously
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <!-- agree to terms and conditions -->
                            <input type="checkbox" class="form-check-input" id="terms" required>
                            <label class="form-check-label" for="terms">
                                I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal" class="text-primary">terms and
                                    conditions</a>
                            </label>
                        </div>
                    </div>
                    <!-- footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>
            </div>

    <!-- terms and conditions modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <!-- head -->
                                    <div class="modal-header align-items-center">
                                        <h5 class="text-dark text-center w-100 m-0" id="termsModalLabel">
                                            Terms and Conditions
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- body -->
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sollicitudin
                                            turpis a augue bibendum
                                            posuere. Nulla ut nulla eget justo varius consequat sed ut lacus. Nam
                                            consectetur ante eget massa
                                            posuere, nec lacinia magna fringilla. In non malesuada augue. Phasellus sed
                                            sapien nulla. Nulla id
                                            neque eu ipsum rhoncus malesuada. Aliquam erat volutpat. Nam eu felis vel
                                            mauris feugiat laoreet
                                            eget eget elit.</p>
                                        <p>Donec quis hendrerit lectus. Integer eu leo consequat, laoreet massa non,
                                            posuere nunc. Praesent non
                                            tellus non ipsum auctor feugiat. Proin pulvinar eros ac purus lacinia
                                            viverra. Vivamus mollis
                                            aliquam quam, nec sollicitudin justo venenatis ac. Praesent blandit dolor
                                            eget luctus vehicula.
                                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                            cubilia curae; Duis ut
                                            felis sed dolor placerat ultricies. Donec at convallis elit. Aliquam laoreet
                                            purus eget nisi
                                            vehicula sagittis. Fusce euismod sem in purus consequat faucibus.</p>
                                        <p>Etiam pellentesque, magna nec euismod ultrices, metus dolor eleifend enim, a
                                            luctus justo erat ac
                                            tellus. Nulla tincidunt aliquam libero eget tristique. Fusce dignissim
                                            sapien at tortor faucibus,
                                            quis luctus lectus fringilla. Sed non semper quam. Fusce placerat, ante in
                                            congue ultrices, nisl
                                            arcu dapibus sapien, vel aliquam metus risus sit amet nisl. Integer vitae
                                            libero eget mi
                                            ullamcorper bibendum. Integer euismod vel erat eget consequat. Sed vel
                                            pretium lorem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

                        <!-- Post -->
                        <div class="col-lg-6 bg-white" style="height: 200px;">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- avatar -->
                                <div class="d-flex align-items-center">
                                    <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                        class="rounded-circle me-2"
                                        style="width: 38px; height: 38px; object-fit: cover" />
                                    <div>
                                        <p class="m-0 fw-bold">Marris Nguyen</p>
                                        <span class="text-muted fs-7">July 17 at 1:23 pm</span>
                                    </div>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="my-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus provident totam
                                    velit optio,
                                    reprehenderit in impedit quidem, doloremque esse eos officiis, voluptas nobis maxime
                                    minima?
                                    Perspiciatis soluta enim veritatis neque!</p>
                            </div>

                            <!-- like, dislike and download buttons -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <button type="button" class="btn btn-outline-primary btn-sm me-2">
                                        <i class="far fa-thumbs-up"></i>
                                        <span class="ms-2">10</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm me-2">
                                        <i class="far fa-thumbs-down"></i>
                                        <span class="ms-2">2</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm me-2 comment-toggle"
                                        data-bs-toggle="collapse" href="#comment" aria-expanded="false"
                                        aria-controls="comment">
                                        <i class="far fa-comment"></i> Comment
                                    </button>
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