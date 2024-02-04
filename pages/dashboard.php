<?php
session_start(); // Must be called before accessing any session data

if (isset($_SESSION['username'])) {
    echo '<h1>Welcome, ' . $_SESSION['username'] . '</h1>';
    echo '<a href="logout.php">Logout</a>';
} else {
    echo '<h1>Welcome, Guest</h1>';
    echo '<a href="http://localhost:9900/index.php">Home</a>';
}
