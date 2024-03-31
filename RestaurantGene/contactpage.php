<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link href="Assets/css/contactpage.css" rel="stylesheet">
    <link href="Assets/images/crab.png" rel="icon">
</head>
<body>

<div class="background-picture"></div>

<div class="navigation-container">
    <a href="index.php">
        <img src="Assets/images/crab.png" class="navigation-logo" alt="logo">
    </a>
    <ul class="navigation-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="contactpage.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
    </ul>
</div>

<div class="firstpart">
    <div class="formular">
        <form>
            <h2 class = "contactus">Contact Us</h2>
            <br>
            <label for="name">Name</label>
            <br>
            <input type="text" name="name" placeholder="name" required>
            <br>
            <label for="surname">Surname</label>
            <br>
            <input type="text" name="surname" placeholder="surname" required>
            <br>
            <label for="email">Email</label>
            <br>
            <input type="text" name="email" placeholder="email" required>
            <br>
            <label for="number">Phone Number</label>
            <br>
            <input type="text" name="number" placeholder="phone" required>
            <br>
            <label for="region">Region</label>
            <br>
            <select id="" name="region" required>
                <option value="chalkida waterfront">Paralia</option>
                <option value="old town ">Paliochora</option>
                <option value="kotsika">Kotsika Square</option>
                <option value="artaki">Nea Artaki</option>
                <option value="kanithos">Kanithos Hill</option>
                <option value="kastro">Kastro</option>
                <option value="industrialzone">Industrial Zone</option>
            </select>

            <span id="terms" style="display: flex; flex-direction:row">
                <label for="check" style="font-size:15px">I agree with the terms</label>
                <input type="checkbox" name="check" required>
            </span>
            <br>
            <input type="submit">
        </form>
    </div>
</div>

<footer>
        <?php 
            include ("Assets/php/footer.php")
        ?>
</footer>

</body>
</html>
