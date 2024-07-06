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
        <link rel="stylesheet" href="../css/negeri-sembilan.css">
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
    
        <section class="main" style="background: url('../assets/img/negerisembilan/header.jpg') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main"> Negeri Sembilan </h2>
            <h2 id="h2-1-main">Negeri Beradat</h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/negerisembilan/1.jpg" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Nature</span>
                            <h2 class="card__title" id="title">Port Dickson Beach</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-49" onclick="toggleFavorite(49, 'Port Dickson Beach')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Port Dickson Beach</h1>
                                <p>
                                    Port Dickson Beach, located in Negeri Sembilan, Malaysia, is a popular coastal destination renowned for its pristine sandy shores and tranquil waters. 
                                    Visitors can enjoy a range of recreational activities and amenities amidst stunning seaside views.
                                </p>
                            </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/negerisembilan/2.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Seremban Lake Garden</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-50" onclick="toggleFavorite(50, 'Seremban Lake Garden')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Seremban Lake Garden</h1>
                                <p>
                                    Seremban Lake Garden, nestled in the heart of Seremban, Malaysia, offers a serene retreat amidst lush greenery and scenic lakes. 
                                    Perfect for a leisurely stroll or family picnic, this expansive park provides a tranquil escape from the city buzz.
                                    <br><br>
                                    Address: Jalan Taman Bunga, 70100 Seremban, Negeri Sembilan, Malaysia<br>
                                    Contact Number: +60 6-761 4871<br><br>
                                    Opening Hours: <br>
                                    Monday to Sunday: 7:00 AM - 7:00 PM<br>
                                    Visit Seremban Lake Garden to unwind amidst nature's beauty and enjoy recreational activities with loved ones.
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/negerisembilan/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Historical</span>
                         <h2 class="card__title" id="title">Cape Rachado Lighthouse</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-51" onclick="toggleFavorite(51, 'Cape Rachado Lighthouse')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Cape Rachado Lighthouse</h1>
                                <p>
                                    Cape Rachado Lighthouse stands as a historic beacon overlooking the Malacca Strait near Port Dickson, Malaysia. 
                                    Perched atop a lush hill, this lighthouse offers panoramic views of the sea and surrounding landscapes. 
                                    Built during the Portuguese colonial era in the 16th century, it serves as a testament to Malaysia's maritime history and navigational heritage. 
                                    Visitors can explore the lighthouse grounds and learn about its significance in maritime navigation.
                                    <br><br>
                                    Address: Cape Rachado Lighthouse, Tanjung Tuan, 71050 Port Dickson, Negeri Sembilan, Malaysia<br>
                                    Contact Number: +60 6-647 5250<br><br>
                                    Opening Hours:<br>
                                    Monday to Sunday: 9:00 AM to 6:00 PM<br>
                                    Plan your visit to Cape Rachado Lighthouse for a glimpse into Malaysia's rich maritime past and breathtaking coastal scenery.
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/negerisembilan/4.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Western</span>
                       <h2 class="card__title" id="title">Kensington Western Restaurant</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-52" onclick="toggleFavorite(52, 'Kensington Western Restaurant')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Kensington Western Restaurant</h1>
                                <p>
                                    Located in the heart of Negeri Sembilan, Kensington Western Restaurant offers a delightful dining experience with its blend of Western cuisines and local flavors. Situated at:
                                    <br><br>
                                    Address: 34, Jalan Era Square 3, Era Square, 70200 Seremban, Negeri Sembilan <br>
                                    Contact Number: 06-768 7288<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 11:00 AM - 10:00 PM<br>
                                    Saturday and Sunday: 10:00 AM - 11:00 PM<br>
                                    Enjoy a cozy atmosphere and impeccable service while savoring a diverse menu that caters to both casual diners and food enthusiasts alike.
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/negerisembilan/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Malaysian</span>
                       <h2 class="card__title" id="title">Yee Kee Beef Noodles</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-53" onclick="toggleFavorite(53, 'Yee Kee Beef Noodles')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Yee Kee Beef Noodles</h1>
                                <p>
                                    Yee Kee Beef Noodles in Negeri Sembilan is renowned for its flavorful and comforting beef noodle soup, a local favorite that attracts both residents and tourists alike. 
                                    This beloved eatery prides itself on its rich broth, tender beef slices, and perfectly cooked noodles, offering a delightful dining experience that captures the essence of Malaysian cuisine.
                                    <br><br>
                                    Address: Jalan Temiang, 70100 Seremban, Negeri Sembilan, Malaysia<br>
                                    Contact Number: +60 6-763 9540<br><br>
                                    Opening Hours:<br>
                                    Monday to Sunday: 11:00 AM - 9:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/negerisembilan/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Malaysian</span>
                       <h2 class="card__title" id="title">Haji Shariff's Cendol</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-54" onclick="toggleFavorite(54, 'Haji Shariffs Cendol')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Haji Shariff's Cendol</h1>
                                <p>
                                    Located in the heart of Negeri Sembilan, Haji Shariff's Cendol offers a refreshing taste of Malaysian dessert tradition. Their signature cendol delights locals and visitors alike with its creamy coconut milk and perfectly balanced sweetness.
                                    <br><br>
                                    Address: 44, Jalan Yam Tuan, Bandar Seremban, 70000 Seremban, Negeri Sembilan<br>
                                    Contact Number: 06-762 8505<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 11:00 AM - 7:00 PM<br>
                                    Saturday and Sunday: 10:00 AM - 8:00 PM<br>
                                    Visit Haji Shariff's Cendol to indulge in a timeless treat that captures the essence of Malaysian culinary heritage.
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