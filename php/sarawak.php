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
        <link rel="stylesheet" href="../css/sabah.css">
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
    
        <section class="main" style="background: url('../assets/img/sarawak/header.webp') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main">Sarawak</h2>
            <h2 id="h2-1-main">Bumi Kenyalang</h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/sarawak/1.jpg" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Cultural</span>
                            <h2 class="card__title" id="title">Sarawak Cultural Village</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-79" onclick="toggleFavorite(79, 'Sarawak Cultural Village')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Sarawak Cultural Village</h1>
                                <p>
                                    Sarawak Cultural Village offers a captivating glimpse into the diverse indigenous cultures of Sarawak, Malaysia. 
                                    Nestled in the foothills of Mount Santubong, this living museum features traditional houses (longhouses) of various ethnic groups, showcasing their unique lifestyles, crafts, and rituals. 
                                    Visitors can experience cultural performances, including traditional dances and music, and participate in hands-on activities such as weaving and blowpipe shooting. The village also hosts Sarawak's renowned Rainforest World Music Festival annually, attracting music enthusiasts worldwide.
                                    <br><br>
                                    Address: Damai Beach Resort, Santubong, 93762 Kuching, Sarawak, Malaysia<br>
                                    Contact Number: +60 82-846 108<br>
                                    Opening Hours: Daily from 9:00 AM to 5:00 PM
                                </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/sarawak/2.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Bako National Park	</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-80" onclick="toggleFavorite(80, 'Bako National Park')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Bako National Park	</h1>
                                <p>
                                    Located in Sarawak, Malaysia, Bako National Park is a pristine wilderness area renowned for its biodiversity and stunning landscapes. 
                                    It offers an immersive experience in nature with lush rainforests, rugged coastline, and diverse wildlife, including proboscis monkeys and pitcher plants. Visitors can explore numerous hiking trails that lead to secluded beaches and viewpoints, making it a paradise for nature enthusiasts and photographers alike.
                                    <br><br>
                                    Address: Bako National Park, Sarawak, Malaysia<br>
                                    Contact Number: +60 82-370434<br>
                                    Opening Hours: Daily from 8:00 AM to 5:00 PM
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/sarawak/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Mulu Caves	</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-81" onclick="toggleFavorite(81, 'Mulu Caves')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Mulu Caves	</h1>
                                <p>
                                    Explore the breathtaking wonders of Mulu Caves, located in Gunung Mulu National Park, Sarawak, Malaysia. 
                                    This UNESCO World Heritage site is renowned for its stunning limestone formations, expansive cave networks, and diverse ecosystems. 
                                    Visitors can marvel at the majestic Sarawak Chamber, the world's largest cave chamber by area, and witness the enchanting spectacle of millions of bats emerging at dusk. 
                                    Mulu Caves offer an unforgettable adventure amidst lush rainforests and unparalleled natural beauty.
                                    <br><br>
                                    Address: Gunung Mulu National Park, Mulu, Sarawak, Malaysia<br>
                                    Contact Number: +60 85-792 600<br>
                                    Opening Hours: Daily from 8:00 AM to 5:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/sarawak/4.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Nature</span>
                       <h2 class="card__title" id="title">Semenggoh Nature Reserve</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-82" onclick="toggleFavorite(82, 'Semenggoh Nature Reserve')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Semenggoh Nature Reserve</h1>
                                <p>
                                    Semenggoh Nature Reserve, located in Sarawak, Malaysia, is renowned for its efforts in rehabilitating orphaned or rescued orangutans back into the wild. 
                                    Visitors can witness these fascinating primates in their natural habitat, thriving amidst lush rainforest surroundings. 
                                    The reserve also offers educational programs to raise awareness about orangutan conservation and rainforest ecology.
                                    <br><br>
                                    Address: Semenggoh Wildlife Centre, Kuching, Sarawak, Malaysia<br>
                                    Contact Number: +60 82-618 325<br><br>
                                    Opening Hours: <br>
                                    Monday to Sunday: 8:00 AM - 5:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/sarawak/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">International</span>
                       <h2 class="card__title" id="title">Bla Bla Bla Restaurant</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-83" onclick="toggleFavorite(83, 'Bla Bla Bla Restaurant')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Bla Bla Bla Restaurant</h1>
                                <p>
                                    Bla Bla Bla Restaurant Sarawak offers a delightful culinary experience in the heart of Sarawak. 
                                    Situated in a vibrant location, it combines local flavors with international influences, catering to diverse palates. 
                                    Whether you're craving traditional Sarawakian dishes or exploring innovative fusion creations, Bla Bla Bla Restaurant promises a memorable dining experience.
                                    <br><br>
                                    Address: 27, Jalan Tabuan, 93100 Kuching, Sarawak<br>
                                    Contact Number: 082-233 944<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 10:00 AM - 10:00 PM<br>
                                    Saturday and Sunday: 11:00 AM - 11:00 PM<br><br>
                                    This setup provides a clear overview of the restaurant's location, contact details, and operating hours in a concise and structured format.
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/sarawak/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">International</span>
                       <h2 class="card__title" id="title">James Brooke Bistro</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-84" onclick="toggleFavorite(84,'James Brooke Bistro')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>James Brooke Bistro</h1>
                                <p>
                                    James Brooke Bistro offers a cozy retreat in the heart of Kuching, Sarawak, Malaysia, blending modern comfort with a touch of colonial charm. 
                                    Located at Jalan Tunku Abdul Rahman, 93100 Kuching, Sarawak, it provides a serene ambiance perfect for enjoying delicious meals and beverages.
                                    <br><br>
                                    Address: Jalan Tunku Abdul Rahman, 93100 Kuching, Sarawak<br>
                                    Contact Number: 082-412 210<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 9:00 AM to 10:00 PM<br>
                                    Saturday and Sunday: 10:00 AM to 11:00 PM<br><br>
                                    Visit James Brooke Bistro to experience delightful culinary creations amidst a picturesque setting, ideal for both casual dining and special occasions.
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