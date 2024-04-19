
<?php

require('../settings.php');

$user = 1;


if (
    isset($_POST['id'],
    $_POST['name'],
    $_POST['start'],
    $_POST['end'],
    $_POST['class_id'],
    $_POST['marks'])
) {

    // Get posted values
    $id = $_POST['id'];
    $name = $_POST['name'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $class_id = $_POST['class_id'];
    $marks = $_POST['marks'];

    // Check if any designation already has the new name
    $query = "SELECT * FROM assessment_types WHERE `assessment_type` = :name AND `class_id` = :class_id AND `id` != :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':class_id', $class_id, PDO::PARAM_INT);
    $stmt->execute();
    $existingType = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existingType) {
        // designation with the same name already exists
        $response = ['success' => false, 'message' => 'Assessment Type with the same name already exists in class!'];
    } else {
        // Update the designation
        $query = "UPDATE assessment_types SET `assessment_type` = :name, `marks` = :marks, `class_id` = :class_id, `start` = :start, `deadline` = :deadline WHERE `id` = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':marks', $marks, PDO::PARAM_INT);
        $stmt->bindParam(':class_id', $class_id, PDO::PARAM_INT);
        $stmt->bindParam(':start', $start, PDO::PARAM_STR);
        $stmt->bindParam(':deadline', $end, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Success message
        $response = ['success' => true, 'message' => 'Assessment type updated successfully.'];
    }
} else {
    // Invalid request: designation ID, name, salary, or department ID is not provided
    $response = ['success' => false, 'message' => 'Invalid request. Please provide all form fields.'];
}

// Output the JSON response
echo json_encode($response);
?>