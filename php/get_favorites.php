<?php
session_start();
include 'config.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['user_id'];

    $stmt = $conn->prepare("SELECT favorite_id FROM favorites WHERE user_id = ?");
    $stmt->bind_param('i', $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $favorites = [];
    while ($row = $result->fetch_assoc()) {
        $favorites[$row['favorite_id']] = true;
    }

    echo json_encode($favorites);
}
?>
