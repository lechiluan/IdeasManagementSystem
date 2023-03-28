<?php
    include_once("connection.php");

    $sql = "SELECT * FROM Idea";
    $idea_result = mysqli_query($conn,$sql);

    if(isset($_POST['add']))
    {
        $document_id = $_POST['document_id'];
        $documnet_path = $_POST['document_path'];
        $idea_id = $_POST['idea'];

        $sql = "INSERT INTO Document(DocumentID, DocumentPath, IdeaID) VALUES ('$document_id', '$documnet_path', '$idea_id')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "New Document added successfully";
        }
        else
        {
            echo "Error adding new document";
        }
    }
?>