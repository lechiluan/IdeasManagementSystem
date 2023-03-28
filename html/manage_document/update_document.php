<?php
    include_once("connection.php");
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $sql = "SELECT * FROM Document WHERE DocumentID = '$id'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $document_id = $row["DocumentID"];
            $document_path = $row["DocumentPath"];
            $idea_id = $row["IdeaID"];
        }
        else
        {
            header("Location: view_document.php");
            exit();
        }
    }
    else
    {
        $document_id = "";
        $document_path = "";
        $idea_id = "";
    }

    if(isset($_POST["update"]))
    {
        $document_id = $_POST['document_id'];
        $document_path = $_POST['document_path'];
        $idea_id = $_POST['idea_id'];

        $sql = "UPDATE Document SET DocumentPath = '$document_path', IdeaID = '$idea_id' WHERE DocumentID = '$id'";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "Document update successfully";
        }
        else
        {
            echo "Error updating document";
        }
    }
?>