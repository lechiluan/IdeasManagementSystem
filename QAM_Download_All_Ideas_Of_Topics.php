<?php
include("connection.php");
if (isset($_GET['topic'])) {
    // Get the current topic ID
    $topic_id = $_GET['topic'];

    // Query the database to get all ideas of the current topic
    $sql = "SELECT * FROM Idea WHERE TopicID = $topic_id";
    $result = mysqli_query($conn, $sql);

    // Create a new file for exporting the ideas to CSV
    $filename = "ideas.csv";
    $file = fopen($filename, "w");

    // Write the column headers to the file
    $headers = array("IdeaID", "Title", "Content", "is_anonymous", "PostDate", "StaffID", "TopicID");
    fputcsv($file, $headers);

    // Loop through the ideas and write them to the file
    while ($row = mysqli_fetch_assoc($result)) {
        $data = array(
            $row["IdeaID"],
            $row["Title"],
            $row["Content"],
            $row["is_anonymous"],
            $row["PostDate"],
            $row["StaffID"],
            $row["TopicID"]
        );
        fputcsv($file, $data);
    }

    // Close the file and database connection
    fclose($file);
    mysqli_close($conn);

    // Download the CSV file
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    readfile($filename);
}
?>