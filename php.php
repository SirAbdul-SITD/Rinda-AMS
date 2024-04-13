<?php
// Include your database connection file
include "settings.php"; // Replace "db_connection.php" with the actual filename

// Define an array of invoice item descriptions
$invoiceItemDescriptions = ['Tuition Fee', 'Books', 'Uniform', 'Activity Fee', 'Transportation Fee', 'Exam Fee', 'Miscellaneous'];

// Retrieve existing invoices
$stmt = $pdo->prepare("SELECT * FROM invoice");
$stmt->execute();
$invoices = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Loop through each invoice
foreach ($invoices as $invoice) {
    // Determine the number of invoice items for this invoice (random number between 1 and 5)
    $numItems = mt_rand(1, 5);

    // Loop to generate invoice items
    for ($i = 0; $i < $numItems; $i++) {
        // Select a random invoice item description
        $description = $invoiceItemDescriptions[array_rand($invoiceItemDescriptions)];

        // Generate random quantity and unit price
        $quantity = mt_rand(1, 5); // Random quantity between 1 and 5
        $unitPrice = mt_rand(10, 100); // Random unit price between 10 and 100

        // Calculate total price for this item
        $totalPrice = $quantity * $unitPrice;

        // Insert the invoice item record into the database using the invoice's ID
        $stmt = $pdo->prepare("INSERT INTO invoice_Item (invoice_id, description, amount, quantity, unit_price) 
                               VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$invoice['id'], $description, $totalPrice, $quantity, $unitPrice]);
    }
}

// Close the database connection
$pdo = null;

echo "Invoice items generated successfully!";
?>
