<?php
include("connection.php");

// Get the current topic ID
$topic_id = $_GET['topic'];

// Set the directory where uploaded files are stored
$upload_dir = 'uploads';

// Query the Document table to get the file paths of all uploaded files for the current topic
$query = "SELECT DocumentPath FROM Document WHERE IdeaID IN (SELECT IdeaID FROM Idea WHERE TopicID = $topic_id)";
$result = mysqli_query($conn, $query);

// Check if any files were found
if (mysqli_num_rows($result) == 0) {
    // Display an alert if there are no uploaded files for the current topic
    echo '<script>alert("No files uploaded for this topic.");</script>';
    echo '<script>window.location.href = "QAM_Ideas.php?topic=' . $topic_id . '";</script>';
} else {
    // Create a temporary file to store the compressed archive
    $zip_file = tempnam($upload_dir, 'zip');

    // Create a new ZipArchive object
    $zip = new ZipArchive();


    // Open the temporary file in write mode
    if ($zip->open($zip_file, ZipArchive::CREATE) !== TRUE) {
        // Display an alert if the archive cannot be created
        echo '<script>alert("Cannot create archive.");</script>';
        echo '<script>window.location.href = "QAM_Ideas.php?topic=' . $topic_id . '";</script>';
    }


    // Loop through the files and add them to the archive
    while ($row = mysqli_fetch_assoc($result)) {
        $file_path = $upload_dir . '/' . str_replace('uploads/', '', $row['DocumentPath']);
        if (file_exists($file_path)) {
            $zip->addFile($file_path, $row['DocumentPath']);
        }
    }


    // Close the archive
    $zip->close();

    // Download the archive
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="uploaded_files_topic_' . $topic_id . '.zip";');
    header('Content-Length: ' . filesize($zip_file));

    // Read the file to the browser
    readfile($zip_file);

    // Delete the temporary file
    unlink($zip_file);
}
?>
