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
        <link rel="stylesheet" href="../css/selangor.css">
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
    
        <section class="main" style="background: url('../assets/img/selangor/header.jpg') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main">Selangor</h2>
            <h2 id="h2-1-main">Darul Ehsan</h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/selangor/1.webp" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Entertainment</span>
                            <h2 class="card__title" id="title">Sunway Lagoon</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-85" onclick="toggleFavorite(85, 'Sunway Lagoon')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Sunway Lagoon</h1>
                                <p>
                                    Located in Petaling Jaya, Malaysia, Sunway Lagoon is a premier multi-park destination offering a variety of thrilling rides, water slides, and family-friendly attractions. 
                                    It is renowned for its extensive water park, wildlife encounters, and adrenaline-pumping activities, making it a popular choice for both locals and tourists seeking fun-filled adventures.
                                    <br><br>
                                    Address: 3, Jalan PJS 11/11, Bandar Sunway, 47500 Subang Jaya, Selangor, Malaysia<br>
                                    Contact Number: +603-5639 0000<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 10:00 AM - 6:00 PM<br>
                                    Saturday and Sunday: 10:00 AM - 7:00 PM<br><br>
                                    Plan your visit to Sunway Lagoon for an unforgettable day of excitement and entertainment!
                                </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/selangor/2.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Cultural</span>
                         <h2 class="card__title" id="title">Batu Caves	</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-86" onclick="toggleFavorite(86, 'Batu Caves')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Batu Caves</h1>
                                <p>
                                    Batu Caves, located just north of Kuala Lumpur, Malaysia, is a renowned Hindu temple complex nestled within limestone cliffs. 
                                    This iconic site is distinguished by its towering statue of Lord Murugan and a series of vibrant, ornately decorated caves and temples dedicated to various Hindu deities. 
                                    Visitors ascend 272 steps to reach the main cave, where natural sunlight illuminates the cavern's interior, highlighting intricate shrines and religious motifs. 
                                    Batu Caves also hosts the annual Thaipusam festival, drawing devotees and tourists alike for its elaborate processions and spiritual rituals.
                                    <br><br>
                                    Address: Batu Caves, Sri Subramaniam Temple, Gombak, 68100 Batu Caves, Selangor, Malaysia<br>
                                    Contact Number: +60 3-6189 6284<br>
                                    Opening Hours: Daily from 6:00 AM to 9:00 PM
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/selangor/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Entertainment</span>
                         <h2 class="card__title" id="title">i-City</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-87" onclick="toggleFavorite(87, 'i-City')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>i-City</h1>
                                <p>
                                    i-City is a renowned leisure and commercial hub located in Shah Alam, Malaysia. 
                                    It is famous for its dazzling LED-lit attractions and vibrant entertainment offerings, making it a popular destination for locals and tourists alike.
                                    <br><br>
                                    Address: Jalan Multimedia, 40000 Shah Alam, Selangor, Malaysia<br>
                                    Contact Number: +603-5521 8811<br><br>
                                    Opening Hours:<br>
                                    Monday to Thursday: 5:00 PM - 12:00 AM<br>
                                    Friday: 5:00 PM - 1:00 AM<br>
                                    Saturday: 12:00 PM - 1:00 AM<br>
                                    Sunday: 12:00 PM - 12:00 AM<br><br>
                                    Visit i-City to experience its enchanting light displays, exciting rides, and diverse dining options, promising a memorable outing for visitors of all ages.
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/selangor/4.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Entertainment</span>
                       <h2 class="card__title" id="title">Sepang International Circuit	</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-88" onclick="toggleFavorite(88, 'Sepang International Circuit')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Sepang International Circuit</h1>
                                <p>
                                    Located in Sepang, Malaysia, Sepang International Circuit is renowned for hosting prestigious motorsport events including Formula 1 Malaysian Grand Prix and MotoGP races. 
                                    The circuit offers an exhilarating experience for motorsport enthusiasts with its state-of-the-art facilities and challenging track layout.
                                    <br><br>
                                    Address: Jalan Pekeliling, 64000 Sepang, Selangor, Malaysia<br>
                                    Contact Number: +603-8778 2200<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 9:00 AM - 6:00 PM<br>
                                    Saturday: 9:00 AM - 1:00 PM<br>
                                    Closed on Sundays
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/selangor/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Indian</span>
                       <h2 class="card__title" id="title">Nirwana Maju</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-89" onclick="toggleFavorite(89, 'Nirwana Maju')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Nirwana Maju</h1>
                                <p>
                                    Nirwana Maju, located in Selangor, is a renowned South Indian restaurant celebrated for its authentic flavors and vibrant ambiance.
                                    <br><br>
                                    Address: 43, Jalan Telawi 3, Bangsar Baru, 59100 Kuala Lumpur, Selangor, Malaysia<br>
                                    Contact Number: +603-2287 8445<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 11:00 AM to 11:00 PM<br>
                                    Saturday and Sunday: 8:00 AM to 11:30 PM
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/selangor/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Western</span>
                       <h2 class="card__title" id="title">Betty's Midwest Kitchen</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-90" onclick="toggleFavorite(90, 'Bettys Midwest Kitchen')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Betty's Midwest Kitchen</h1>
                                <p>
                                    Located in the heart of Selangor, Betty's Midwest Kitchen brings the flavors of authentic Midwestern cuisine to Malaysia. 
                                    Nestled in a cozy corner of town, this beloved restaurant offers a warm atmosphere and hearty dishes that evoke the essence of American comfort food. 
                                    Indulge in classics like chicken fried steak, macaroni and cheese, and homemade pies that promise to satisfy any craving for hearty American fare.
                                    <br><br>
                                    Address: 22, Jalan USJ 13/1, Subang Jaya, Selangor<br>
                                    Contact Number: +603-8023 0382<br><br>
                                    Opening Hours:<br>
                                    Monday to Thursday: 11:30 AM - 10:00 PM<br>
                                    Friday and Saturday: 11:30 AM - 11:00 PM<br>
                                    Sunday: 11:30 AM - 10:00 PM
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