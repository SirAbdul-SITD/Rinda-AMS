<?php require('../settings.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Assessment Marks</title>
</head>
<body>
    <h2>Add Assessment Marks</h2>
    <form action="save_marks.php" method="post">
        <?php
        // Retrieve assessment types from the database
        $sql = "SELECT DISTINCT assessment_type FROM assessment_type WHERE class_id = 8";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $assessmentTypes = $stmt->fetchAll(PDO::FETCH_COLUMN);

        // Retrieve students in class with ID 8
        $sql = "SELECT * FROM students WHERE class_id = 8 AND status = 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Generate input fields for each student and assessment type
        foreach ($students as $student) {
            echo "<h3>Student: {$student['lastName']}</h3>";
            foreach ($assessmentTypes as $type) {
                echo "<label>$type Mark:</label>";
                echo "<input type='text' name='marks[{$student['id']}][$type]' required>";
                echo "<br>";
            }
        }
        ?>
        <button type="submit">Save Marks</button>
    </form>
</body>
</html>
