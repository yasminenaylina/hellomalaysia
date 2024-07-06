document.addEventListener('DOMContentLoaded', function() {
    checkLoginStatus();
});

function checkLoginStatus() {
    let isLoggedIn = sessionStorage.getItem('loggedIn') === 'true';

    if (isLoggedIn) {
        document.getElementById('loginLink').style.display = 'none';
        document.getElementById('profileLink').style.display = 'inline-block';
    } else {
        document.getElementById('loginLink').style.display = 'inline-block';
        document.getElementById('profileLink').style.display = 'none';
    }
}


function logout() {
    // Perform logout
    fetch('logout.php')
      .then(response => response.text())
      .then(message => {
            if (message === 'Logged out successfully') {
                // Toggle the visibility of the navigation links
                document.querySelector('.navigation a[href="php/profile.php"]').style.display = 'none';
                document.querySelector('.navigation a[href="index.php"][onclick="logout()"]').style.display = 'none';
                document.querySelector('.navigation a[href="php/register-login-page.php"]').style.display = 'block';
                // Reload the page to reflect the changes
                location.reload();
            }
        });
}