<?php
    include_once("connection.php");
    if(isset($_GET['id']))
    {
        $id = $_GET["id"];
        $sql = "SELECT * FROM Comment WHERE CommentID = '$id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $comment_id = $row["CommentID"];
            $commnet_content = $row["CommentContent"];
            $idea_id = $row["IdeaID"];
            $staff_id = $row['StaffID'];
        }
        else
        {
            header("Location: view_comment.php");
            exit();
        }
    }
    else
    {
        $comment_id = "";
        $commnet_content = "";
        $idea_id = "";
        $staff_id = "";
    }

    if(isset($_POST["update"]))
    {
        $comment_id = $_POST['comment_id'];
        $comment_content = $_POST['comment_content'];
        $idea_id = $_POST['idea'];
        $staff_id = $_POST['staff'];

        $sql = "UPDATE Comment SET CommmentID = '$comment_id', CommentContent = '$comment_content',IdeaID = '$idea_id', StaffID = '$staff_id'";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "Comment update successfully";
        }
        else
        {
            echo "Error updating comment";
        }
    }
?>