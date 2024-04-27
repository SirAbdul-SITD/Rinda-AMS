<?php

// Include your database connection file (e.g., settings.php)
require('db.php');

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize response array
    $response = array();

    // Retrieve form data
    $email = $_POST['email'] ?? null;
    $firstname = $_POST['firstname'] ?? null;
    $lastname = $_POST['lastname'] ?? null;
    $password = $_POST['password'] ?? null;
    $confirmPassword = $_POST['confirm_password'] ?? null;

    // Perform validation
    if (empty($email) || empty($firstname) || empty($lastname) || empty($password) || empty($confirmPassword)) {
        $response['success'] = false;
        $response['message'] = "All fields are required.";
    } elseif ($password !== $confirmPassword) {
        $response['success'] = false;
        $response['message'] = "Passwords do not match.";
    } else {
        try {
            // Check if email already exists
            $query = "SELECT COUNT(*) FROM admin WHERE email = :email";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $emailExists = $stmt->fetchColumn();

            if ($emailExists) {
                $response['success'] = false;
                $response['message'] = "Email already exists. Please choose a different email.";
            } else {
                // Hash the password
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $type = 'admin';

                // Prepare SQL statement to insert data into super_admin table
                $insertQuery = "INSERT INTO admin (email, first_name, last_name, password, type) 
                                VALUES (:email, :firstname, :lastname, :password, :type)";
                $insertStmt = $pdo->prepare($insertQuery);
                $insertStmt->bindParam(':email', $email);
                $insertStmt->bindParam(':firstname', $firstname);
                $insertStmt->bindParam(':lastname', $lastname);
                $insertStmt->bindParam(':type', $type);
                $insertStmt->bindParam(':password', $hashedPassword);
                $insertStmt->execute();

                // Set success response
                $response['success'] = true;
                $response['message'] = "Registration successful. You can now login.";
            }
        } catch (PDOException $e) {
            // Handle database errors
            $response['success'] = false;
            $response['message'] = "Error: " . $e->getMessage();
        }
    }

    // Output JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
   // Set success response
   $response['success'] = true;
   $response['message'] = "Nothing Submitted";
    exit();
}
?>
