<?php
session_start();

// Define a list of supported languages to avoid arbitrary file inclusion
$supportedBlogs = ['house-hunting', 'blavand', 'aland', 'cybersecurity', 'vasterbotten', 'vestkystruten'];

if (isset($_GET['blog']) && in_array($_GET['blog'], $supportedBlogs)) {
    $_SESSION['blog'] = $_GET['blog'];
}
// Ensure the requested language file exists before requiring it
$blogFile = "article/" . $_SESSION['blog'] . ".php";
if (file_exists($blogFile)) {
    require_once $blogFile;
} else {
    // Handle the case where the language file doesn't exist (e.g., fallback to a default language).
    // You can add code here to provide a graceful error message or take other appropriate actions.
    die("Language file not found.");
}
?>
