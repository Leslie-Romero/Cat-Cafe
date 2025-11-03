<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="functions.js"></script>
    <title>Cat Café - Home</title>

</head>
<body>
    <!--LOGO-->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3">
                <img class="text-center img-fluid" src="media/transparent-logo.png" alt="Logo">
            </div>
        </div>
    </div>
    <!---->
    <nav class="nav nav-underline fixed-top justify-content-center" id="my-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="cats.php">Cats</a>
        <a class="nav-link" href="reservations.php">Reservations</a>
        <a class="nav-link" href="contact.php">Contact</a>
    </nav>

    <header class="img-container">
        <img class="main-image" src="media/main_image.jpg" alt="Image of the Cat Café">
        <div class="main-title">
            <h1>WELCOME TO <span style="color: white;">THE CAT CAFÉ</span></h1>
            <h2><em>The best place to escape from reality</em></h2>
        </div>
    </header>

    <br>

    <article class="container-fluid" style="padding-left: calc(8px + 1.5625vw)">
        <div class="row ">
            <div class="col-sm-7" style="padding: 1% 3% 0 3%;">
                <h1>Where Purrs Meet Coffee</h1>
                <br>
                <p style="text-align: justify;">
                    Nestled in the heart of the city, The Cat Café is your cozy escape from the hustle and bustle of everyday life. 
                    We’re more than just a coffee shop — we’re a haven for cat lovers, coffee enthusiasts, and anyone looking for a little comfort and companionship.
                    Enjoy our selection of premium coffees, teas, and freshly baked pastries while spending time with our adorable, adoptable rescue cats. 
                    Whether you're here to work, relax, or just unwind with a purring friend in your lap, we’ve created a space that feels just like home — only fuzzier.
                    Come alone or bring friends. Make a reservation or drop in. The cats are always happy to see you — and we are too.
                </p>
                <br>
                <div id="schedule">
                    <p>
                        <span style="font-weight: bold; color: #3c5247;">We’re open every day!</span>
                    </p>
                    <p>
                        Mon – Fri: 10:00 – 18:00
                    </p>
                    <p>
                        Sat – Sun: 11:00 – 16:00
                    </p>
                </div>
                <br>
                <div class="my-button">
                    <a href="reservations.php">Make a reservation</a>
                </div>

                <br>
                
            </div>
            <div class="col-sm-5" style="padding-top: 1%; padding-right: 3%;">
                <img class="img-fluid center-image" src="media/cat-playing.jpg" alt="Cat playing" style="border-radius: 10px;">
                <br>
            </div>
        </div>
    </article>

    <br>

    <?php
        include "footer.php"
    ?>

</body>
</html>