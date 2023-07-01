<?php

// Start the session
session_start();

// Check if user has selected dark mode
$darkMode = isset($_SESSION['darkMode']) ? $_SESSION['darkMode'] : false;

// Toggle the dark mode
if ($darkMode) {
  // Disable dark mode
  unset($_SESSION['darkMode']);
} else {
  // Enable dark mode
  $_SESSION['darkMode'] = true;
}

// Redirect back to the previous page
$previousPage = $_SERVER['HTTP_REFERER'];
header("Location: $previousPage");
exit();
?>
