<?php
$ds = DIRECTORY_SEPARATOR;
$storeFolder = 'uploads';

if (!empty($_FILES)) {
    $tempFile = $_FILES['file']['tmp_name'];
    $originalFilename = $_FILES['file']['name'];
    
    // Rename the file
    $extension = pathinfo($originalFilename, PATHINFO_EXTENSION); // Get the file extension
    $newFilename = uniqid() . '_' . time() . '.' . $extension; // Generate a unique filename
    
    // Set the target directory
    $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;
    
    // Set the target file path with the new filename
    $targetFile = $targetPath . $newFilename;
    
    // Move the uploaded file to the target directory with the new filename
    move_uploaded_file($tempFile, $targetFile);
}
?>
