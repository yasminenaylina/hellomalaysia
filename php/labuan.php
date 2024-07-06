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
        <link rel="stylesheet" href="../css/labuan.css">
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
    
        <section class="main" style="background: url('../assets/img/labuan/header.jfif') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main">Labuan</h2>
            <h2 id="h2-1-main">The Pearl of Borneo</h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/labuan/1.jpg" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Cultural</span>
                            <h2 class="card__title" id="title">Labuan Marine Museum</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-37" onclick="toggleFavorite(37, 'Labuan Marine Museum')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Labuan Marine Museum</h1>
                                <p>
                                    Located in Labuan, Malaysia, the Labuan Marine Museum is a captivating destination celebrating the region's rich maritime history and biodiversity.
                                    <br><br>
                                    Address: Jalan Dewan, 87008 Labuan FT, Malaysia<br>
                                    Contact Number: +60 87-408 740<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 9:00 AM - 5:00 PM<br>
                                    Saturday: 9:00 AM - 1:00 PM<br>
                                    Closed on Sundays and public holidays<br><br>
                                    Explore exhibits showcasing marine life, historical artifacts, and the island's naval heritage. Visitors can immerse themselves in Labuan's maritime past and its ecological significance in Southes
                                </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/labuan/2.webp" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Layang-Layang Island</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-38" onclick="toggleFavorite(38, 'Layang-Layang Island')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Layang-Layang Island</h1>
                                <p>
                                    Layang-Layang Island, located in the South China Sea, is a pristine coral atoll renowned for its exceptional diving opportunities and abundant marine life. 
                                    Its remote location and protected status offer a sanctuary for divers and nature enthusiasts alike.
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/labuan/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Historical</span>
                         <h2 class="card__title" id="title">Chimney Museum	</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-39" onclick="toggleFavorite(39, 'Chimney Musuem')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Chimney Museum</h1>
                                <p>
                                    Explore Labuan's industrial heritage at the Chimney Museum, a fascinating glimpse into the island's coal mining past.
                                    <br><br>
                                    Address: Jalan Merdeka, 87000 Labuan FT, Malaysia<br>
                                    Contact Number: +60 87-422 622<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 9:00 AM - 5:00 PM<br>
                                    Saturday: 9:00 AM - 1:00 PM<br>
                                    Sunday: Closed<br><br>
                                    Discover artifacts, exhibits, and the iconic chimney that once served as a crucial part of Labuan's coal mining industry. The museum offers insights into Labuan's historical development and its significance in Malaysia's industrial evolution.
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/labuan/4.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Nature</span>
                       <h2 class="card__title" id="title">Labuan Bird Park</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-40" onclick="toggleFavorite(40, 'Labuan Bird Park')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Labuan Bird Park</h1>
                                <p>
                                    Labuan Bird Park offers a serene sanctuary for avian enthusiasts and nature lovers alike. 
                                    Nestled in the heart of Labuan, this park is home to a diverse array of bird species amidst lush greenery, making it a delightful spot for bird watching and leisurely strolls.
                                    <br><br>
                                    Address: Jalan Pohon Batu, 87000 Labuan FT, Malaysia<br>
                                    Contact Number: +60 87-408 738<br><br>
                                    Opening Hours:<br>
                                    Monday to Sunday: 9:00 AM - 5:00 PM<br><br>
                                    Visit Labuan Bird Park to immerse yourself in the beauty of nature and discover the fascinating world of birds in a tranquil environment.
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/labuan/5.webp" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">International</span>
                       <h2 class="card__title" id="title">Palm Beach Resort & Spa</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-41" onclick="toggleFavorite(41, 'Palm Beach Resort & Spa')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Palm Beach Resort & Spa</h1>
                                <p>
                                    Nestled along the pristine shores of Labuan, Palm Beach Resort & Spa offers a tranquil escape amidst lush tropical surroundings. 
                                    Guests can unwind in luxurious accommodations with stunning views of the South China Sea or indulge in rejuvenating spa treatments. 
                                    The resort’s exquisite dining options showcase local flavors and international cuisine, ensuring a memorable culinary experience. 
                                    Whether lounging by the infinity pool, exploring nearby attractions, or hosting events in sophisticated venues, Palm Beach Resort & Spa promises a perfect blend of relaxation and adventure.
                                    <br><br>
                                    Address: Jalan Batu Manikar, 87000 Labuan FT, Malaysia<br>
                                    Contact Number: +60 87-42 1620<br><br>
                                    Opening Hours:<br>
                                    Reception: 24 hours<br>
                                    Spa: 9:00 AM - 8:00 PM<br>
                                    Restaurants: Breakfast 7:00 AM - 10:30 AM, Lunch 12:00 PM - 3:00 PM, Dinner 6:30 PM - 10:30 PM
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/labuan/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Seafood</span>
                       <h2 class="card__title" id="title">Nelayan Seafood Restaurant</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-42" onclick="toggleFavorite(42, 'Nelayan Seafood Restaurant')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Nelayan Seafood Restaurant</h1>
                                <p>
                                    Experience the flavors of Labuan with a variety of seafood dishes prepared to perfection, accompanied by excellent service and picturesque views. 
                                    Whether you're enjoying a casual meal or celebrating a special occasion, Nelayan Seafood Restaurant is a must-visit destination for seafood lovers in Labuan.
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