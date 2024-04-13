<?php
require 'settings.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'id' and 'newTitle' parameters are set
    if (isset($_POST['id']) && isset($_POST['newTitle'])) {
        // Retrieve the document ID and new title from the POST parameters
        $id = $_POST['id'];
        $newTitle = $_POST['newTitle'];

        try {
            // Update the document title in the database
            // Replace 'your_table_name' with the actual name of your documents table
            $query = "UPDATE files SET title = :title WHERE id = :id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':title', $newTitle, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            // Return a success message
            $response = array('status' => 'success', 'message' => 'Document renamed successfully');
            echo json_encode($response);
        } catch (PDOException $e) {
            // Return an error message if the query fails
            $response = array('status' => 'error', 'message' => 'Error renaming document: ' . $e->getMessage());
            echo json_encode($response);
        }
    } else {
        // Return an error message if 'id' or 'newTitle' parameters are missing
        $response = array('status' => 'error', 'message' => 'ID or new title not provided');
        echo json_encode($response);
    }
} else {
    // Return an error message if the request method is not POST
    $response = array('status' => 'error', 'message' => 'Invalid request method');
    echo json_encode($response);
}
?>
