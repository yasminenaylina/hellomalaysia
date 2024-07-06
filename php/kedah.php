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
        <link rel="stylesheet" href="../css/kedah.css">
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
    
        <section class="main" style="background: url('../assets/img/kedah/header.webp') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main"> Kedah </h2>
            <h2 id="h2-1-main"> Negeri Jelapang Padi </h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/kedah/1.avif" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Nature</span>
                            <h2 class="card__title" id="title">Langkawi Sky Bridge</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-19" onclick="toggleFavorite(19, 'Langkawi Sky Bridge')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Langkawi Sky Bridge</h1>
                                <p>
                                Perched atop Gunung Mat Cincang on the island of Langkawi, Malaysia, the Langkawi Sky Bridge is a marvel of engineering and a must-visit attraction for nature enthusiasts and thrill-seekers alike. 
                                This curved pedestrian bridge spans 125 meters across the lush greenery of the Gunung Mat Cincang forest reserve, offering breathtaking panoramic views of the Andaman Sea and surrounding islands. 
                                Visitors can reach the bridge via the Langkawi Cable Car, which provides a scenic ride up the mountain.
                                <br><br>
                                Address: Gunung Mat Cincang, 07000 Langkawi, Kedah, Malaysia<br>
                                Contact Number: +60 4-959 4225<br><br>
                                Opening Hours: <br>
                                - Monday to Thursday: 10:00 AM - 7:00 PM<br>
                                - Friday to Sunday: 9:30 AM - 7:00 PM
                                <br><br>
                                Experience the thrill of walking among the clouds and capturing unforgettable vistas at the Langkawi Sky Bridge, a true testament to Malaysia's natural beauty and architectural ingenuity.
                                </p>
                            </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/kedah/2.jfif" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Cultural</span>
                         <h2 class="card__title" id="title">Mahsuri's Tomb</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-20" onclick="toggleFavorite(20, 'Mahsuris Tomb')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Mahsuri's Tomb</h1>
                                <p>
                                    Mahsuri's Tomb is a historical site located in Langkawi, Malaysia, steeped in local folklore and legend. 
                                    According to legend, Mahsuri, a young woman wrongly accused of adultery, cursed the island with seven years of bad luck before her unjust execution. 
                                    Her tomb, surrounded by serene gardens, stands as a testament to her tragic tale and attracts visitors seeking a glimpse into Langkawi's rich cultural heritage.
                                    <br><br>
                                    Address: Mahsuri's Tomb, Kampung Mawar, 07000 Langkawi, Kedah, Malaysia<br>
                                    Contact Number: +60 4-955 7155<br>
                                    Opening Hours: Daily, 8:00 AM to 6:00 PM<br>
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/kedah/3.jpeg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Langkawi Wildlife Park</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-21" onclick="toggleFavorite(21, 'Langkawi Wildlife Park')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Langkawi Wildlife Park</h1>
                                <p>
                                    Langkawi Wildlife Park offers visitors a fascinating glimpse into Malaysia's diverse wildlife. 
                                    Situated amidst lush greenery, the park showcases a variety of exotic animals in naturalistic habitats. 
                                    Visitors can explore interactive exhibits and enjoy up-close encounters with birds, reptiles, and mammals from around the world.
                                    <br><br>
                                    Address: Lot 1485, Jalan Ayer Hangat, Kampung Belanga Pecah, 07000 Langkawi, Kedah, Malaysia<br>
                                    Contact Number: +604-966 5855<br>
                                    Opening Hours: Monday to Sunday: 8:30 AM - 6:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/kedah/4.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Entertainment</span>
                       <h2 class="card__title" id="title">Underwater World Langkawi</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-22" onclick="toggleFavorite(22, 'Underwater World Langkawi')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Underwater World Langkawi</h1>
                                <p>
                                    Underwater World Langkawi is one of the largest marine and freshwater aquaria in Southeast Asia, located in the heart of Pantai Cenang.
                                    This captivating attraction features over 200 species of marine life, including sharks, rays, and a variety of tropical fish. 
                                    Visitors can stroll through the tunnel tank and marvel at the diverse underwater ecosystems, making it a perfect destination for families and marine enthusiasts alike.
                                    <br><br>
                                    Address: Jalan Pantai Cenang, 07000 Langkawi, Kedah, Malaysia<br>
                                    Contact Number: +60 4-955 6100<br>
                                    Opening Hours: Daily from 10:00 AM to 6:00 PM<br>
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/kedah/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Western</span>
                       <h2 class="card__title" id="title">	Scarborough Fish & Chips</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-23" onclick="toggleFavorite(23, 'Scarborough Fish & Chips')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Scarborough Fish & Chips</h1>
                                <p>
                                    Located in the heart of Kedah, Scarborough Fish & Chips offers a delightful taste of traditional British cuisine amidst the Malaysian landscape. 
                                    Our commitment to quality and authenticity ensures a memorable dining experience for locals and visitors alike.
                                    <br><br>
                                    Address: Lot 1388, Jalan Tanjung Rhu, Mukim Air Hangat, 07100 Langkawi, Kedah<br>
                                    Contact Number: 04-959 4667<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 11:00 AM - 10:00 PM<br>
                                    Saturday and Sunday: 10:00 AM - 11:00 PM<br><br>
                                    Come and savor our crispy fish fillets and golden fries, served with a variety of delicious sauces and sides. Whether you're craving a quick bite or a leisurely meal, Scarborough Fish & Chips Kedah is your destination for authentic British flavors in Kedah.
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/kedah/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Middle Eastern</span>
                       <h2 class="card__title" id="title">Yasmin Syrian Restaurant</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-24" onclick="toggleFavorite(24, 'Yasmin Syrian Restaurant')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Yasmin Syrian Restaurant</h1>
                                <p>
                                    Located in the heart of Kedah, Yasmin Syrian Restaurant offers a delightful taste of authentic Syrian cuisine. Situated at:
                                    <br><br>
                                    Address: Pantai Cenang Kampung Lubok Buaya, 07000 Langkawi, Kedah<br>
                                    Contact Number: 011-2148 0461<br><br>
                                    Opening Hours:<br>
                                    Monday to Saturday: 11:00 AM - 10:00 PM<br>
                                    Sunday: Closed<br><br>
                                    Indulge in flavorful dishes such as kebabs, falafel, and traditional Syrian desserts in a cozy atmosphere that reflects the warmth of Syrian hospitality. 
                                    Whether dining in or ordering takeout, Yasmin Syrian Restaurant promises a culinary experience that transports you to the heart of Syria.
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