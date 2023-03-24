<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UOG - Ideas Submission </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <?php
    session_start();
    include("connection.php");
    ?>
    <header>
        <h1>UOG - Ideas Submission</h1>
        <a href="index.php?page=login">Login</a>
        <a href="index.php?page=view_role">View Role</a>
        <a href="index.php?page=view_department">View Department</a>
        <a href="index.php?page=view_staff">View Staff</a>
        <a href="index.php?page=logout">Logout</a>
        <?php if (isset($_SESSION['email'])) {
            echo "<p>Logged in as " . $_SESSION['email'] . "</p>";
        } ?>

    </header>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == "login") {
            include_once("html/account/login.php");
        } else if ($page == "logout") {
            include_once("html/account/logout.php");
        } else if ($page == "view_department") {
            include_once("html/manage_department/view_department.php");
        } else if ($page == "add_department") {
            include_once("html/manage_department/add_department.php");
        } else if ($page == "update_department") {
            include_once("html/manage_department/update_department.php");
        } else if ($page == "view_role") {
            include_once("html/manage_role/view_role.php");
        } else if ($page == "add_role") {
            include_once("html/manage_role/add_role.php");
        } else if ($page == "update_role") {
            include_once("html/manage_role/update_role.php");
        } else if ($page == "view_staff") {
            include_once("html/manage_staff/view_staff.php");
        } else if ($page == "add_staff") {
            include_once("html/manage_staff/add_staff.php");
        } else if ($page == "update_staff") {
            include_once("html/manage_staff/update_staff.php");
        } else {
            include_once("html/account/login.php");
        }
    } else {
        include_once("html/account/login.php");
    }
    ?>

    <!-- Script Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>