<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CrabRest</title>
    <link href="Assets/images/crab.png" rel="icon">
    <link href="Assets/css/index.css" rel = "stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    

                    <!-- Navigation Bar     -->

    <nav>
        <?php 
            include ("Assets/php/nav.php")
        ?>
    </nav>
                    <!-- End of Navigation Bar -->
    
    
    <div class = "background-picture">
        <img src="Assets/images/tapiserie.jpg" alt = "imagine de profil">
        <div class = "container-information-part">
            <div class = "information">
                <h1>CrabRest: A Seaside Culinary Heaven</h1>
                <p>At CrabRest, we pride ourselves on being a quintessential destination for seafood enthusiasts, offering a delectable array of crab and fish dishes that tantalize the taste buds and evoke the essence of the ocean.</p>
            </div>
            <div class = "butoaneinformation">
            <a href="/contactpage.php">
                <button id="bookTableBtn">Book A Table!</button>
            </a>
            <a href = "/menu.php">    
                <button>Order Food!</button>
            </a>    
            </div>
        </div>        
    </div>

    <section class = "big-section">
        <section class = "container">
            <div class = "slider-wrapper">
                <div class = "slider">
                    <img id = "slide-1" src = "Assets/images/1.jpg">
                    <img id = "slide-2" src = "Assets/images/2.jpg">
                    <img id = "slide-3" src = "Assets/images/3.jpg">
                </div>
                <div class = "slider-nav">
                    <a href = "#slide-1"></a>
                    <a href = "#slide-2"></a>
                    <a href = "#slide-3"></a>
                </div>
            </div>    
        </section>
        <div class = "section-description">
            <h2>Seaside Elegance: Dining at CrabRest</h2>    
            <p>Indulge in Coastal Luxury at CrabRest: Where Ocean Views Meet Culinary Delight. Immerse Yourself in the Fresh Seafood and Chic Atmosphere of our Shorefront Location. Join Us for an Unforgettable Dining Experience by the Sea.</p>
            <button class = "description-button">View Location</button>  
        </div>  
    </div>
</section>

<div class="location-container" id="locationContainer">
    <h3>Random Location in Korsika, Greece</h3>
    <p>Here goes the description of the random location...</p>
</div>


    <footer>
        <?php 
            include ("Assets/php/footer.php")
        ?>
    </footer>


<script src ="Assets/javascript/index.js"></script>
</body>
</html>