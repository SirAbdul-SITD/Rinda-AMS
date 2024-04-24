<?php
// Include your database connection file (e.g., settings.php)
require('db.php');

// Check if form data is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize response array
    $response = array();

    // Retrieve form data
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    // Validate email and password
    if (!empty($email) && !empty($password)) {
        // Check if email exists in database
        $query = "SELECT * FROM super_admin WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify password if user exists
        if ($user && password_verify($password, $user['password'])) {
            // Login successful
            $response['success'] = true;
            $response['message'] = 'Login successful.';
            $response['sessionId'] = session_id(); // You can generate a custom session ID if needed
            // After confirming the credentials
            $_SESSION['user_id'] = session_id(); // Set user ID
            $_SESSION['email'] = $email; // Set email

        } else {
            // Login failed
            $response['success'] = false;
            $response['message'] = 'Incorrect email or password.';
        }
    } else {
        // Invalid or missing email/password
        $response['success'] = false;
        $response['message'] = 'Please provide both email and password.';
    }

    // Output JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // If form data is not submitted via POST, return an error
    $response['success'] = false;
    $response['message'] = 'Invalid request.';
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>