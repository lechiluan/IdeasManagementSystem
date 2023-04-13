<?php
include("connection.php");
session_start(); // Start the session
// check if user is logged in
if (!isset($_SESSION['staff_id'])) {
    header('Location: login.php');
    exit();
}

$staffID = $_SESSION['staff_id'];

// check if request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ideaID = $_POST['idea_id'];
    $status = $_POST['status'];

    // check if user has already voted on this idea
    $check_sql = "SELECT * FROM Vote WHERE IdeaID = $ideaID AND StaffID = $staffID";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        // user has already voted on this idea, update the vote status
        $vote = mysqli_fetch_assoc($check_result);
        $voteID = $vote['VoteID'];

        $update_sql = "UPDATE Vote SET Status = $status WHERE VoteID = $voteID";
        mysqli_query($conn, $update_sql);
    } else {
        // user has not voted on this idea, insert new vote
        $insert_sql = "INSERT INTO Vote (Status, IdeaID, StaffID) VALUES ($status, $ideaID, $staffID)";
        mysqli_query($conn, $insert_sql);
    }

    // get the count of likes and dislikes for the idea
    $likes_sql = "SELECT COUNT(*) AS LikeCount FROM Vote WHERE IdeaID = $ideaID AND Status = 1";
    $likes_result = mysqli_query($conn, $likes_sql);
    $likes_count = mysqli_fetch_assoc($likes_result)['LikeCount'];

    $dislikes_sql = "SELECT COUNT(*) AS DislikeCount FROM Vote WHERE IdeaID = $ideaID AND Status = 0";
    $dislikes_result = mysqli_query($conn, $dislikes_sql);
    $dislikes_count = mysqli_fetch_assoc($dislikes_result)['DislikeCount'];

    // return the counts as a JSON response
    $response = array('like' => $likes_count, 'dislike' => $dislikes_count);
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
