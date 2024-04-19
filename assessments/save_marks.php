
<?php


require ('../settings.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate form data
    if (!isset($_POST['marks']) || empty($_POST['marks'])) {
        echo "No marks submitted.";
        exit;
    }

    try {
        // Prepare SQL statement to insert or update marks
        $stmt = $pdo->prepare("INSERT INTO assessment_marks (student_id, class_id, assessment_type, mark)
                                VALUES (:student_id, :class_id, :assessment_type, :mark)
                                ON DUPLICATE KEY UPDATE mark = :mark");

        // Iterate through submitted marks
        foreach ($_POST['marks'] as $studentId => $marks) {
            // Validate student ID
            // Assuming the student ID exists in the database

            // Insert or update marks for each assessment type
            foreach ($marks as $type => $mark) {
                // Validate mark
                if (!is_numeric($mark) || $mark < 0 || $mark > 100) {
                    echo "Invalid mark for student $studentId and assessment type $type. Marks must be numeric and between 0 and 100.";
                    continue;
                }

                // Bind parameters and execute SQL statement
                $stmt->bindParam(':student_id', $studentId, PDO::PARAM_INT);
                $stmt->bindValue(':class_id', 8, PDO::PARAM_INT); // Assuming class_id is fixed for this operation
                $stmt->bindParam(':assessment_type', $type, PDO::PARAM_STR);
                $stmt->bindParam(':mark', $mark, PDO::PARAM_INT);
                $stmt->execute();
            }
        }

        echo "Assessment marks saved successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>
