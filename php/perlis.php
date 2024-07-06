<?php
session_start();
$isLoggedIn = isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'];

?>
<script>
  var isLoggedIn = <?php echo $isLoggedIn? 'true' : 'false';?>;
</script>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/perlis.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            .heart-button {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1;
            cursor: pointer;

             }
        </style>
    </head>

    <body>

    <header>
        <nav class="navigation">
        <a href="../index.php" onclick="scrollToTop(event)">Home<span></span></a>
            <a href="../index.php#states" onclick="smoothScroll(event, 'states')">Discover Malaysia<span></span></a>
            <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) : ?>
                <a href="../php/profile.php">Profile<span></span></a>
            <?php else : ?>
                <a href="../php/register-login-page.php">Sign In / Sign Up<span></span></a>
            <?php endif; ?>
        </nav>
    </header>
    
        <section class="main" style="background: url('../assets/img/perlis/header.png') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main"> Perlis </h2>
            <h2 id="h2-1-main">Indera Kayangan</h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/perlis/1.jpg" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Limestone Cave Attraction</span>
                            <h2 class="card__title" id="title">Gua Kelam</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>

                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-7" onclick="toggleFavorite(7, 'Gua Kelam')"></i>
                        </div>
                    
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Gua Kelam</h1>
                                <p>
                                    Gua Kelam, located in Perlis, Malaysia, is a renowned limestone cave known for its natural beauty and historical significance. 
                                    The cave stretches over 370 meters, featuring impressive rock formations and a river that flows through its interior. 
                                    Visitors can explore its caverns and tunnels, illuminated by strategically placed lights that enhance the cave's mystique. 
                                    Gua Kelam offers a unique adventure for nature enthusiasts and history buffs alike, showcasing Perlis's geological wonders and cultural heritage.
                                    <br><br>
                                    Address: Gua Kelam, Kaki Bukit, 01000 Kangar, Perlis, Malaysia<br>
                                    Contact Number: 019-541 1105<br>
                                    Opening Hours: Monday to Sunday: 9:00 AM - 5:00 PM
                            </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/perlis/2.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Timah Tasoh Lake</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-8" onclick="toggleFavorite(8, 'Timah Tasoh Lake')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Timah Tasoh Lake</h1>
                                <p>
                                    Timah Tasoh Lake is a serene freshwater lake nestled amidst lush greenery in Perlis, Malaysia. It offers a tranquil retreat for nature lovers and outdoor enthusiasts alike.
                                    <br><br>
                                    Address: Timah Tasoh Lake, Perlis, Malaysia<br>
                                    Opening Hours: Monday to Sunday: 7:00 AM to 7:00 PM<br><br>
                                    Experience the picturesque surroundings with leisurely walks along the lakeside promenade or enjoy boating activities on its calm waters. 
                                    Timah Tasoh Lake is an ideal spot for picnics and family outings, providing a peaceful escape from the hustle and bustle of city life.
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/perlis/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Cultural</span>
                         <h2 class="card__title" id="title">Al-Hussain Mosque</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-9" onclick="toggleFavorite(9, 'Al-Hussain Mosque')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Al-Hussain Mosque</h1>
                                <p>
                                    Al-Hussain Mosque, located in the heart of Johor Bahru, Malaysia, is a renowned religious landmark known for its exquisite Islamic architecture and serene ambiance. 
                                    The mosque serves as a center for spiritual activities and community gatherings, welcoming visitors from all walks of life to experience its cultural significance and tranquility.
                                    <br><br>
                                    Address: Jalan Kolam Air, Johor Bahru, Malaysia<br>
                                    Contact Number: 011-3545 1301<br>
                                    Opening Hours: Monday to Thursday: 8:00 AM - 12:00 PM, 2:00 PM - 5:00 PM<br>
                                    Friday: Closed for Jumu'ah (Friday prayers)<br>
                                    Saturday and Sunday: 8:00 AM - 12:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/perlis/4.webp" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Nature</span>
                       <h2 class="card__title" id="title">	Bukit Keteri</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-10" onclick="toggleFavorite(10, 'Bukit Keteri')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Bukit Keteri</h1>
                                <p>
                                    Bukit Keteri offers a serene retreat amidst lush greenery in Malaysia's Perlis state. 
                                    Located near the border with Thailand, this scenic hill station provides breathtaking views of the surrounding landscapes and is ideal for nature enthusiasts seeking tranquility.
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/perlis/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Seafood</span>
                       <h2 class="card__title" id="title">	Hai Thien Seafood Restaurant</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-11" onclick="toggleFavorite(11, 'Hai Thien Seafood Restaurant')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Hai Thien Seafood Restaurant</h1>
                                <p>
                                    Located in Perlis, Hai Thien Seafood Restaurant offers a delightful culinary experience with its fresh seafood dishes and vibrant atmosphere.
                                    Whether you're a local resident or a visitor exploring Perlis, this restaurant promises a memorable dining experience.
                                    <br><br>
                                    Address: Jalab Jeti Baru, 02000 Kuala Perlis, Perlis<br>
                                    Contact Number: 012-469 9778<br>
                                    Opening Hours: Monday to Sunday: 4:30 PM - 11:00 PM<br><br>
                                    Enjoy a variety of seafood specialties prepared with local flavors, accompanied by excellent service in a cozy setting at Hai Thien Seafood Restaurant Perlis.
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/perlis/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">International</span>
                       <h2 class="card__title" id="title">Putra Brasmana Hotel Restaurant</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-12" onclick="toggleFavorite(12, 'Putra Brasmana Hotel Restaurant')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Putra Brasmana Hotel Restaurant</h1>
                                <p>
                                    Located in the heart of Perlis, Putra Brasmana Hotel Restaurant offers a delightful culinary experience amidst comfortable accommodations. 
                                    Whether you're visiting for business or leisure, our restaurant provides a cozy ambiance and a diverse menu to suit every palate.
                                    <br><br>
                                    Address: Jalan Kangar-Alor Setar, 01000 Kangar, Perlis, Malaysia<br>
                                    Contact Number: +60 4-977 8777<br>
                                    Opening Hours: Monday to Sunday: 7:00 AM - 10:00 PM <br><br>
                                    Experience the flavors of Perlis with our locally inspired dishes while enjoying warm hospitality and a welcoming atmosphere at Putra Brasmana Hotel Restaurant.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
             </div>
        </section>
        

        <footer>
        <p> 2024 Hello, Malaysia! All rights reserved.</p>
    </footer>
    
    <script>
        function smoothScroll(event, states) {
            event.preventDefault();
            window.location.href = '../index.php#' + states;
        }
    </script>

    <script>
            let favorites = JSON.parse(localStorage.getItem('favorites')) || {};
            
            function toggleFavorite(locationId, title) {
        if (!isLoggedIn) {
            alert("You must be logged in to mark a location as a favorite.");
            return;
        }

        const favoriteIcon = document.getElementById(`favorite-${locationId}`);
        const isFavorite = favoriteIcon.classList.contains('fas');

        if (isFavorite) {
            delete favorites[locationId];
            favoriteIcon.classList.remove('fas');
            favoriteIcon.classList.add('far'); 

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "save_favorite.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    console.log(xhr.responseText);
                }
            };
            xhr.send(`favorite_id=${locationId}&title=${encodeURIComponent(title)}&action=remove`);
        } else {
            favorites[locationId] = true;
            favoriteIcon.classList.add('fas');
            favoriteIcon.classList.remove('far'); 

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "save_favorite.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    console.log(xhr.responseText);
                }
            };
            xhr.send(`favorite_id=${locationId}&title=${encodeURIComponent(title)}`);
        }

        localStorage.setItem('favorites', JSON.stringify(favorites));
    }


            function initFavorites() {
        if (isLoggedIn) {
            for (const locationId in favorites) {
                const favoriteIcon = document.getElementById(`favorite-${locationId}`);
                if (favoriteIcon) {
                    favoriteIcon.classList.add('fas');
                    favoriteIcon.classList.remove('far');
                }
            }
        }
    }

    function resetFavorites() {
        for (const locationId in favorites) {
            const favoriteIcon = document.getElementById(`favorite-${locationId}`);
            if (favoriteIcon) {
                favoriteIcon.classList.remove('fas');
                favoriteIcon.classList.add('far');
            }
        }
        localStorage.removeItem('favorites');
    }

    initFavorites();

    <?php if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) : ?>
    resetFavorites();
    <?php endif; ?>

        </script>

        <script>
        function logout() {
        $.ajax({
            type: 'POST',
            url: 'store_favorites.php',
            data: { favorites: JSON.stringify(favorites) },
            success: function() {
                window.location.href = 'logout.php';
            }
        });
    }

    function login() {
        $.ajax({
            type: 'POST',
            url: 'get_favorites.php',
            success: function(data) {
                favorites = JSON.parse(data);
                initFavorites();
            }
        });
    }

    </script>
  

    <script src="../js/popup.js"></script>
    <script src="../php/script.js"></script>
    <script src="../js/favorite.js"></script>
    </body>