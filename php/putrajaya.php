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
        <link rel="stylesheet" href="../css/putrajaya.css">
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
    
        <section class="main" style="background: url('../assets/img/putrajaya/header.jpg') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main"> Putrajaya </h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/putrajaya/1.jpg" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Cultural</span>
                            <h2 class="card__title" id="title">Putra Mosque</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-67" onclick="toggleFavorite(67, 'Putra Mosque')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Putra Mosque</h1>
                                <p>
                                    Located in the heart of Putrajaya, the Putra Mosque stands as an iconic symbol of Malaysia's Islamic heritage and architectural prowess. 
                                    Set against the picturesque Putrajaya Lake, this stunning pink-domed mosque welcomes visitors from around the world to admire its grandeur and serene ambiance.
                                    <br><br>
                                    Address: Persiaran Persekutuan, Presint 1, 62502 Putrajaya, Malaysia<br>
                                    Contact Number: +60 3-8887 6000<br><br>
                                    Opening Hours:<br>
                                    Monday to Thursday: 9:00 AM - 12:00 PM, 2:00 PM - 4:00 PM<br>
                                    Friday: Closed for prayers
                                </p>
                            </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/putrajaya/2.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Putrajaya Botanical Gardens</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-68" onclick="toggleFavorite(68, 'Putrajaya Botanical Gardens')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Putrajaya Botanical Gardens</h1>
                                <p>
                                    Located in Putrajaya, Malaysia, the Putrajaya Botanical Gardens offer a serene retreat amidst the city's administrative hub. 
                                    Spanning over 92 hectares, this expansive botanical paradise features diverse landscapes and themed gardens, making it a haven for nature enthusiasts and families alike.
                                    <br><br>
                                    Address: Persiaran Sultan Sallahuddin Abdul Aziz Shah, Presint 1, 62000 Putrajaya, Malaysia<br>
                                    Contact Number: +60 3-8887 7770<br><br>
                                    Opening Hours:<br>
                                    Monday to Sunday: 7:00 AM to 8:00 PM<br>
                                    Plan your visit to explore the lush greenery, floral displays, and educational exhibits that highlight Malaysia's rich botanical heritage. Whether strolling through themed gardens or enjoying recreational activities, the Putrajaya Botanical Gardens promise a rejuvenating experience in the heart of Putrajaya.
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/putrajaya/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Architectural</span>
                         <h2 class="card__title" id="title">Putrajaya International Convention Centre	</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-69" onclick="toggleFavorite(69, 'Putrajaya International Convention Centre')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Putrajaya International Convention Centre</h1>
                                <p>
                                    Putrajaya International Convention Centre (PICC) is a prominent venue located in Putrajaya, Malaysia, renowned for hosting major international conferences, exhibitions, and events. 
                                    Situated strategically in the heart of Putrajaya, PICC offers state-of-the-art facilities and breathtaking views of the cityscape, making it a preferred choice for both local and international gatherings.
                                    <br><br>
                                    Address: Precinct 5, 62000 Putrajaya, Malaysia<br>
                                    Contact Number: +60 3-8887 6000<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 9:00 AM to 6:00 PM<br>
                                    Saturday: 9:00 AM to 1:00 PM<br>
                                    Closed on Sundays and public holidays
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/putrajaya/4.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Architectural</span>
                       <h2 class="card__title" id="title">Seri Wawasan Bridge</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-70" onclick="toggleFavorite(70, 'Seri Wawasan Bridge')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Seri Wawasan Bridge</h1>
                                <p>
                                    Seri Wawasan Bridge in Putrajaya is an iconic architectural marvel spanning across Putrajaya Lake. 
                                    Its modern design and sweeping curves make it a prominent landmark in Malaysia's administrative capital. 
                                    Visitors can enjoy breathtaking views of the surrounding lake and cityscape from the bridge, especially during sunset.
                                    <br><br>
                                    Address: Seri Wawasan Bridge, Putrajaya, Malaysia<br>
                                    Contact Number: +60 3-8000 8000 (Putrajaya Corporation)<br>
                                    Opening Hours: Open 24 hours
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/putrajaya/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Middle Eastern</span>
                       <h2 class="card__title" id="title">Al Diafah Restaurant</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-71" onclick="toggleFavorite(71, 'Al Diafah Restaurant')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Al Diafah Restaurant</h1>
                                <p>
                                    Experience a culinary journey that merges the best of both worlds at Al Diafah, where every dish is prepared with care to satisfy discerning palates. 
                                    Whether you're enjoying their signature kebabs, aromatic biryanis, or indulging in traditional Malaysian delights, Al Diafah promises a memorable dining experience for all.
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/putrajaya/6.png" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Fusion</span>
                       <h2 class="card__title" id="title">The Aromas Cafe</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-72" onclick="toggleFavorite(72, 'The Aromas Cafe')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>The Aromas Cafe</h1>
                                <p>
                                    Located in the heart of Putrajaya, The Aromas Cafe offers a delightful retreat amidst the bustling cityscape. Nestled within tranquil surroundings, it combines a cozy ambiance with an enticing menu of gourmet delights and refreshing beverages. 
                                    Whether you're seeking a quick coffee break or a leisurely meal, The Aromas Cafe promises a memorable culinary experience.
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