<?php
session_start();
include("connection.php");
// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["staff_id"])) {
    if ($_SESSION['role_id'] == 1) {
        echo "<script>window.location.href='QAM_Topics.php'</script>";
    } else if ($_SESSION['role_id'] == 2) {
        echo "<script>window.location.href='QAC_Staff.php'</script>";
    } else if ($_SESSION['role_id'] == 3) {
        echo "<script>window.location.href='Staff.php'</script>";
    } else {
        echo "<script>window.location.href='index.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="mswebdialog-title" content="Connecting to University of Greenwich">
    <!-- Display image title -->
    <link rel="icon" type="image/png" href="./img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <style>
        .illustrationClass {
            background-image: url(./img/illustration.jpg)
        }
    </style>
    <title>Sign In</title>
</head>

<body>
<div id="fullPage">
    <div id="brandingWrapper" class="float">
        <div id="branding" class="illustrationClass">
            <div id="brandingTint"></div>
        </div>
    </div>
    <div id="contentWrapper" class="float">
        <div id="content">
            <div id="header">
                <img class="logoImage" id="companyLogo" src="./img/logo.png" alt="University of Greenwich">
            </div>
            <main>
                <div id="workArea">
                    <div id="authArea" class="groupMargin">
                        <div id="loginArea">
                            <div id="loginMessage" class="groupMargin">Sign in</div>
                            <form method="post" id="loginForm" autocomplete="off" novalidate="novalidate" action="">
                                <div id="error" class="fieldMargin error smallText" style="display: none;">
                                    <span id="errorText" for="" aria-live="assertive" role="alert"></span>
                                </div>
                                <div id="formsAuthenticationArea">
                                    <div id="userNameArea" style="display: block;">
                                        <label id="userNameInputLabel" for="userNameInput" class="hidden">User
                                            Account</label>
                                        <input id="EmailInput" name="email" type="email" value="" tabindex="1"
                                               class="text fullWidth" spellcheck="false"
                                               placeholder="username@gre.ac.uk" autocomplete="off">
                                    </div>
                                    <div id="passwordArea" style="display: block;">
                                        <label id="passwordInputLabel" for="passwordInput"
                                               class="hidden">Password</label>
                                        <input id="passwordInput" name="password" type="password" tabindex="2"
                                               class="text fullWidth" placeholder="Password" autocomplete="off">
                                    </div>
                                    <div id="submissionArea" class="submitMargin">
                                        <button type="submit" id="submitButton" class="submit" tabindex="4"
                                                role="button">Sign in
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div id="introduction" class="groupMargin">
                                <br>
                                <table width="100%">
                                    <tbody>
                                    <tr>
                                        <th>
                                            <div style="text-align:left; font-weight:normal"><a
                                                    href="https://passwordreset.microsoftonline.com/?whr=gre.ac.uk">Forgot
                                                    Password?</a>
                                            </div>
                                        </th>
                                        <th>
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <div id="footerPlaceholder"></div>
        </div>
        <footer id="footer">
            <div id="footerLinks" class="floatReverse">
                <div>
                    <span id="copyright">Privacy &#8226; Terms &#8226; Ideas Uni © 2024</span>
                    <a id="home" class="pageLink footerLink " href="#">Home</a>
                    <a id="privacy" class="pageLink footerLink" href="#">Privacy &amp; cookies</a>
                    <a id="helpDesk" class="pageLink footerLink" href="#">Need more help?</a>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>

</html>
<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Staff WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['Password'])) {
            $_SESSION['staff_id'] = $row['StaffID'];
            $_SESSION['full_name'] = $row['FullName'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['phone'] = $row['Phone'];
            $_SESSION['role_id'] = $row['RoleID'];
            $_SESSION['department_id'] = $row['DepartmentID'];
            $_SESSION['login'] = true;

            if (isset($_SESSION['staff_id'])) {
                if ($_SESSION['role_id'] == 1) {
                    echo "<script>window.location.href='QAM_Topics.php'</script>";
                } else if ($_SESSION['role_id'] == 2) {
                    echo "<script>window.location.href='QAC_Staff.php'</script>";
                } else if ($_SESSION['role_id'] == 3) {
                    echo "<script>window.location.href='Staff.php'</script>";
                } else {
                    echo "<script>window.location.href='index.php'</script>";
                }
            }

        } else {
            echo "<script>alert('Password or Username is incorrect')</script>";
        }
    } else {
        echo "<script>alert('Password or Username is incorrect')</script>";
    }
}
?>
