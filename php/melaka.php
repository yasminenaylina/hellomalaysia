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
        <link rel="stylesheet" href="../css/melaka.css">
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
    
        <section class="main" style="background: url('../assets/img/melaka/headeer.jpg') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main"> Melaka </h2>
            <h2 id="h2-1-main">Negeri Bersejarah</h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/melaka/1.jfif" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Historical</span>
                            <h2 class="card__title" id="title">A Famosa</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-43" onclick="toggleFavorite(43, 'A Famosa')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>A Famosa</h1>
                                <p>
                                    A Famosa is a historical landmark in Malacca, Malaysia, renowned for its Portuguese colonial architecture. 
                                    Built in 1511, it once served as a formidable fortress, symbolizing Portuguese dominance in the region. 
                                    Today, its remaining gatehouse, Porta de Santiago, stands as a testament to Malacca's rich history and attracts visitors from around the world. 
                                    The site offers a glimpse into the past and is a must-visit for history enthusiasts.
                                    <br><br>
                                    Details:<br>
                                    Address: Jalan Parameswara, Bandar Hilir, 78000 Alor Gajah, Malacca, Malaysia
                                </p>
                            </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/melaka/2.png" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Cultural</span>
                         <h2 class="card__title" id="title">Jonker Street</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-44" onclick="toggleFavorite(44, 'Jonker Street')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Jonker Street</h1>
                                <p>
                                    Jonker Street, located in the heart of Malacca's Chinatown, is a bustling street famous for its vibrant night market, which comes alive every weekend. 
                                    The street is lined with antique shops, clothing stores, craft outlets, and food vendors offering a variety of local delicacies. 
                                    Visitors can immerse themselves in the lively atmosphere, enjoy live performances, and explore the rich cultural heritage of Malacca.
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/melaka/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Historical</span>
                         <h2 class="card__title" id="title">The Stadthuys</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-45" onclick="toggleFavorite(45,'The Stadthuys')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>The Stadthuys</h1>
                                <p>
                                    The Stadthuys, located in the heart of Malacca, Malaysia, is a historic building and museum that showcases the rich cultural heritage of the city. 
                                    Built in 1650 by the Dutch, it is considered one of the oldest surviving Dutch buildings in the East. 
                                    The vibrant red structure now houses the History and Ethnography Museum, where visitors can explore exhibits detailing Malacca's storied past, including its colonial history and diverse cultural influences. 
                                    The Stadthuys' striking architecture and historical significance make it a must-visit landmark in Malacca.
                                    <br><br>
                                    Address: Jalan Gereja, Bandar Hilir, 75000 Melaka, Malaysia
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/melaka/4.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Cultural</span>
                       <h2 class="card__title" id="title">Baba & Nyonya Heritage Museum</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-46" onclick="toggleFavorite(46, 'Baba & Nyonya Heritage Museum')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Baba & Nyonya Heritage Museum</h1>
                                <p>
                                    The Baba & Nyonya Heritage Museum, located in the heart of Malacca, Malaysia, offers a fascinating glimpse into the Peranakan culture. 
                                    This beautifully preserved museum showcases the unique blend of Chinese and Malay traditions through its antique furnishings, intricate woodwork, and family heirlooms. 
                                    Visitors can explore the rich history and lifestyle of the Baba and Nyonya families, making it a must-visit destination for those interested in cultural heritage.
                                    <br><br>
                                    Address: 48-50, Jalan Tun Tan Cheng Lock, 75200 Melaka, Malaysia<br>
                                    Contact Number: +60 6-283 1233<br><br>
                                    Opening Hours:<br>
                                    Monday to Thursday: 10:00 AM - 12:30 PM, 2:00 PM - 4:30 PM<br>
                                    Friday: Closed<br>
                                    Saturday to Sunday: 10:00 AM - 4:30 PM<br>
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/melaka/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Western</span>
                       <h2 class="card__title" id="title">Hard Rock Cafe Malacca</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-47" onclick="toggleFavorite(47, 'Hard Rock Cafe Malacca')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Hard Rock Cafe Malacca</h1>
                                <p>
                                    Located in the heart of Malacca City, Hard Rock Cafe Malacca offers a vibrant dining experience infused with rock 'n' roll spirit. 
                                    Situated near historic landmarks, this iconic venue serves up classic American cuisine amidst a backdrop of music memorabilia and live entertainment. 
                                    Whether you're a music enthusiast or a food lover, Hard Rock Cafe Malacca promises a memorable dining experience in a unique setting.
                                    <br><br>
                                    Address: No. 28 Lorong Hang Jebat, 75200 Melaka, Malaysia<Br>
                                    Contact Number: +606-292 5188<br><br>
                                    Opening Hours:<br>
                                    Monday to Thursday: 11:30 AM - 12:00 AM<br>
                                    Friday & Saturday: 11:30 AM - 1:00 AM<br>
                                    Sunday: 11:30 AM - 12:00 AM
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/melaka/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Malaysian</span>
                       <h2 class="card__title" id="title">Jonker 88</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-48" onclick="toggleFavorite(48, 'Jonker 88')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Jonker 88</h1>
                                <p>
                                    Jonker 88 is a renowned eatery nestled in the heart of Melaka's historic Jonker Street. 
                                    This bustling restaurant is famous for its authentic Nyonya cuisine and vibrant atmosphere, making it a favorite among locals and tourists alike.
                                    <br><br>
                                    Address: 88, Jalan Hang Jebat, 75200 Melaka, Malaysia<br>
                                    Contact Number: +606-292 4118<br><br>
                                    Opening Hours:<br>
                                    Monday to Thursday: 11:00 AM - 8:30 PM<br>
                                    Friday to Sunday: 11:00 AM - 9:30 PM<br><br>
                                    Visit Jonker 88 to savor traditional dishes such as Nyonya Laksa, Chicken Rice Balls, and Cendol, all served in a charming heritage setting that captures the essence of Melaka's rich cultural heritage.
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