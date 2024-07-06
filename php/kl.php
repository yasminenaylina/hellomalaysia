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
        <link rel="stylesheet" href="../css/kl.css">
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
    
        <section class="main" style="background: url('../assets/img/kl/header.webp') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main">Kuala Lumpur</h2>
            <h2 id="h2-1-main">The Garden City of Lights</h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/kl/1.avif" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Architectural</span>
                            <h2 class="card__title" id="title">Petronas Twin Towers</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-31" onclick="toggleFavorite(31, 'Petronas Twin Towers')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Petronas Twin Towers</h1>
                                <p>
                                    The Petronas Twin Towers, located in Kuala Lumpur, Malaysia, are the tallest twin towers in the world and an iconic symbol of the city. 
                                    These architectural marvels feature a skybridge connecting the two towers on the 41st and 42nd floors, offering breathtaking views of the cityscape. 
                                    Visitors can explore the towers, enjoy the interactive exhibits, and experience the stunning vistas from the observation deck. 
                                    The Petronas Twin Towers represent a harmonious blend of modern engineering and traditional Malaysian motifs, making them a must-visit landmark.
                                    <br>
                                    Address: Petronas Twin Towers, Kuala Lumpur City Centre, 50088 Kuala Lumpur, Malaysia<br>
                                    Contact Number: +60 3-2331 8080<br><br>
                                    Opening Hours:<br>
                                    Tuesday to Sunday: 9:00 AM - 9:00 PM<br>
                                    Closed on Mondays and public holidays
                                </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/kl/2.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Architectural</span>
                         <h2 class="card__title" id="title">KL Tower</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-32" onclick="toggleFavorite(32, 'KL Tower')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>KL Tower</h1>
                                <p>
                                    KL Tower, also known as Menara Kuala Lumpur, is one of the tallest telecommunications towers in the world and a prominent landmark in Kuala Lumpur, Malaysia. 
                                    Offering breathtaking panoramic views of the city, the tower features an observation deck and a revolving restaurant, providing a unique dining experience. 
                                    The tower is also home to various attractions, including a mini zoo, an aquarium, and the thrilling Sky Deck and Sky Box, making it a must-visit destination for tourists and locals alike.
                                    <br><br>
                                    Address: Menara Kuala Lumpur, No. 2 Jalan Punchak, Off Jalan P Ramlee, 50250 Kuala Lumpur, Malaysia<br>
                                    Contact Number: +60 3-2020 5444<br><br>
                                    Opening Hours:<br>
                                    9:00 AM – 10:00 PM daily
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/kl/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Shopping</span>
                         <h2 class="card__title" id="title">Bukit Bintang</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-33" onclick="toggleFavorite(33, 'Bukit Bintang')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Bukit Bintang</h1>
                                <p>
                                Bukit Bintang is a vibrant and bustling district in the heart of Kuala Lumpur, Malaysia. 
                                Known for its lively nightlife, shopping malls, and diverse dining options, Bukit Bintang is a popular destination for both locals and tourists. 
                                The area is home to numerous entertainment venues, luxury hotels, and street markets, making it a must-visit location for those seeking an exciting urban experience. 
                                Key attractions include Pavilion Kuala Lumpur, Jalan Alor food street, and the vibrant Changkat Bukit Bintang.
                                <br><br>
                                Address: Jalan Bukit Bintang, Kuala Lumpur, Malaysia<br>
                                Contact Number: +60 3-1234 5678<br><br>
                                Opening Hours:<br>
                                Daily: 10:00 AM - 10:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/kl/4.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Entertainment</span>
                       <h2 class="card__title" id="title">Aquaria KLCC	</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-34" onclick="toggleFavorite(34, 'Aquaria KLCC')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Aquaria KLCC</h1>
                                <p>
                                    Aquaria KLCC is a state-of-the-art oceanarium located beneath Kuala Lumpur Convention Centre. 
                                    It features a vast array of marine life, from exotic fish and sea turtles to sharks and rays. 
                                    Visitors can explore various themed zones, each showcasing different underwater habitats. 
                                    The highlight is a walk-through tunnel that offers a 360-degree view of the marine creatures swimming all around. 
                                    Aquaria KLCC provides an educational and entertaining experience for all ages, making it a must-visit attraction in Kuala Lumpur.
                                    <br><br>
                                    Address: Kuala Lumpur Convention Centre Complex, Kuala Lumpur City Centre, 50088 Kuala Lumpur, Malaysia<br>
                                    Contact Number: +60 3-2333 1888<br><br>
                                    Opening Hours:<br>
                                    Monday to Sunday: 10:00 AM - 8:00 PM (last admission at 7:00 PM)
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/kl/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Asian</span>
                       <h2 class="card__title" id="title">Opium KL</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-35" onclick="toggleFavorite(35, 'Opium KL')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Opium KL</h1>
                                <p>
                                    Opium KL offers a unique dining experience in the heart of Kuala Lumpur, Malaysia. 
                                    Located at 50 Changkat Bukit Bintang, this restaurant combines traditional Asian cuisine with a modern twist, set in a nostalgic ambiance inspired by the opium dens of Chinatown. 
                                    Featuring a diverse menu that includes signature dishes like Szechuan-style Prawns and Crispy Duck Pancakes, Opium KL promises a journey through Asian flavors amidst a vibrant setting.
                                    <br><br>
                                    Address: 50 Changkat Bukit Bintang, 50200 Kuala Lumpur, Malaysia<br>
                                    Contact Number: +603-2142 5670<br><br>
                                    Opening Hours:<br>
                                    Monday to Thursday: 12:00 PM - 1:00 AM<br>
                                    Friday & Saturday: 12:00 PM - 2:00 AM<br>
                                    Sunday: 4:00 PM - 1:00 AM<br><br>
                                    Experience the essence of Asian culinary traditions at Opium KL, where each dish tells a story of cultural heritage and culinary craftsmanship.
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/kl/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">International</span>
                       <h2 class="card__title" id="title">Marini's on 57</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-36" onclick="toggleFavorite(36, 'Marinis on 57')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Marini's on 57</h1>
                                <p>
                                    Marini's on 57 offers a luxurious dining experience with breathtaking views of Kuala Lumpur's skyline from the 57th floor of Petronas Tower 3. 
                                    Indulge in exquisite Italian cuisine crafted by acclaimed chefs amidst an elegant and sophisticated ambiance.
                                    <br><br>
                                    Address: Level 57, Menara 3 Petronas, Persiaran KLCC, Kuala Lumpur City Centre, 50088 Kuala Lumpur, Malaysia<br>
                                    Contact Number: +60 3-2386 6030<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 5:00 PM - 1:30 AM<br>
                                    Saturday: 5:00 PM - 2:00 AM<br>
                                    Sunday: Closed
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