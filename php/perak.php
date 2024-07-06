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
        <link rel="stylesheet" href="../css/perak.css">
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
    
        <section class="main" style="background: url('../assets/img/perak/header.jpg') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main"> Perak </h2>
            <h2 id="h2-1-main"> Darul Ridzuan </h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/perak/1.png" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Cultural</span>
                            <h2 class="card__title"  id="title">Ipoh Old Town</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-61" onclick="toggleFavorite(61, 'Ipoh Old Town')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Ipoh Old Town</h1>
                                <p>
                                    Ipoh Old Town is a charming district in Ipoh, Perak, Malaysia, renowned for its nostalgic colonial architecture and vibrant culinary scene.
                                    Nestled amidst historic buildings and quaint streets, it offers a delightful blend of heritage and modernity, attracting locals and tourists alike.
                                    Explore Ipoh Old Town to experience its bustling markets, traditional kopitiams (coffee shops), and iconic landmarks like the Ipoh Railway Station and Concubine Lane. 
                                    Whether strolling through its historic streets or indulging in local delicacies, Ipoh Old Town promises a journey back in time infused with modern-day delights.
                                </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/perak/2.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Historical</span>
                         <h2 class="card__title"  id="title">Kellie's Castle</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-62" onclick="toggleFavorite(62, 'Kellies Castle')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Kellie's Castle</h1>
                                <p>
                                    Kellie's Castle, located in Batu Gajah, Perak, is a fascinating historical site with a mix of mystery and colonial architecture. 
                                    Built in the early 20th century by a Scottish planter named William Kellie Smith, the castle was intended to be a grand mansion but was never completed due to Kellie's untimely death. 
                                    Today, visitors can explore its unfinished corridors, eerie staircases, and lush surroundings, making it a unique attraction for history buffs and curious explorers alike.
                                    <br><br>
                                    Address: Batu Gajah, 31000 Batu Gajah, Perak, Malaysia<br>
                                    Contact Number: +60 5-365 1331<br><br>
                                    Opening Hours:<br>
                                    Monday to Sunday: 9:00 AM - 6:00 PM
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/perak/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Entertainment</span>
                         <h2 class="card__title"  id="title">Lost World of Tambun</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-63" onclick="toggleFavorite(63, 'Lost World of Tambun')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Lost World of Tambun</h1>
                                <p>
                                    Nestled in the lush greenery of Perak, Malaysia, the Lost World of Tambun is a premier theme park and hot spring destination that offers a unique blend of adventure, nature, and relaxation. 
                                    Visitors can immerse themselves in various attractions amidst stunning limestone hills and natural landscapes.
                                    <br><br>
                                    Address: No. 1, Persiaran Lagun Sunway 1, Sunway City Ipoh, 31150 Ipoh, Perak, Malaysia<br>
                                    Contact Number: +605 542 8888<br><br>
                                    Opening Hours:<br>
                                    Monday to Friday: 11:00 AM - 6:00 PM<br>
                                    Saturday and Sunday: 10:00 AM - 6:00 PM<br><br>
                                    Explore thrilling rides, serene hot springs, and engaging activities suitable for families, friends, and adventurers alike. The Lost World of Tambun promises a memorable experience with its combination of water park fun, animal encounters, and rejuvenating hot springs set amidst a picturesque natural environment.
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/perak/4.jpeg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Nature</span>
                       <h2 class="card__title"  id="title">	Taiping Lake Gardens</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-64" onclick="toggleFavorite(64, 'Taiping Lake Gardens')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Taiping Lake Gardens</h1>
                                <p>
                                    Taiping Lake Gardens, located in Perak, Malaysia, is a picturesque park renowned for its tranquil lakes and lush greenery. 
                                    This historic site, established in 1880, spans over 64 hectares and features a variety of recreational activities and scenic spots.
                                    <br><br>
                                    Address: Jalan Pekeliling, 34000 Taiping, Perak, Malaysia<br>
                                    Contact Number: +605-805 1688<br><br>
                                    Opening Hours:<br>
                                    Monday to Sunday: 7:00 AM to 7:00 PM<br><br>
                                    Visitors to Taiping Lake Gardens can enjoy leisurely walks along the well-maintained paths, boat rides on the lake, and picnics amidst the scenic landscapes. It remains a beloved destination for locals and tourists alike, offering a peaceful retreat in the heart of Taiping.
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/perak/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">International</span>
                       <h2 class="card__title"  id="title">	Burps & Giggles</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-65" onclick="toggleFavorite(65, 'Burps & Giggles')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Burps & Giggles</h1>
                                <p>
                                    Burps & Giggles is a cozy café nestled in the heart of Ipoh, Perak, known for its quirky ambiance and delicious offerings. 
                                    Situated at 93 & 95 Jalan Sultan Yusuf, 30000 Ipoh, Perak, Malaysia, this café blends vintage décor with a vibrant menu that caters to both locals and tourists alike.
                                    <br><br>
                                    Address: 93 & 95 Jalan Sultan Yusuf, 30000 Ipoh, Perak, Malaysia<br>
                                    Contact Number: +605-246 1308<br><br>
                                    Opening Hours:<br>
                                    Monday to Thursday: 8:00 AM - 6:00 PM<br>
                                    Friday to Sunday: 8:00 AM - 10:00 PM<br><br>
                                    Enjoy a range of freshly brewed coffees, hearty brunch options, and delectable desserts while soaking in the quirky atmosphere at Burps & Giggles, making it a must-visit destination in Ipoh.
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/perak/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Chinese</span>
                       <h2 class="card__title"  id="title">Restoran Foh San</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-66" onclick="toggleFavorite(66, 'Restoran Foh San')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Restoran Foh San</h1>
                                <p>
                                    Located in the heart of Ipoh, Perak, Restoran Foh San is renowned for its traditional dim sum offerings and authentic Cantonese cuisine. 
                                    Established decades ago, it has become a favorite dining spot for locals and tourists alike, known for its bustling ambiance and delectable dishes.
                                    <br><br>
                                    Address: 51, Jalan Leong Sin Nam, 30300 Ipoh, Perak, Malaysia<br>
                                    Contact Number: +605-254 0308<br><br>
                                    Opening Hours:<br>
                                    Monday to Saturday: 6:30 AM to 2:30 PM<br>
                                    Sunday: 6:00 AM to 2:30 PM<br><br>
                                    Visit Restoran Foh San to experience a taste of traditional Chinese culinary excellence amidst the charm of Ipoh's historic streets.
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