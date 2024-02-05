<?php
// Check if the user is signed in; replace this with your actual authentication logic
$signedIn = true;

if (!$signedIn) {
    // If not signed in, deny access
    header('HTTP/1.1 403 Forbidden');
    echo 'Access Denied. Please sign in to download the folder.';
    exit;
}

$file = $_GET['file'];

// Set the content type and headers for downloading
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
header('Content-Length: ' . filesize($file));

// Output an empty string to simulate an empty file
echo '';

// Exit to prevent further execution
exit;
?>

