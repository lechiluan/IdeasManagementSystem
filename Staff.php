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
    <!-- fontawesome   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="icon" type="image/png" href="./img/favicon.ico">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Home</title>
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
                                <p class="m-0"><?php echo $_SESSION['full_name']; ?></p>
                            </div>
                        </a>
                    </li>
                    <!-- top 1 -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="Staff.php" class="d-flex align-items-center text-decoration-none text-dark"
                           id="manage-topics">
                            <div class="p-2">
                                <i class="fa-solid fa-bars-progress topic-icon active" style="font-size: 35px;"></i>
                            </div>
                            <div>
                                <p class="m-0" style="padding-left: 10px;" id="manage-topics-text">Your Post</p>
                            </div>
                        </a>
                    </li>

                    <!-- top 2 -->
                    <li class="dropdown-item p-1 rounded">
                        <a href="Topics.php" class="d-flex align-items-center text-decoration-none text-dark"
                           id="manage-topics">
                            <div class="p-2">
                                <i class="fa-solid fa-bars-progress topic-icon" style="font-size: 35px;"></i>
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
        <!-- ================= Timeline ================= -->
        <div class="col-12 col-lg-12">
            <!-- post -->
            <!-- p 1 -->
            <div class="d-flex flex-column justify-content-center w-100 mx-auto"
                 style="padding-top: 60px; max-width: 680px;">
                <div class="bg-white p-4 rounded shadow mt-3">
                    <!-- author -->
                    <div class="d-flex justify-content-between">
                        <!-- avatar -->
                        <div class="d-flex">
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                 class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover"/>
                            <div>
                                <p class="m-0 fw-bold">Marris Nguyen</p>
                                <span class="text-muted fs-7">July 17 at 1:23 pm</span>
                            </div>
                        </div>
                        <!-- edit -->
                        <i class="fas fa-ellipsis-h" type="button" id="post1Menu" data-bs-toggle="dropdown"
                           aria-expanded="false"></i>
                        <!-- edit menu -->
                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1Menu">
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item d-flex justify-content-around align-items-center fs-7" href="#">Edit
                                    Post</a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item d-flex justify-content-around align-items-center fs-7" href="#">Delete
                                    Post</a>
                            </li>
                        </ul>
                    </div>

                    <!-- content -->
                    <div class="my-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus provident totam velit
                            optio, reprehenderit in impedit quidem, doloremque esse eos officiis, voluptas nobis
                            maxime minima? Perspiciatis soluta enim veritatis neque!</p>
                    </div>
                    <!-- like and dislike buttons -->
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                            <button type="button" class="btn btn-outline-primary btn-sm me-2"><i
                                    class="far fa-thumbs-up"></i> Like
                            </button>
                            <button type="button" class="btn btn-outline-danger btn-sm"><i
                                    class="far fa-thumbs-down"></i> Dislike
                            </button>
                        </div>
                        <button type="button" class="btn btn-outline-secondary btn-sm comment-toggle"
                                data-bs-toggle="collapse" href="#comment" aria-expanded="false" aria-controls="comment">
                            <i class="far fa-comment"></i> Comment
                        </button>
                    </div>

                    <!-- Comment section -->
                    <div class="comments mt-3">
                        <!-- Single comment -->
                        <div class="d-flex align-items-start comment">
                            <!-- Avatar -->
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                 class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover">
                            <div class="comment-body">
                                <!-- Commenter name -->
                                <p class="m-0 fw-bold">John Doe</p>
                                <!-- Comment time -->
                                <span class="text-muted fs-7">August 5 at 4:30 pm</span>
                                <!-- Comment content -->
                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                        <!-- Comment form -->
                        <div class="mt-3" id="comment">
                            <form>
                                <!-- Comment content input -->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                              id="commentContent" style="height: 100px"></textarea>
                                    <label for="commentContent">Leave a comment here</label>
                                </div>
                                <!-- Checkbox for anonymous comment -->
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="anonymousComment">
                                    <label class="form-check-label" for="anonymousComment">
                                        Post anonymously
                                    </label>
                                </div>
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <?php
                    // Display topic
                    include("connection.php");
                    $sql = "SELECT * FROM Topic WHERE DeadlineID IS NOT NULL";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        ?>
                        <!-- ================= Topic ================= -->
                        <div class="col-12 col-lg-3" style="margin-bottom: 50px;">
                            <div class="d-none d-xxl-block h-100 fixed-top end-0 overflow-hidden scrollbar"
                                 style="max-width: 360px; width: 100%; z-index: 4; padding-top: 56px; left: initial !important;">
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <div class="p-3 mt-4" style="background-color: #ffffff; margin-bottom: 10px;">
                                        <!-- topic 1 -->
                                        <h5 class="text-muted"><?php echo $row['TopicName'] ?></h5>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#topic1Modal"
                                                data-id="<?php echo $row['TopicID'] ?>">Submit your ideas
                                        </button>
                                        <?php
                                        // Display deadline of topic
                                        $deadlineSql = "SELECT * FROM Deadline WHERE DeadlineID = " . $row['DeadlineID'];
                                        $deadlineResult = mysqli_query($conn, $deadlineSql);
                                        while ($deadlineRow = mysqli_fetch_assoc($deadlineResult)) { ?>
                                            <!-- deadline -->
                                            <p class="text-muted">Deadline for
                                                submit: <?php echo $deadlineRow['ClosureDate'] ?></p>
                                            <p class="text-muted">Final
                                                Deadline: <?php echo $deadlineRow['FinalClosureDate'] ?></p>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- create modal for topic 1 -->
                    <div class="modal fade" id="topic1Modal" tabindex="-1" aria-labelledby="topic1ModalLabel"
                         aria-hidden="true" data-bs-backdrop="false">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- head -->
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Submit Your Ideas for Topic 1
                                    </h5>
                                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <!-- body -->
                                <form>
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
                                            <!-- agree to terms and conditions -->
                                            <input type="checkbox" class="form-check-input" id="terms" required>
                                            <label class="form-check-label" for="terms">
                                                I agree to the <a href="#" data-bs-toggle="modal"
                                                                  data-bs-target="#termsModal" class="text-primary">terms
                                                    and
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
                        </div>
                    </div>

                    <!-- terms and conditions modal -->
                    <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel"
                         aria-hidden="true" data-bs-backdrop="false">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <!-- head -->
                                <div class="modal-header align-items-center">
                                    <h5 class="text-dark text-center w-100 m-0" id="termsModalLabel">
                                        Terms and Conditions
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
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
            </div>

            <!-- ================= Footer ================= -->
            <!--============ Footer =========-->
        </div>
    </div>
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