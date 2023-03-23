<?php
    include_once("connection.php");
    if(isset($_POST["btnAdd"]))
    {
        $id = $_POST["txtID"];
        $name = $_POST["txtName"];
        $email = $_POST["txtEmail"];
        $phone = $_POST["txtPhone"];
        $password = $_POST["txtPassword"];
        //RoleID
        //$department = $_POST["DepartmentList"];
        $err="";
        //Exception
        if($id=="")
        {
            $err .="<li>Enter Staff ID, please</li>";
        }
        if($name=="")
        {
            $err .="<li>Enter Staff Name, please</li>";
        }
        if($email=="")
        {
            $err .="<li>Enter Staff Email, please</li>";
        }
        if($phone=="")
        {
            $err .="<li>Enter Staff Phone, please</li>";
        }
        if($password=="")
        {
            $err .="<li>Enter Staff Password, please</li>";
        }
        if($err!="")
        {
            echo "<ul> $err </ul>";
        }
        else
        {
            $id =htmlspecialchars(mysqli_real_escape_string($conn,$id));
            $name =htmlspecialchars(mysqli_real_escape_string($conn,$name));
            $email =htmlspecialchars(mysqli_real_escape_string($conn,$email));
            $phone =htmlspecialchars(mysqli_real_escape_string($conn,$phone));
            $password =htmlspecialchars(mysqli_real_escape_string($conn,$password));
            //
            
        }
    }
?>