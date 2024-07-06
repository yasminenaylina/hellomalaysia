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
        <link rel="stylesheet" href="../css/johor.css">
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
    
        <section class="main" style="background: url('../assets/img/johor/header.webp') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main"> Johor </h2>
            <h2 id="h2-1-main"> Darul Ta'zim </h2>
        </section>
    
                            <section class="places">
                                <div class="container">
                                    <div class="card__container">
                                        
                                    <article class="card__article">
                        <img src="../assets/img/johor/1.jpg" alt="image" class="card__img">
                        
                        <div class="card__data">
                            <span class="card__description">Entertainment</span>
                            <h2 class="card__title" id="title">Legoland Malaysia</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-1" onclick="toggleFavorite(1, 'Legoland Malaysia')"></i>
                        </div>
                        
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Legoland Malaysia</h1>
                                <p>
                                    Legoland Malaysia Resort is a family-friendly theme park located in Iskandar Puteri, Johor, Malaysia. It features a variety of Lego-themed attractions and rides suitable for all ages, making it a popular destination for both locals and tourists.
                                    <br><br>
                                    Address: 7, Jalan Legoland, Bandar Medini Iskandar Malaysia, 79250 Nusajaya, Johor, Malaysia. <br>
                                    Contact: +60 7-597 8888 <br>
                                    Opening Hours: <br>
                                    Monday to Thursday: 10:00 AM - 6:00 PM <br>
                                    Friday to Sunday: 10:00 AM - 7:00 PM<br><br>
                                    Plan your visit to Legoland Malaysia to enjoy an exciting day filled with Lego adventures and family fun!
                                </p>
                            </div>
                        </div>
                    </article>

                    
       
                   <article class="card__article">
                      <img src="../assets/img/johor/2.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Desaru Coast</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>

                        <div class="heart-button">
                        <i class="fa-regular fa-heart" id="favorite-2" onclick="toggleFavorite(2,'Desaru Coast')"></i>
                        </div>

                    
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Desaru Coast</h1>
                                <p>
                                    Desaru Coast is a premier beach resort destination situated along the southeastern coast of Malaysia, renowned for its pristine beaches and luxurious accommodations. Nestled amidst lush tropical surroundings, Desaru Coast offers a blend of relaxation and adventure, making it an ideal retreat for families and travelers seeking both tranquility and excitement.
                                    <br><br>
                                    Address: Desaru Coast, Jalan Pantai 3, Desaru, 81930 Bandar Penawar, Johor, Malaysia.<br>
                                    Contact: +60 7-878 2800<br><br>
                                    At Desaru Coast, visitors can indulge in a variety of activities, from sunbathing on soft sands to exploring exhilarating water parks. The resort boasts world-class facilities including championship golf courses designed by renowned architects, perfect for golf enthusiasts looking to tee off amidst stunning coastal vistas.
                                    <br>
                                    The water-themed attractions here are a highlight, featuring thrilling rides and slides at the Adventure Waterpark, where families can splash and play together. For those seeking a cultural touch, Desaru Coast also offers glimpses into local traditions through its dining experiences and nearby cultural villages.
                                    <br><br>
                                    Opening Hours:
                                    <br>
                                    Daily: 9:00 AM - 6:00 PM
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/johor/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Gunung Ledang</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>

                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-3" onclick="toggleFavorite(3, 'Gunung Ledang')"></i>
                        </div>
                    
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Gunung Ledang</h1>
                                <p>
                                    Gunung Ledang (Mount Ophir) is a prominent mountain located in Johor, Malaysia. Known for its breathtaking views and diverse flora and fauna, it offers an exciting destination for hikers and nature enthusiasts alike.
                                    <br><br>
                                    Address: Gunung Ledang National Park, 84000 Tangkak, Johor, Malaysia. 
                                    <br>
                                    Contact: +60 7-267 1124. 
                                    <br><br>
                                    Opening Hours: Open daily from 8:00 AM to 6:00 PM.
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/johor/4.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Entertainment</span>
                       <h2 class="card__title" id="title">Danga Bay</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-4" onclick="toggleFavorite(4, 'Danga Bay')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Danga Bay</h1>
                                <p>
                                    Danga Bay, located in Johor Bahru, Malaysia, is a popular waterfront destination offering a range of recreational activities and dining options. Situated along Jalan Skudai, Danga Bay features a picturesque view of the Straits of Johor and is easily accessible from the city center. Visitors can enjoy leisurely walks along the promenade, dine at waterfront restaurants, or partake in various water sports activities. The bay is open daily from 10:00 AM to 10:00 PM, making it an ideal spot for both daytime outings and evening strolls.
                                    <br><br>
                                    Address: Location: Jalan Skudai, Johor Bahru, Malaysia <br><br>
                                    Opening Hours: <br>
                                    Monday to Sunday: 10:00 AM - 10:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/johor/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Seafood</span>
                       <h2 class="card__title" id="title">	Ong Shun Seafood Restaurant</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-5" onclick="toggleFavorite(5, 'Ong Shun Seafood Restaurant')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Ong Shun Restaurant</h1>
                                <p>
                                    Ong Shun Restaurant is a renowned culinary destination nestled in Johor, Malaysia, celebrated for its authentic Hokkien cuisine. Located at 123 Jalan Abc, Johor Bahru, it offers a cozy dining atmosphere ideal for enjoying traditional dishes. Specialties include Hokkien mee, oyster omelette, and braised pork belly. 
                                    For inquiries or reservations, contact them at +60 7-1234567. 
                                    The restaurant operates daily from 11:00 AM to 9:00 PM, ensuring a delightful dining experience for locals and tourists alike.
                                    <br><br>
                                    Address: 67, Jalan Abdul Samad, Kampung Bahru, 80100 Johor Bahru, Johor
                                    <br>
                                    Contact Number: +607-223 8953
                                    <br><br>
                                    Opening Hours:
                                    <br>
                                    Daily from 1:00 PM to 1:00 AM
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/johor/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Malaysia</span>
                       <h2 class="card__title" id="title">Teck Sing Restaurant	</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-6" onclick="toggleFavorite(6, 'Teck Sing Restaurant')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Teck Sing Restaurant</h1>
                                <p>
                                    Teck Sing Restaurant in Johor is renowned for its authentic Chinese cuisine, specializing in a variety of flavorful dishes. Located at 123 Jalan Besar, Johor Bahru, this establishment offers a cozy ambiance perfect for both casual dining and family gatherings. 
                                    Known for its signature dishes such as crispy Peking duck and delicate dim sum, Teck Sing ensures a delightful culinary experience. 
                                    The restaurant operates daily from 11:00 AM to 08:30 PM, providing ample opportunity to savor traditional Chinese flavors in the heart of Johor.
                                    <br><br>
                                    Address:  3&5, Jalan Sutera 1, Taman Sentosa, 80150 Johor Bahru, Johor <br>
                                    Contact Number: +607-334 7025
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