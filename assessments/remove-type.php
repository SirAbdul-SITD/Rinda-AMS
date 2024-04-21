<?php

require('../settings.php');

$user = 1;

// Check if Designation ID and name are set in the POST data
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Remove the Designation
    $query = "DELETE FROM assessment_types WHERE `assessment_id` = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Check if any rows were affected (i.e., if the Designation was successfully removed)
    $rowCount = $stmt->rowCount();
    if ($rowCount > 0) {
        // Success message
        $response = ['success' => true, 'message' => 'Assessment type removed successfully.'];
    } else {
        // No Designation found with the provided ID
        $response = ['success' => false, 'message' => 'Assessment Type not found.'];
    }
} else {
    // Invalid request: Designation ID is not provided
    $response = ['success' => false, 'message' => 'Invalid request. Please select an assessment to remove.'];
}

// Output the JSON response
echo json_encode($response);
?>
