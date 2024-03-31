<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <link href = "Assets/css/about.css" rel = "stylesheet">
    <link href="Assets/images/crab.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    

    <nav>
        <?php 
            include ("Assets/php/nav.php")
        ?>
    </nav>    

    <div class="background-picture">
    <img src="Assets/images/tapiserie.jpg" alt="imagine de profil">
</div>
<div class="entireinformation">
    <div class="firstpart">
        <h1>About Us</h1>
        <span>Welcome to our seaside haven, where the salty breeze meets the aroma of freshly prepared crab delicacies. Nestled along the picturesque coastline of Greece, our restaurant celebrates the bounty of the sea with a focus on delectable crab cuisine. At our establishment, we pride ourselves on sourcing the finest quality crabs from local fishermen, ensuring each dish is bursting with flavor and freshness. Whether you crave succulent crab cakes, buttery crab legs, or indulgent crab bisque, our menu offers an array of irresistible options to satisfy every palate. With a commitment to culinary excellence and warm Greek hospitality, we invite you to immerse yourself in a dining experience that celebrates the rich flavors of the Mediterranean and the bounty of the sea. Come join us and embark on a journey of gastronomic delight amidst the stunning backdrop of the Greek coast.</span>
        <button class="LearnMore">Learn More</button>
    </div>
    <div class="secondpart">
    <div class="icon">
        <i class="fas fa-utensils"></i>
        <p>Enjoy succulent crab specialties amidst Greece's coastal beauty. Experience Mediterranean flavors with each bite.</p>
    </div>
    <div class="icon">
        <i class="fas fa-umbrella-beach"></i>
        <p>Bask in the golden sands and crystal-clear waters of our pristine beach, where serenity meets splendor. Lose yourself in the tranquil beauty of the Greek coastline, an idyllic retreat for sun-seekers and nature enthusiasts alike.</p>
    </div>
    <div class="icon">
        <i class="fas fa-people-carry"></i>
        <p>Gather your friends and create unforgettable memories as you savor delicious crab dishes against the backdrop of Greece's mesmerizing coastline.</p>
    </div>
</div>
</div>
<footer>
        <?php 
            include ("Assets/php/footer.php")
        ?>
</footer>
</body>
</html>