<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: register-login-page.php');
    exit();
}
include 'connect.php';

if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
    header('Location: register-login-page.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$sql_user_info = "SELECT firstName, lastName, email FROM users WHERE id = ?";
$stmt_user_info = $conn->prepare($sql_user_info);
$stmt_user_info->bind_param("i", $user_id);
$stmt_user_info->execute();
$stmt_user_info->bind_result($firstName, $lastName, $email);
$stmt_user_info->fetch();
$stmt_user_info->close();

function getFavoritedPlacesByUserId($userId, $conn) {
    $favoritedPlaces = array();
    $sql = "SELECT title FROM favorites WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->bind_result($title);

    while ($stmt->fetch()) {
        $favoritedPlaces[] = $title;
    }
    $stmt->close();
    return $favoritedPlaces;
}
$favoritedPlaces = getFavoritedPlacesByUserId($user_id, $conn);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/profilestyle.css">
</head>
<body style="background: url(../assets/img/parallex/background2.jpg) no-repeat center center fixed; background-size: cover;">

<section class="header-container">
    <header>
        <nav class="navigation">
            <a href="../index.php">Home<span></span></a>
            <a href="../index.php #states" onclick="smoothScroll(event, 'states')">Discover Malaysia<span></span></a>
            <a href="register-login-page.php" id="loginLink" style="display: none;">Log In</a>
            <a href="profile.php" id="profileLink" class="active">Profile</a>
            <form method="post" style="display: inline;">
                <button type="submit" class="button" name="logout" style="background-color: rgba(255, 166, 0, 0.378); margin-left: 10px;color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Log Out</button>
            </form>
        </nav>
    </header>
</section>

<section class="content-container">

    <div class="profile">
        <div class="profile-picture">
            <img src="../assets/icon/user.png" alt="Profile Picture">
        </div>

    <h2>First Name  : <span style="background-color: hsla(38, 100%, 80%, 0.647); color: black; padding: 4px 8px; border-radius: 4px;"><?php echo $firstName; ?></span></h2>
    <h2>Last Name   : <span style="background-color: hsla(38, 100%, 80%, 0.647); color: black; padding: 4px 8px; border-radius: 4px;"><?php echo $lastName; ?></span></h2>
    <h2>Email       : <span style="background-color: hsla(38, 100%, 80%, 0.647); color: black; padding: 4px 8px; border-radius: 4px;"><?php echo $email; ?></span></h2>
    </div>

    <div class="favorite">
        <h2>Favorited Places:</h2>
        <ul>
            <?php if (!empty($favoritedPlaces)) {?>
                <?php foreach ($favoritedPlaces as $placeName) {?>
                    <li><?= $placeName?></li>
                <?php }?>
            <?php } else {?>
                <p>No favorited places yet!</p>
            <?php }?>
        </ul>
    </div>
    
</section>

<script src="script.js"></script>
</body>
</html>
