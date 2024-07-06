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
        <link rel="stylesheet" href="../css/sabah.css">
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
    
        <section class="main" style="background: url('../assets/img/sabah/photo-1562595437-35c49e56ae3c.avif') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main"> Sabah </h2>
            <h2 id="h2-1-main"> Land Below The Wind </h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/sabah/img1.jpg" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Nature</span>
                            <h2 class="card__title" id="title">Tunku Abdul Rahman Park</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-73" onclick="toggleFavorite(73, 'Tunku Abdul Rahman Park')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Tunku Abdul Rahman Park</h1>
                                <p>
                                    Tunku Abdul Rahman Park is a marine park located off the coast of Kota Kinabalu, Sabah, Malaysia. It consists of five picturesque islands: Gaya, Manukan, Sapi, Sulug, and Mamutik. 
                                    Known for its stunning coral reefs, crystal-clear waters, and rich marine biodiversity, the park offers exceptional opportunities for snorkeling, diving, and beach activities.
                                </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/sabah/2.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Mount Kinabalu</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-74" onclick="toggleFavorite(74, 'Mount Kinabalu')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Mount Kinabalu</h1>
                                <p>
                                    Mount Kinabalu, located in Sabah, Malaysia, is Southeast Asia's highest peak and a UNESCO World Heritage site renowned for its biodiversity and stunning landscapes. 
                                    Rising 4,095 meters above sea level, it offers adventurous climbers breathtaking views and unique flora and fauna. Here are the details:
                                    <br><br>
                                    Opening Hours:<br>
                                    Summit trail: Open 24 hours (with permit)<br>
                                    Kinabalu Park Headquarters: 8:00 AM to 4:00 PM daily
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/sabah/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Poring Hot Springs</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-75" onclick="toggleFavorite(75, 'Poring Hot Springs')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Poring Hot Springs</h1>
                                <p>
                                    Poring Hot Springs, nestled in the foothills of Mount Kinabalu in Sabah, Malaysia, offers a rejuvenating escape amidst lush rainforest surroundings. 
                                    Visitors can unwind in natural hot spring baths renowned for their therapeutic mineral properties. 
                                    The park also features relaxing Japanese-style baths and a canopy walkway for immersive rainforest views.
                                    <br><br>
                                    Address: Poring Hot Springs, Ranau, Sabah, Malaysia<br>
                                    Contact Number: +60 88-889 993<br><br>
                                    Opening Hours:<br>
                                    Monday to Sunday: 7:00 AM - 6:00 PM<br><br>
                                    This serene destination is ideal for nature enthusiasts and those seeking tranquility away from urban bustle, making it a must-visit attraction in Sabah.
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/sabah/4.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Cultural</span>
                       <h2 class="card__title" id="title">Mari Mari Cultural Village</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-76" onclick="toggleFavorite(76, 'Mari Mari Cultural Village')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Mari Mari Cultural Village</h1>
                                <p>
                                    Mari Mari Cultural Village offers a captivating journey into the rich cultural tapestry of Sabah, Malaysia. 
                                    Nestled amidst lush greenery near Kota Kinabalu, this village provides an authentic experience of traditional homes and customs of various indigenous groups in Sabah.
                                    <br><br>
                                    Address: Mari Mari Cultural Village, Inanam, Kota Kinabalu, Sabah, Malaysia<br>
                                    Contact Number: +60 88-260 501<br><br>
                                    Opening Hours:<br>
                                    Monday to Saturday: 9:00 AM - 5:00 PM<br>
                                    Closed on Sundays
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/sabah/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Malaysian</span>
                       <h2 class="card__title" id="title">Fook Yuen Cafe & Bakery</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-77" onclick="toggleFavorite(77, 'Fook Yuen Cafe & Bakery')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Fook Yuen Cafe & Bakery</h1>
                                <p>
                                    Fook Yuen Cafe & Bakery is a beloved establishment in Kota Kinabalu, Malaysia, renowned for its delightful selection of freshly baked goods and comforting cafe fare. 
                                    Nestled in the heart of the city, it offers a cozy ambiance perfect for both casual gatherings and quick bites.
                                    <br><br>
                                    Address: Lot G-23A, Ground Floor, Block G, Karamunsing Complex, 88300 Kota Kinabalu, Sabah, Malaysia<br>
                                    Contact Number: +60 88-232 700<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 7:00 AM - 9:00 PM<br>
                                    Saturday and Sunday: 8:00 AM - 10:00 PM<br><br>
                                    Visit Fook Yuen Cafe & Bakery to savor their freshly brewed coffee, delectable pastries, and a variety of local and international dishes that cater to every palate. 
                                    Whether you're starting your day with a hearty breakfast or unwinding with friends over afternoon tea, Fook Yuen promises a delightful culinary experience in the heart of Kota Kinabalu.
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/sabah/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Italian</span>
                       <h2 class="card__title" id="title">Little Italy	</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-78" onclick="toggleFavorite(78,'Little Italy')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Little Italy</h1>
                                <p>
                                    Little Italy in Kota Kinabalu offers a delightful taste of authentic Italian cuisine amidst the tropical charm of Borneo. 
                                    Nestled in the heart of the city, this cozy restaurant blends Italian flavors with local hospitality, making it a favorite among locals and tourists alike.
                                    <br><br>
                                    Address: Lot G4-5, Ground Floor, Block G, Plaza Tanjung Aru, Jalan Mat Salleh, 88100 Kota Kinabalu, Sabah, Malaysia<br>
                                    Contact Number: +60 88-211 258<br><br>
                                    Opening Hours:<br>
                                    Monday to Thursday: 11:00 AM - 10:00 PM<br>
                                    Friday to Sunday: 11:00 AM - 11:00 PM<br><br>
                                    Experience a slice of Italy in the heart of Borneo at Little Italy, where every dish tells a story of tradition and culinary passion. Whether you're craving handmade pasta, wood-fired pizzas, or gelato, Little Italy promises a memorable dining experience in Kota Kinabalu.
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