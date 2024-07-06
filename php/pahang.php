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
        <link rel="stylesheet" href="../css/pahang.css">
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
    
        <section class="main" style="background: url('../assets/img/pahang/header.jpg') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main"> Pahang </h2>
            <h2 id="h2-1-main"> Darul Makmur </h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/pahang/1.jpg" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Nature</span>
                            <h2 class="card__title" id="title">Cameron Highlands</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-55" onclick="toggleFavorite(55,'Cameron Highlands')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Cameron Highlands</h1>
                                <p>
                                    Cameron Highlands is a picturesque hill station in Pahang, Malaysia, renowned for its cool climate and sprawling tea plantations. 
                                    Nestled at an elevation of approximately 1,500 meters above sea level, it offers stunning views of rolling hills and lush green landscapes. 
                                    Visitors can explore strawberry farms, visit the Mossy Forest for its unique biodiversity, and enjoy leisurely walks amidst the refreshing cool air.
                                </p>
                            </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/pahang/2.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Genting Highlands</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-56" onclick="toggleFavorite(56, 'Genting Highlands')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Genting Highlands</h1>
                                <p>
                                    Genting Highlands is a premier hill resort located in Pahang, Malaysia, renowned for its cool climate and entertainment offerings. 
                                    Perched atop Mount Ulu Kali, it boasts a range of attractions including theme parks, casinos, and shopping malls. 
                                    Visitors can enjoy panoramic views, cable car rides, and a variety of dining options amidst lush greenery.
                                    <br><br>
                                    Address: Genting Highlands, 69000 Genting Highlands, Pahang, Malaysia<br>
                                    Contact Number: +60 3-6101 1118<br><br>
                                    Opening Hours:<br>
                                    Theme Parks: Daily, 10:00 AM - 10:00 PM<br>
                                    Casinos: 24 hours
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/pahang/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Taman Negara</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-57" onclick="toggleFavorite(57, 'Taman Negara')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Taman Negara</h1>
                                <p>
                                    Taman Negara, located in Peninsular Malaysia, is one of the oldest rainforests in the world, offering unparalleled biodiversity and natural beauty. 
                                    Spanning over 4,300 square kilometers, it is home to exotic wildlife and indigenous tribes, making it a hotspot for eco-tourism and adventure seekers.
                                    <br><br>
                                    Address: Taman Negara, Kuala Tahan, 27000 Jerantut, Pahang, Malaysia<br>
                                    Contact Number: +60 9-266 1122<br>
                                    Opening Hours: Daily, 8:00 AM - 6:00 PM<br><br>
                                    Explore its lush canopy walks, thrilling river cruises, and diverse flora and fauna, including the endangered Malayan tiger and Asian elephant. Taman Negara promises an unforgettable experience amidst pristine nature and rich cultural heritage.
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/pahang/4.webp" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Nature</span>
                       <h2 class="card__title" id="title">Fraser's Hill</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-58" onclick="toggleFavorite(58, 'Frasers Hill')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Fraser's Hill</h1>
                                <p>
                                Fraser's Hill, nestled amidst the lush mountains of Pahang, Malaysia, offers a serene retreat for nature enthusiasts and birdwatchers alike. 
                                This charming hill station boasts cool temperatures year-round, making it a perfect escape from the tropical heat.
                                <br><br>
                                Address: Fraser's Hill, 49000 Bukit Fraser, Pahang, Malaysia<br>
                                Contact Number: +60 9-362 2210<br>
                                Opening Hours: Open daily from 8:00 AM to 6:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/pahang/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Malaysian</span>
                       <h2 class="card__title" id="title" >	Cameron Valley Tea House</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-59" onclick="toggleFavorite(59,'Cameron Valley Tea House')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Cameron Valley Tea House</h1>
                                <p>
                                    Cameron Valley Tea House offers a serene retreat amidst the lush greenery of Cameron Highlands. Located at:
                                    <br><br>
                                    Address: 15, Jalan Besar, 39000 Tanah Rata, Pahang, Malaysia<br>
                                    Contact: +60 5-491 1166<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 9:00 AM - 5:00 PM<br>
                                    Saturday and Sunday: 8:00 AM - 6:00 PM<br><br>
                                    Indulge in a delightful selection of locally grown teas while enjoying panoramic views of the surrounding tea plantations. <br>
                                    Whether savoring a traditional English breakfast or exploring local tea varieties, Cameron Valley Tea House promises a memorable tea experience amidst breathtaking natural beauty.
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/pahang/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Malaysia</span>
                       <h2 class="card__title"  id="title">Ye Olde Smokehouse</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-60" onclick="toggleFavorite(60, 'Ye Olde Smokehouse')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Ye Olde Smokehouse</h1>
                                <p>
                                    Ye Olde Smokehouse is a charming English-style cottage nestled in the heart of the Cameron Highlands, Malaysia.
                                    This iconic establishment exudes an old-world charm and offers a delightful escape with its cozy ambiance and delectable cuisine.
                                    <br><br>
                                    Address: 14 Jalan Jeriau, 39000 Tanah Rata, Cameron Highlands, Pahang, Malaysia<br>
                                    Contact Number: +60 5-491 1215<br><br>
                                    Opening Hours:<br>
                                    Monday to Sunday: 9:00 AM - 10:00 PM
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