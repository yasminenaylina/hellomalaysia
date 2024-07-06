
<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, Malaysia!</title>
    <link rel="stylesheet" href="css/parallex.css">
    <link rel="stylesheet" href="css/state.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<header>
        <nav class="navigation">
            <a href="index.php" class="active">Home<span></span></a>

            <a href="#states" onclick="smoothScroll(event, 'states')">Discover Malaysia<span></span></a>

            <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) : ?>
            <a href="php/profile.php">Profile<span></span></a>
            <?php else : ?>
            <a href="php/register-login-page.php" onclick="scrollUp(event)">Sign In / Sign Up<span></span></a>
            <?php endif; ?>
            
        </nav>
    </header>


    <section class="parallax" style="background: url(assets/img/parallex/background.png);">
        <h2 id="text" > Hello, </h2>
        <h2 id="text2">Malaysia !</h2>
        <img src="assets/img/parallex/cloud1.png" id="cloud-left">
        <img src="assets/img/parallex/cloud2.png" id="cloud-right">
        <img src="assets/img/parallex/wayangkulit2.png" id="wayang-left">
        <img src="assets/img/parallex/wayangkulit1.png" id="wayang-right">
    </section>

    <section class="description">
        <h2>Hello, Malaysia!</h2>
    
        <p>
        Welcome to Hello, Malaysia!, your ultimate interactive travel guide to exploring the vibrant and diverse attractions of Malaysia. From the bustling streets of Kuala Lumpur with its iconic Petronas Towers and vibrant markets to the serene beaches of Langkawi, known for its pristine waters and luxurious resorts, our website offers a comprehensive and engaging platform for discovering the best destinations, activities, and cultural experiences this beautiful country has to offer. 
        <br><br>
        </p>

        <p>
        Immerse yourself in the lush rainforests of Borneo, home to an incredible array of wildlife and adventure activities, or explore the historic cities of Penang and Malacca, where colonial architecture and rich history tell fascinating stories of Malaysia's past. Our detailed guides and personalized recommendations cater to all types of travelers, whether you're seeking adrenaline-pumping adventures, tranquil retreats, or an in-depth exploration of Malaysia's rich cultural heritage.
        <br><br>
        </p>
        <p>
        At Hello, Malaysia!, we aim to make your travel planning effortless and enjoyable. Our user-friendly interface allows you to easily search for attractions, plan your itinerary, and find practical information to ensure a smooth and memorable journey. Discover hidden gems, from local eateries serving delicious Malaysian cuisine to lesser-known natural wonders off the beaten path.
        
        Embark on your Malaysian journey with us and uncover the myriad of experiences that make this nation truly unique. Whether you're a solo traveler, a couple, or a family, Hello, Malaysia! is your trusted companion for an unforgettable adventure in this enchanting Southeast Asian destination. Let us guide you through the wonders of Malaysia and help you create memories that will last a lifetime.    <br><br>
        </p>
    </section>


    <section id="states">
    <div class="container">

        <div class="slide">

            <div class="item" style="background-image: url(assets/img/state-card/terengganu.jpg);">
                <div class="content">
                <div class="name">Terengganu</div>
                <div class="state-description">Terengganu, located on the east coast, is famous for its beautiful beaches, crystal-clear waters, and traditional Malay culture. The state is home to the stunning Perhentian Islands and Redang Island, perfect for snorkeling and diving. Terengganu's capital, Kuala Terengganu, features charming waterfront views, vibrant markets, and the impressive Crystal Mosque.
                </div>
                <button id="discover-terengganu">Discover Terengganu</button>    
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/perlis.jpg);">
                <div class="content">
                <div class="name">Perlis</div>
                <div class="state-description">Perlis, the smallest state in Malaysia, offers a tranquil escape with its scenic countryside and limestone hills. The state is known for its serene paddy fields, charming villages, and the iconic Timah Tasoh Lake. Perlis is also home to the Perlis State Park, a haven for nature enthusiasts with its diverse flora and fauna.</div>
                <button id="discover-perlis">Discover Perlis</button>
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/penang.jpg);">
                <div class="content">
                <div class="name">Penang</div>
                <div class="state-description">Penang, known as the "Pearl of the Orient," is celebrated for its vibrant street food scene, multicultural heritage, and historic architecture. George Town, the state capital and a UNESCO World Heritage site, features charming colonial buildings, temples, and street art. Penang also boasts beautiful beaches, such as Batu Ferringhi, and the lush Penang Hill.</div>
                <button id="discover-penang">Discover Penang</button>
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/johor.jpg); ">
                <div class="content">
                <div class="name">Johor</div>
                <div class="state-description">Johor, the southernmost state of Peninsular Malaysia, is known for its stunning coastal scenery, vibrant city life, and rich cultural heritage. Johor Bahru, the state capital, offers modern attractions like Legoland Malaysia and the Johor Premium Outlets. The state is also famous for its beautiful islands, such as Pulau Tioman and Pulau Rawa, perfect for diving and snorkeling.</div>
                <button id="discover-johor">Discover Johor</button>    
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/kedah.jpg);">
                <div class="content">
                <div class="name">Kedah</div>
                <div class="state-description">Kedah, often referred to as the "Rice Bowl of Malaysia," is renowned for its vast paddy fields and agricultural heritage. The state is home to Langkawi, an archipelago of 99 islands known for its stunning beaches, lush rainforests, and duty-free shopping. Kedah also boasts historical sites like the ancient Bujang Valley, offering a glimpse into Malaysia's early civilization.</div>
                <button id="discover-kedah">Discover Kedah</button>        
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/kelantan.jpg);">
                <div class="content">
                <div class="name">Kelantan</div>
                <div class="state-description">Kelantan, located in the northeastern region, is celebrated for its rich cultural traditions and strong adherence to Malay customs. The state is famous for its vibrant arts and crafts, including batik, songket, and shadow puppetry. Kelantan's capital, Kota Bharu, is a cultural hub with bustling markets, traditional performances, and delicious local cuisine.</div>
                <button id="discover-kelantan">Discover Kelantan</button>     
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/kuala\ lumpur.jpg);">
                <div class="content">
                <div class="name">Kuala Lumpur</div>
                <div class="state-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda itaque delectus ex dolorum, amet asperiores eaque neque incidunt dolores eum id porro quas libero quisquam! Eius accusamus nam optio magnam!</div>
                <button id="discover-kl">Discover Kuala Lumpur</button>        
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/melaka.jpg);">
                <div class="content">
                <div class="name">Melaka</div>
                <div class="state-description">Malacca, a UNESCO World Heritage site, is steeped in history with its well-preserved colonial architecture and diverse cultural influences. The state capital, Malacca City, showcases landmarks such as the A Famosa fortress, St. Paul's Hill, and the Dutch Square. Visitors can explore its rich history through museums, heritage buildings, and a stroll along the picturesque Jonker Street.</div>
                <button id="discover-melaka">Discover Melaka</button>         
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/negeri\ sembilan.jpg);">
                <div class="content">
                <div class="name">Negeri Sembilan</div>
                <div class="state-description">Negeri Sembilan is known for its unique Minangkabau culture, reflected in the distinctive architecture of its traditional houses with sweeping, curved roofs. The state capital, Seremban, offers attractions like the Seremban Cultural Complex and the scenic Lake Gardens. The coastal town of Port Dickson is popular for its beautiful beaches and water sports activities.</div>
                <button id="discover-negerisembilan">Discover Negeri Sembilan</button>     
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/pahang.jpg);">
                <div class="content">
                <div class="name">Pahang</div>
                <div class="state-description">Pahang, the largest state in Peninsular Malaysia, is famed for its natural beauty and outdoor adventures. It is home to Taman Negara, one of the world's oldest rainforests, and Cameron Highlands, a cool hill station with tea plantations and strawberry farms. The coastal town of Kuantan offers pristine beaches and the stunning Teluk Cempedak.</div>
                <button id="discover-pahang">Discover Pahang</button>     

            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/perak.jpg);">
                <div class="content">
                <div class="name">Perak</div>
                <div class="state-description">Perak, located in the northern region, is known for its natural landscapes and historical landmarks. The state capital, Ipoh, is famous for its colonial architecture, cave temples, and delicious cuisine. Perak is also home to the Royal Belum State Park, a pristine rainforest offering unique wildlife and adventure activities.</div>
                <button id="discover-perak">Discover Perak</button>        
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/sabah.jpg);">
                <div class="content">
                <div class="name">Sabah</div>
                <div class="state-description">Sabah, located on the island of Borneo, is renowned for its diverse wildlife, stunning natural landscapes, and cultural diversity. The state is home to Mount Kinabalu, the highest peak in Southeast Asia, and the pristine beaches of the Semporna Archipelago. Sabah's capital, Kota Kinabalu, offers a vibrant city life with a backdrop of breathtaking sunsets.</div>
                <button id="discover-sabah">Discover Sabah</button>
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/sarawak.jpg);">
                <div class="content">
                <div class="name">Sarawak</div>
                <div class="state-description">Sarawak, the largest state in Malaysia, is known for its rich cultural heritage and diverse ecosystems. The state capital, Kuching, is a charming city with colonial buildings, vibrant markets, and the picturesque Sarawak River. Sarawak is also home to unique attractions like the Mulu Caves, Bako National Park, and traditional longhouses of the indigenous tribes.</div>
                <button id="discover-sarawak">Discover Sarawak</button>    
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/selangor.jpg);">
                <div class="content">
                <div class="name">Selangor</div>
                <div class="state-description">Selangor, the most developed state in Malaysia, surrounds the capital city of Kuala Lumpur. It offers a mix of urban attractions, cultural sites, and natural beauty. Visitors can explore the iconic Batu Caves, enjoy the theme parks of Sunway Lagoon, or relax in the scenic hills of Genting Highlands. Selangor is also known for its vibrant shopping malls and diverse cuisine.</div>
                <button id="discover-selangor">Discover Selangor</button>    
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/labuan.jpg);">
                <div class="content">
                <div class="name">Labuan</div>
                <div class="state-description">Labuan, an island territory off the coast of Borneo, is known for its strategic location and vibrant economic activities. Recognized as a federal territory of Malaysia, Labuan attracts visitors with its duty-free shopping, pristine beaches, and historical landmarks. It offers a blend of modern infrastructure and natural beauty, making it an ideal destination for both business and leisure travelers seeking relaxation and cultural exploration in Southeast Asia.</div>
                <button id="discover-labuan">Discover Labuan</button>    
            </div>
            </div>

            <div class="item" style="background-image: url(assets/img/state-card/putrajaya.webp);">
                <div class="content">
                <div class="name">Putrajaya</div>
                <div class="state-description">Putrajaya, Malaysia's federal administrative capital, is a modern city renowned for its futuristic architecture, expansive green spaces, and serene artificial lakes. Designed to reflect Malaysia's heritage and aspirations, Putrajaya showcases grand government buildings, including the imposing Putra Mosque and the iconic Putrajaya International Convention Centre. Visitors can explore the meticulously planned streets adorned with landscaped gardens, making it a hub for administrative functions, cultural events, and leisure activities, all within a meticulously planned urban environment.</div>
                <button id="discover-putrajaya">Discover Putrajaya</button>    
            </div>
            </div>

        </div>
        <div class="button">
            <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>

    </div>
    </section>


    <footer>
        <p> 2024 Hello, Malaysia! All rights reserved.</p>
    </footer>

    
    <script src="js/app.js"></script>
    <script src="js/state.js"></script>
    <script src="js/index.js"></script>
</body>