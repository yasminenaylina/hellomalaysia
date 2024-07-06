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
        <link rel="stylesheet" href="../css/kelantan.css">
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
    
        <section class="main" style="background: url('../assets/img/kelantan/header.avif') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main"> Kelantan </h2>
            <h2 id="h2-1-main"> Negeri Cik Siti Wan Kembang </h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/kelantan/1.jpg" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Cultural</span>
                            <h2 class="card__title" id="title">Istana Jahar</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-25" onclick="toggleFavorite(25, 'Istana Jahar')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Istana Jahar</h1>
                                <p>
                                    Istana Jahar, located in Kota Bharu, Kelantan, Malaysia, is a beautifully preserved royal palace that showcases the rich cultural heritage and history of the region. 
                                    Built in 1855 by Sultan Muhammad II, this wooden palace features intricate carvings and traditional Malay architecture. 
                                    Today, Istana Jahar serves as a museum, offering visitors a glimpse into the royal lifestyle and the history of Kelantanese customs and traditions.
                                    <br><br>
                                    Address: Jalan Sultan, Kota Bharu, Kelantan, Malaysia<br>
                                    Contact Number: +60 9-748 2266<br><br>
                                    Opening Hours:<br>
                                    Monday to Thursday: 8:30 AM - 4:45 PM<br>
                                    Friday: 8:30 AM - 11:45 AM and 2:45 PM - 4:45 PM<br>
                                    Saturday and Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/kelantan/2.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Pantai Cahaya Bulan</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-26" onclick="toggleFavorite(26, 'Pantai Cahaya Bulan')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Pantai Cahaya Bulan</h1>
                                <p>
                                    Pantai Cahaya Bulan, also known as PCB Beach, is a picturesque beach located in Kelantan, Malaysia. It is renowned for its long stretch of golden sand and clear blue waters, making it a popular destination for both locals and tourists. 
                                    The beach offers a tranquil atmosphere, perfect for relaxation, picnics, and enjoying stunning sunsets. 
                                    Visitors can also explore local stalls offering delicious seafood and traditional crafts.
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/kelantan/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Gunung Stong State Park</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-27" onclick="toggleFavorite(27, 'Gunung Stong State Park')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Gunung Stong State Park</h1>
                                <p>
                                    Gunung Stong State Park, located in Kelantan, Malaysia, is a natural paradise renowned for its stunning landscapes and biodiversity. 
                                    The park is home to the majestic Gunung Stong, a towering mountain that offers adventurous trekking opportunities and breathtaking views. 
                                    Visitors can explore the pristine rainforest, discover beautiful waterfalls like the famous Jelawang Waterfall, and encounter a variety of wildlife. 
                                    The park's serene environment and natural beauty make it an ideal destination for nature lovers and outdoor enthusiasts.
                                    <br><br>
                                    Address: Gunung Stong State Park, 18000 Dabong, Kelantan, Malaysia<br>
                                    Contact Number: +60 9-748 1957<br>
                                    Opening Hours: Daily, 8:00 AM - 5:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/kelantan/4.jpeg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Cultural</span>
                       <h2 class="card__title" id="title">Wat Photivihan</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-28" onclick="toggleFavorite(28, 'Wat Photivihan')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Wat Photivihan</h1>
                                <p>
                                    Wat Photivihan, located in Kelantan, Malaysia, is renowned for housing one of the largest reclining Buddha statues in Southeast Asia. 
                                    This impressive statue, measuring 40 meters in length, is a significant attraction for both tourists and devotees. 
                                    The temple complex is rich in cultural and religious heritage, offering visitors a serene and reflective environment. 
                                    Wat Photivihan serves as a testament to the enduring influence of Thai Buddhism in the region and provides a unique glimpse into the local spiritual practices and traditions.
                                    <br><br>
                                    Address: Kampung Jambu, Tumpat, Kelantan, Malaysia<br>
                                    Contact Number: +60 9-725 4002 <br>
                                    Opening Hours: Daily: 8:00 AM - 6:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/kelantan/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Thailand</span>
                       <h2 class="card__title" id="title">	Restoran Sri Cheng Mai</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-29" onclick="toggleFavorite(29, 'Restoran Sri Cheng Mai')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Restoran Sri Cheng Mai</h1>
                                <p>
                                    Restoran Sri Cheng Mai is a beloved dining spot in Kelantan, known for its delicious and authentic Thailand cuisine. 
                                    The restaurant offers a cozy and welcoming atmosphere, making it a favorite among locals and tourists alike. 
                                    With a diverse menu featuring traditional Kelantanese and Thai dishes, it provides a true taste of the region's culinary heritage.
                                    <br><br>
                                    Address: 123 Jalan Besar, 15000 Kota Bharu, Kelantan, Malaysia<br>
                                    Contact Number: +60 9-123 4567<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 10:00 AM - 10:00 PM<br>
                                    Saturday and Sunday: 9:00 AM - 11:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/kelantan/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Malaysian</span>
                       <h2 class="card__title" id="title">Nasi Kak Wok</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-30" onclick="toggleFavorite(30, 'Nasi Kak Wok')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Nasi Kak Wok</h1>
                                <p>
                                    Nasi Kak Wok is a beloved culinary gem in Kelantan, known for its flavorful and aromatic rice dishes. 
                                    This local favorite features tender pieces of fried chicken served over fragrant rice, accompanied by a spicy, savory sauce that leaves a lasting impression. 
                                    The simplicity and deliciousness of Nasi Kak Wok have made it a must-try for both locals and visitors seeking an authentic taste of Kelantanese cuisine.
                                    <br><br>
                                    Address: 213, Jalan Masjid Lundang, Kampung Lundang, 15150 Kota Bharu, Kelantan<br>
                                    Contact Number: 019-203 9114<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 10:00 AM - 6:00 PM<br>
                                    Saturday and Sunday: 9:00 AM - 4:00 PM<br>
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