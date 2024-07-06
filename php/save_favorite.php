<?php
session_start();
include 'connect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $favorite_id = $_POST['favorite_id'];
    $title = $_POST['title'];
    $user_email = $_SESSION['user_email'];

    $sql = "SELECT id FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user_email);
    $stmt->execute();
    $stmt->bind_result($user_id);
    $stmt->fetch();
    $stmt->close();

    if ($user_id) {
        $sql_check = "SELECT id FROM favorites WHERE user_id = ? AND favorite_id = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("ii", $user_id, $favorite_id);
        $stmt_check->execute();
        $stmt_check->store_result();
        
        if ($stmt_check->num_rows > 0) {
            $sql_delete = "DELETE FROM favorites WHERE user_id = ? AND favorite_id = ?";
            $stmt_delete = $conn->prepare($sql_delete);
            $stmt_delete->bind_param("ii", $user_id, $favorite_id);

            if ($stmt_delete->execute()) {
                echo "Favorite removed successfully";
            } else {
                echo "Error removing favorite: " . $conn->error;
            }

            $stmt_delete->close();
        } else {
            $sql_insert = "INSERT INTO favorites (favorite_id, title, user_id) VALUES (?, ?, ?)";
            $stmt_insert = $conn->prepare($sql_insert);
            $stmt_insert->bind_param("isi", $favorite_id, $title, $user_id);

            if ($stmt_insert->execute()) {
                echo "Favorite added successfully";
            } else {
                echo "Error adding favorite: " . $conn->error;
            }

            $stmt_insert->close();
        }

        $stmt_check->close();
    } else {
        echo "User not found";
    }
}

$conn->close();
?>
