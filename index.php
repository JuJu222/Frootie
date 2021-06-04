<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "templates/head.php" ?>
    <link rel="stylesheet" href="css/home.css">
    <script src="js/main.js"></script>
    <title>Frootie</title>
</head>

<body>
<?php include "templates/navbar.php" ?>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="column">
                <h1>Try Out Our New <br>Fresh Fruits!</h1>
                <p>Our fruits are 100% authentic, breeded, and harvested from <br>
                    the best selection of greenhouses in Indonesia.
                    <br><a href="/frootie/product/product.php" class="button">See Our Products</a>
            </div>
            <div class="column">
                <img src="img/fruits.png">
            </div>
        </div>
    </div>
</div>
<!----------- Featured Categories---------------->
<div class="categories">
    <div class="smallContainer">
        <div class="space"></div>
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="column2">
                <img src="img/apple.png">
                <h4>Fuji Apple</h4>
                <p>Rp. 44,500</p>
                <p>1,000 g</p>
            </div>
            <div class="column2">
                <img src="img/pineapple.png">
                <h4>Wogan Orange</h4>
                <p>Rp. 40,000</p>
                <p>1,000 g</p>
            </div>
            <div class="column2">
                <img src="img/grape.png">
                <h4>Australian Grapes</h4>
                <p>Rp. 55,000</p>
                <p>500 g</p>
            </div>
        </div>
    </div>
</div>

<?php include "templates/footer.php" ?>

</body>

</html>