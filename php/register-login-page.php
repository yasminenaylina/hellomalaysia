<?php 
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['signUp'])) {
        $firstName = $_POST['fName'];
        $lastName = $_POST['lName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $checkEmail = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($checkEmail);
        if ($result->num_rows > 0) {
            echo "Email Address Already Exists!";
        } else {
            $insertQuery = "INSERT INTO users(firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
            if ($conn->query($insertQuery) === TRUE) {
                header("Location: register-login-page.php");
                exit();
            } else {
                echo "Error: " . $conn->error;
            }
        }
    }

    if (isset($_POST['signIn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT id, email FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $user_email);
        $stmt->fetch();
        
        // Store email in session
        $_SESSION['user_email'] = $user_email;
        $_SESSION['user_id'] = $user_id;
            $_SESSION['loggedIn'] = true;
            header("Location: profile.php");
            exit();
        } else {
            $error_message = "Incorrect Email or Password"; // Error message to display
        }
    }
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

</head>
<body style="background: url(../assets/img/parallex/background2.jpg) no-repeat center center fixed; background-size: cover;">

    <header>
        <nav class="navigation">
            <a href="../index.php">Home<span></span></a>
            <a href="../index.php #states" onclick="smoothScroll(event, 'states')">Discover Malaysia<span></span></a>
        </nav>
    </header> 

    <div class="container" id="signup" style="display:none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register-login-page.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <div class="links">
            <p>Already Have Account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register-login-page.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <div class="links">
            <p>Don't have an account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    
    <script src="script.js"></script>
    <?php if (isset($error_message)) : ?>
        <div style="text-align: center;">
            <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
