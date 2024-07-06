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
        <link rel="stylesheet" href="../css/terengganu.css">
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
    
        <section class="main" style="background: url('../assets/img/terengganu/header.jpg') no-repeat center center fixed; background-size: cover;">
            <h2 id="h2-main">Terengganu</h2>
            <h2 id="h2-1-main">Darul Iman</h2>
        </section>
    
        <section class="places">
            <div class="container">
                <div class="card__container">
                    <article class="card__article">
                        <img src="../assets/img/terengganu/1.jpg" alt="image" class="card__img">
                    
                        <div class="card__data">
                            <span class="card__description">Nature</span>
                            <h2 class="card__title" id="title">Redang Island</h2>
                            <button style="color: black; border: none;" onclick="togglePopup('popup-1')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-91" onclick="toggleFavorite(91, 'Redang Island')"></i>
                        </div>
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-1')">&times;</div>
                                
                                <h1>Redang Island</h1>
                                <p>
                                    Redang Island, located off the coast of Terengganu, Malaysia, is renowned for its crystal-clear waters, white sandy beaches, and vibrant marine life. 
                                    It is a popular destination for snorkeling, diving, and relaxing beach holidays. Visitors can explore coral reefs teeming with colorful fish or simply bask in the tropical sun. 
                                    The island offers a range of accommodations, from luxury resorts to budget-friendly chalets, making it an ideal getaway for travelers seeking natural beauty and tranquility.
                                    <br><br>
                                    Address: Redang Island, Terengganu, Malaysia<br>
                                    Contact Number: +60 9-630 7777 (Tourism Office)<br>
                                    Opening Hours: Daily: 8:00 AM - 6:00 PM
                                </div>
                        </div>
                    </article>
                    
       
                   <article class="card__article">
                      <img src="../assets/img/terengganu/2.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Nature</span>
                         <h2 class="card__title" id="title">Perhentian Islands	</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-2')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-92" onclick="toggleFavorite(92, 'Perhentian Islandd')"></i>
                        </div>
                        <div class="popup" id="popup-2">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-2')">&times;</div>
                                
                                <h1>Perhentian Islands	</h1>
                                <p>
                                    The Perhentian Islands, located off the coast of Terengganu, Malaysia, are renowned for their crystal-clear waters, vibrant coral reefs, and stunning white sandy beaches. 
                                    These idyllic islands are a haven for snorkelers, divers, and beach lovers, offering a serene escape from the hustle and bustle of city life. 
                                    Visitors can enjoy a variety of water activities, explore lush jungle trails, and relax in the tranquil surroundings of this tropical paradise.
                                    <br><br>
                                    Address: Perhentian Islands, Besut District, Terengganu, Malaysia<br>
                                    Contact Number: +60 9-691-1000<br>
                                    Opening Hours: Open 24 hours, daily
                                </p>
                            </div>
                        </div>
                    </article>
       
                   <article class="card__article">
                      <img src="../assets/img/terengganu/3.jpg" alt="image" class="card__img">
       
                      <div class="card__data">
                         <span class="card__description">Cultural</span>
                         <h2 class="card__title" id="title">Crystal Mosque	</h2>
                         <button style="color: black; border: none;" onclick="togglePopup('popup-3')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-93" onclick="toggleFavorite(93, 'Crystal Mosque')"></i>
                        </div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-3')">&times;</div>
                                
                                <h1>Crystal Mosque	</h1>
                                <p>
                                    The Crystal Mosque, located in Kuala Terengganu, Malaysia, is a stunning architectural masterpiece renowned for its modern design and intricate glass and steel structure. 
                                    Situated on the picturesque Islamic Heritage Park on the island of Wan Man, the mosque is an iconic landmark and a significant tourist attraction. 
                                    Its unique design, featuring reflective surfaces and elegant minarets, creates a breathtaking sight, especially when illuminated at night. 
                                    Visitors to the Crystal Mosque can enjoy not only its spiritual ambiance but also the beautiful surrounding landscape.
                                    <br><br>
                                    Address: Islamic Heritage Park, Pulau Wan Man, 21000 Kuala Terengganu, Terengganu, Malaysia<br>
                                    Contact Number: +60 9-627 1111<br>
                                    Opening Hours: 10:00 AM - 6:00 PM (daily)
                                </p>
                            </div>
                        </div>
                    </article>

                   <article class="card__article">
                    <img src="../assets/img/terengganu/4.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Cultural</span>
                       <h2 class="card__title" id="title">Pasar Payang</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-4')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-94" onclick="toggleFavorite(94, 'Pasar Payang')"></i>
                        </div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-4')">&times;</div>
                                
                                <h1>Pasar Payang</h1>
                                <p>
                                    Pasar Payang is a vibrant and bustling market located in Kuala Terengganu, offering visitors a rich cultural experience. 
                                    Known for its wide variety of traditional crafts, fresh produce, and local delicacies, the market is a hub of activity where locals and tourists alike can explore and shop. 
                                    From exquisite batik and songket fabrics to fresh seafood and spices, Pasar Payang provides a glimpse into the local lifestyle and heritage of Terengganu. 
                                    The market's lively atmosphere and diverse offerings make it a must-visit destination for anyone exploring the region.
                                    <br><br>
                                    Address: Jalan Sultan Zainal Abidin, Kampung Banggul, 20000 Kuala Terengganu, Terengganu, Malaysia<br>
                                    Contact Number: +60 9-622 1234<br>
                                    Opening Hours: Monday to Sunday: 8:00 AM - 6:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/terengganu/5.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">Malaysian</span>
                       <h2 class="card__title" id="title">Restoran Sate Kajang Haji Samuri</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-5')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-95" onclick="toggleFavorite(95, 'Restoran Sate Kajang Haji Samuri')"></i>
                        </div>
                        <div class="popup" id="popup-5">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-5')">&times;</div>
                                
                                <h1>Restoran Sate Kajang Haji Samuri</h1>
                                <p>
                                    Restoran Sate Kajang Haji Samuri in Terengganu is a renowned eatery famous for its delicious and tender satay. 
                                    The restaurant offers a variety of satay options, including chicken, beef, and lamb, all marinated with a special blend of spices and grilled to perfection. 
                                    Accompanied by their signature peanut sauce, the satay here provides a mouth-watering experience that has made it a favorite among locals and tourists alike. 
                                    With a welcoming atmosphere and prompt service, it’s the perfect place to enjoy a satisfying meal with family and friends.
                                    <br><br>
                                    Address: Lot 1, Medan Selera MDKT, Jalan Sultan Ismail, 20400 Kuala Terengganu, Terengganu, Malaysia<br>
                                    Contact Number: +60 9-622 3456<br><br>
                                    Opening Hours:<br>
                                    Monday to Sunday: 10:00 AM - 10:00 PM
                                </p>
                            </div>
                        </div>
                    </article>

                 <article class="card__article">
                    <img src="../assets/img/terengganu/6.jpg" alt="image" class="card__img">
     
                    <div class="card__data">
                       <span class="card__description">International</span>
                       <h2 class="card__title" id="title">Madam Bee's Kitchen</h2>
                       <button style="color: black; border: none;" onclick="togglePopup('popup-6')">More Information</button>
                        </div>
                        <div class="heart-button">
                        <i class="far fa-heart" id="favorite-96" onclick="toggleFavorite(96, 'Madam Bees Kitchen')"></i>
                        </div>
                        <div class="popup" id="popup-6">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup('popup-6')">&times;</div>
                                
                                <h1>Madam Bee's Kitchen</h1>
                                <p>
                                    Madam Bee's Kitchen is a beloved culinary gem located in Terengganu, Malaysia. 
                                    Renowned for its authentic local cuisine, this restaurant offers a delightful dining experience that highlights traditional Terengganu flavors. 
                                    From delectable seafood dishes to savory curries and classic Malaysian desserts, Madam Bee's Kitchen serves a menu that captures the essence of the region's rich culinary heritage. 
                                    The welcoming atmosphere and friendly service make it a must-visit spot for both locals and tourists seeking an authentic taste of Terengganu.
                                    <br><br>
                                    Address: Jalan Sultan Zainal Abidin, 20000 Kuala Terengganu, Terengganu, Malaysia<br>
                                    Contact Number: +60 9-622 1234<br><br>
                                    Opening Hours:<br>
                                    Monday to Sunday: 10:00 AM - 10:00 PM
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