<?php
    include_once("connection.php");
    //------//
    $sql = "SELECT * FROM Staff";
    $staff_result = mysqli_query($conn, $sql);
    //------//
    $sql = "SELECT * FROM ";
    $idea_result = mysqli_query($conn, $sql);

    if(isset($_POST['add']))
    {
        $comment_id = $_POST['comment_id'];
        $comment_content = $_POST['comment_content'];
        $idea_id = $_POST['idea'];
        $staff_id = $_POST['staff'];

        $sql = "INSERT INTO Comment (CommentID, CommentContent, IdeaID, StaffID) VALUES ('$comment_id', '$comment_content', '$idea_id', '$staff_id')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "New comment added successfully";
        }
        else
        {
            echo "Error adding new comment";
        }
    }
?>