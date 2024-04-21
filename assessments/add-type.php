<?php require('../settings.php');
try {
    if (isset($_POST['name'], $_POST['start'], $_POST['end'], $_POST['class_id'], $_POST['marks'])) {
        // Get posted values
        $name = $_POST['name'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $class_id = $_POST['class_id'];
        $marks = $_POST['marks'];
        // Prepare statement
        $stmt = $pdo->prepare("INSERT INTO assessment_types (assessment_type, marks, class_id, start, deadline) VALUES (:name, :marks, :class_id, :start, :deadline)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':marks', $marks);
        $stmt->bindParam(':class_id', $class_id);
        $stmt->bindParam(':start', $start);
        $stmt->bindParam(':deadline', $end);
        // Execute query
        $stmt->execute();
        $response = ['success' => true, 'message' => 'Assessment type added successfully.'];
    } else {
        $response = ['success' => false, 'message' => 'Invalid request. Please provide all fields.'];
    }
} catch (PDOException $e) {
    $response = ['success' => false, 'message' => 'Database error: ' . $e->getMessage()];
}
echo json_encode($response); ?>