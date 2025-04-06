<?php
// Initialize session
session_start();

if (!isset($_SESSION['name'])) {
    // If 'name' is not set, redirect to login page
    header('Location: login.php');
    exit();
}

$question = "What is the result of 2 + 3?";
echo $question;
