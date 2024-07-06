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
        <link rel="stylesheet" href="../css/penang.css">
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
    
        <section class="main" style="background: url('../assets/img/penang/header.jpg') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main"> Pulau Pinang </h2>
            <h2 id="h2-1-main"> Pulau Mutiara</h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/penang/1.jpg" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Cultural</span>
                            <h2 class="card__title"  id="title">Georgetown</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-13" onclick="toggleFavorite(13,'Georgetown')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Georgetown</h1>
                                <p>
                                    George Town is a UNESCO World Heritage Site renowned for its rich cultural heritage and vibrant street life. 
                                    Located on the northeastern coast of Penang Island, Malaysia, it features an eclectic mix of historical landmarks, traditional shophouses adorned with intricate motifs, and vibrant street art. 
                                    Visitors can explore its bustling markets, sample delicious street food at the famous Gurney Drive Hawker Centre, and admire the colonial architecture of Fort Cornwallis. 
                                    George Town is also home to the iconic Cheong Fatt Tze Mansion, known for its indigo-blue façade and intricate Chinese porcelain décor.
                                </p>
                            </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/penang/2.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title"  id="title">Penang Hill</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-14" onclick="toggleFavorite(14, 'Penang Hill')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Penang Hill</h1>
                                <p>
                                    Penang Hill offers breathtaking panoramic views of George Town and the surrounding areas. 
                                    Accessible via a funicular train ride, it is a popular destination for both locals and tourists seeking cooler temperatures and stunning vistas. 
                                    At the summit, visitors can explore attractions such as the Owl Museum and the Bellevue Hotel, or enjoy leisurely walks amidst lush greenery.
                                    <br><br>
                                    Address: Bukit Bendera, 11300 Air Itam, Pulau Pinang, Malaysia <br>
                                    Contact Number: +604-828 8880 <br><br>
                                    Opening Hours: Daily, 6:30 AM - 11:00 PM
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/penang/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Cultural</span>
                         <h2 class="card__title"  id="title">Kek Lok Si Temple</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-15" onclick="toggleFavorite(15, 'Kek Lok Si Temple')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Kek Lok Si Temple</h1>
                                <p>
                                    Kek Lok Si Temple is a prominent Buddhist temple located in Air Itam, Penang, Malaysia. It is renowned for its sprawling complex featuring a blend of Chinese, 
                                    Thai, and Burmese architectural styles, and is often referred to as the "Temple of Supreme Bliss". 
                                    Visitors can explore the temple's towering pagoda, sacred halls adorned with intricate carvings, and a large bronze statue of Guanyin, the Goddess of Mercy.
                                    <br><br>
                                    Address: Kek Lok Si Temple, 11500 Air Itam, Penang, Malaysia<br>
                                    Contact Number: +604-828 3317<br><br>
                                    Opening Hours:<br>
                                    Daily from 9:00 AM to 6:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/penang/4.webp" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Nature</span>
                       <h2 class="card__title"  id="title">	Batu Ferringhi</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-16" onclick="toggleFavorite(16, 'Batu Ferringhi')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Batu Ferringhi</h1>
                                <p>
                                    Batu Ferringhi is a renowned beach destination located on the northern coast of Penang Island, Malaysia. It is popular among tourists for its white sandy beaches, clear waters, and vibrant nightlife. 
                                    The beach stretches for several kilometers and offers various water sports activities such as parasailing, jet-skiing, and banana boating.
                                     Additionally, Batu Ferringhi is famous for its night market, where visitors can shop for local crafts, souvenirs, and enjoy delicious street food. Several luxury resorts and hotels are situated along the beach, offering stunning views of the sea.
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/penang/5.webp" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Western</span>
                       <h2 class="card__title" id="title">	The Mugshot Cafe</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-17" onclick="toggleFavorite(17, 'The Mugshot Cafe')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>The Mugshot Cafe</h1>
                                <p>
                                    The Mugshot Cafe, located in Penang, is a popular spot nestled within the historic Cheong Fatt Tze Mansion. 
                                    Known for its charming ambiance and delicious offerings, The Mugshot Cafe specializes in freshly brewed coffee and artisanal bagels. 
                                    It's a favorite among locals and tourists alike, offering a cozy setting to enjoy a variety of breakfast and brunch options.
                                    <br><br>
                                    Address: Cheong Fatt Tze Mansion, 14, Leith Street, George Town, 10200 George Town, Penang, Malaysia <br>
                                    Contact Number: +604-261 4642 <br><br>
                                    Opening Hours: Monday to Sunday: 8:00 AM - 5:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/penang/6.jpeg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Malaysian</span>
                       <h2 class="card__title"  id="title">Deens Maju Nasi Kandar</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-18" onclick="toggleFavorite(18, 'Deens Maju Nasi Kandar')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Deens Maju Nasi Kandar</h1>
                                <p>
                                    Deens Maju Nasi Kandar is a renowned restaurant in Penang, Malaysia, celebrated for its authentic Nasi Kandar—a local favorite featuring rice served with a variety of flavorful curries and side dishes. 
                                    Located in the heart of George Town, this bustling eatery attracts both locals and tourists alike. 
                                    Known for its vibrant atmosphere and rich culinary heritage, Deens Maju Nasi Kandar offers a unique dining experience where patrons can savor traditional Malaysian flavors. 
                                    Whether it's for breakfast, lunch, or dinner, Deens Maju Nasi Kandar promises a memorable taste of Penang's culinary delights.
                                    <br><br>
                                    Address: 175, Jalan Gurdwara, George Town, 10300 George Town, Pulau Pinang, Malaysia <br>
                                    Contact Number: +60 4-261 4440 <br> 
                                    Opening Hours: Monday to Sunday: 7:00 AM - 12:00 AM
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