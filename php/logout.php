<?php
session_start();
unset($_SESSION['loggedIn']);
session_destroy();
echo 'Logged out successfully';
?>