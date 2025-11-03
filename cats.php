<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="functions.js"></script>
    <title>Cat Café - Cats</title>
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
        <a class="nav-link" aria-current="page" href="index.php">Home</a>
        <a class="nav-link active" href="cats.php">Cats</a>
        <a class="nav-link" href="reservations.php">Reservations</a>
        <a class="nav-link" href="contact.php">Contact</a>
    </nav>
    
    <h1 style="text-align: center; margin-top: 2vh; color: #3b5045;">MEET THE CATS</h1>

    <div id="filter-block">
        <span id="all" class="filter selected">All ages</span>
        <span id="kitten" class="filter">Kittens</span>
        <span id="2-5y" class="filter">2-5 Years</span>
        <span id="5-more" class="filter">5+ Years</span>
    </div>

    <div class="container-fluid cat-cards">
        <div class="row">
            <div class="col-sm-3 cat-card kitten all">
                <div class="card">
                    <img src="media/cat1.jpeg" alt="Cat 1 - Emily" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Emily</h4>
                        <p class="card-text">
                            This is Emily. She's a very social and playful kitten 
                            despite looking like she might scratch you, 
                            she loves to curiously peek at you from her perch.
                        </p>
                        <a href="" class="btn btn-primary card-button">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 cat-card 2-5y all">
                <div class="card">
                    <img src="media/cat2.png " alt="Cat 2 - Leo" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Leo</h4>
                        <p class="card-text">
                            This is Leo. While he may look like your typical
                            orange cat, with not thoughts behind those eyes.
                            He will steal your spot if you're not careful.
                        </p>
                        <a href="" class="btn btn-primary card-button">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 cat-card 5-more all">
                <div class="card">
                    <img src="media/cat3.png" alt="Cat 3 - Lucy" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Lucy</h4>
                        <p class="card-text">
                            This is Lucy. She's more of a wild spirit.
                            She doesn't love everyone's company, so if
                            she decides to get closer to you, consider
                            yourself lucky.
                        </p>
                        <a href="" class="btn btn-primary card-button">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 cat-card 5-more all">
                <div class="card">
                    <img src="media/cat4.jpeg" alt="Cat 4 - Niko" class="card-img-top" >
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Niko</h4>
                        <p class="card-text">
                            This is Niko. He knocks stuff over, 
                            climbs everything, and acts like he owns the place. 
                            But when he curls up on your chest, you can't resist him.
                        </p>
                        <a href="" class="btn btn-primary card-button">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 cat-card 5-more all">
                <div class="card">
                    <img src="media/cat5.jpeg" alt="Cat 5 - Cleo" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Cleo</h4>
                        <p class="card-text">
                            This is Cleo. She prefers silence and sunbeams. 
                            If she sits beside you, she means it. No games — 
                            just quiet trust and slow blinks from across the room.
                        </p>
                        <a href="" class="btn btn-primary card-button">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 cat-card 2-5y all">
                <div class="card">
                    <img src="media/cat6.jpg" alt="Cat 6 - Theo" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Theo</h4>
                        <p class="card-text">
                            This is Theo. He chirps, flops, and always gets 
                            in the way. He’ll stare into your soul while 
                            lying upside down like he’s asking if he’s doing life right.
                        </p>
                        <a href="" class="btn btn-primary card-button">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 cat-card kitten all">
                <div class="card">
                    <img src="media/cat7.jpeg" alt="Cat 7 - Misty" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Misty</h4>
                        <p class="card-text">
                            This is Misty. She’ll vanish when there's too many
                            people, but she will watch you from under the furniture where
                            she feels the safest.
                        </p>
                        <a href="" class="btn btn-primary card-button">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 cat-card 2-5y all">
                <div class="card">
                    <img src="media/cat8.jpg" alt="Cat 8 - Rocket" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Rocket</h4>
                        <p class="card-text">
                            This is Rocket. He zooms all around, 
                            pounces on nothing, and demands attention loudly. But he always 
                            falls asleep snuggled close.
                        </p>
                        <a href="" class="btn btn-primary card-button">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        include "footer.php"
    ?>
       
</body>
</html>