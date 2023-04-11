
<header>
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
                                <li class="dropdown-item p-1 rounded d-flex" type="button" onclick="window.location.href = 'Settings.php';">
                                    <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover;">
                                    <div>
                                        <p class="m-0"></p>
                                        <p class="m-0 text-muted">My Profile</p>
                                    </div>
                                </li>

                                <hr />
                                <!-- log out -->
                                <li class="dropdown-item p-1 rounded d-flex align-items-center" type="button" onclick="window.location.href = 'index.php';">
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
        </header>
        