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
    <title>Quality Assurance Coordinator</title>
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
                                        <img src="https://source.unsplash.com/random/1" alt="avatar"
                                            class="rounded-circle"
                                            style="width: 58px; height: 58px; object-fit: cover" />
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
                                        <img src="https://source.unsplash.com/random/2" alt="avatar"
                                            class="rounded-circle"
                                            style="width: 58px; height: 58px; object-fit: cover" />
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
                                        <img src="https://source.unsplash.com/random/3" alt="avatar"
                                            class="rounded-circle"
                                            style="width: 58px; height: 58px; object-fit: cover" />
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
                                        style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="m-0">Quality Assurance Manager</p>
                                </div>
                            </a>
                        </li>
                        <!-- top 1 -->
                        <li class="dropdown-item p-1 rounded">
                            <a href="QAC.php" class="d-flex align-items-center text-decoration-none text-dark"
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
                        <hr class="m-0" />
                    </ul>
                </div>
            </div>

            <!-- ================= Timeline ================= -->
            <div class="col-12 col-lg-12">
                <div class="d-flex flex-column justify-content-center mx-auto main-container">

                    <!-- Latest Topics -->
                    <div class="bg-white p-3 mb-3">
                        <h3 class="text-dark mb-3 text-center">Latest Topics</h3>
                        <div class="row">
                            <div class="col-6 col-md-4 mb-3">
                                <a href="QAC_Topic_Detail.php" class="text-decoration-none text-dark">
                                    <div class="bg-light p-3 text-center">
                                        <i class="fas fa-book fa-3x mb-3"></i>
                                        <h5 class="mb-2">Topic Title</h5>
                                        <p class="mb-1"><i class="fas fa-calendar-alt"></i> <strong>Deadline for
                                                submit:</strong> <span class="font-weight-bold">10:00 AM, 28 Mar
                                                2023</span></p>
                                        <p><i class="fas fa-calendar-alt"></i> <strong>Final deadline:</strong> <span
                                                class="font-weight-bold">11:59 PM, 31 Mar 2023</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 mb-3">
                                <a href="QAC_Topic_Detail.php" class="text-decoration-none text-dark">
                                    <div class="bg-light p-3 text-center">
                                        <i class="fas fa-book fa-3x mb-3"></i>
                                        <h5 class="mb-2">Topic Title</h5>
                                        <p class="mb-1"><i class="fas fa-calendar-alt"></i> <strong>Deadline for
                                                submit:</strong> <span class="font-weight-bold">10:00 AM, 28 Mar
                                                2023</span></p>
                                        <p><i class="fas fa-calendar-alt"></i> <strong>Final deadline:</strong> <span
                                                class="font-weight-bold">11:59 PM, 31 Mar 2023</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 mb-3">
                                <a href="https://example.com" class="text-decoration-none text-dark">
                                    <div class="bg-light p-3 text-center">
                                        <i class="fas fa-book fa-3x mb-3"></i>
                                        <h5 class="mb-2">Topic Title</h5>
                                        <p class="mb-1"><i class="fas fa-calendar-alt"></i> <strong>Deadline for
                                                submit:</strong> <span class="font-weight-bold">10:00 AM, 28 Mar
                                                2023</span></p>
                                        <p><i class="fas fa-calendar-alt"></i> <strong>Final deadline:</strong> <span
                                                class="font-weight-bold">11:59 PM, 31 Mar 2023</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>



                    <!-- Topic Has Closed -->
                    <div class="bg-white p-3 mb-3">
                        <h3 class="text-dark mb-3 text-center">Topic Has Closed</h3>
                        <div class="row">
                            <div class="col-6 col-md-4 mb-3">
                                <a href="https://example.com" class="text-decoration-none text-dark">
                                    <div class="bg-light p-3 text-center">
                                        <i class="fas fa-book fa-3x mb-3"></i>
                                        <h5 class="mb-2">Topic Title</h5>
                                        <p class="mb-1"><i class="fas fa-calendar-alt"></i> <strong>Deadline for
                                                submit:</strong> <span class="font-weight-bold">10:00 AM, 28 Mar
                                                2023</span></p>
                                        <p><i class="fas fa-calendar-alt"></i> <strong>Final deadline:</strong> <span
                                                class="font-weight-bold">11:59 PM, 31 Mar 2023</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 mb-3">
                                <a href="https://example.com" class="text-decoration-none text-dark">
                                    <div class="bg-light p-3 text-center">
                                        <i class="fas fa-book fa-3x mb-3"></i>
                                        <h5 class="mb-2">Topic Title</h5>
                                        <p class="mb-1"><i class="fas fa-calendar-alt"></i> <strong>Deadline for
                                                submit:</strong> <span class="font-weight-bold">10:00 AM, 28 Mar
                                                2023</span></p>
                                        <p><i class="fas fa-calendar-alt"></i> <strong>Final deadline:</strong> <span
                                                class="font-weight-bold">11:59 PM, 31 Mar 2023</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Topic Has Completely Closed  -->
                    <div class="bg-white p-3 mb-3">
                        <h3 class="text-dark mb-3 text-center">Topic Has Completely Closed</h3>
                        <div class="row">
                            <div class="col-6 col-md-4 mb-3">
                                <a href="https://example.com" class="text-decoration-none text-dark">
                                    <div class="bg-light p-3 text-center">
                                        <i class="fas fa-book fa-3x mb-3"></i>
                                        <h5 class="mb-2">Topic Title</h5>
                                        <p class="mb-1"><i class="fas fa-calendar-alt"></i> <strong>Deadline for
                                                submit:</strong> <span class="font-weight-bold">10:00 AM, 28 Mar
                                                2023</span></p>
                                        <p><i class="fas fa-calendar-alt"></i> <strong>Final deadline:</strong> <span
                                                class="font-weight-bold">11:59 PM, 31 Mar 2023</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 mb-3">
                                <a href="https://example.com" class="text-decoration-none text-dark">
                                    <div class="bg-light p-3 text-center">
                                        <i class="fas fa-book fa-3x mb-3"></i>
                                        <h5 class="mb-2">Topic Title</h5>
                                        <p class="mb-1"><i class="fas fa-calendar-alt"></i> <strong>Deadline for
                                                submit:</strong> <span class="font-weight-bold">10:00 AM, 28 Mar
                                                2023</span></p>
                                        <p><i class="fas fa-calendar-alt"></i> <strong>Final deadline:</strong> <span
                                                class="font-weight-bold">11:59 PM, 31 Mar 2023</span></p>
                                    </div>
                                </a>
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
                            <div">
                                <p>
                                    Privacy &#8226; Terms &#8226; Ideas Uni © 2024
                                </p>
                        </div>
                    </div>
                </div>
        </div>
        </div>


        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
        <!-- main js -->
        <script src="./js/main.js"></script>
</body>

</html>