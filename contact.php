<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <title>Cat Café - Contact</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="functions.js"></script>
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
        <a class="nav-link" href="cats.php">Cats</a>
        <a class="nav-link" href="reservations.php">Reservations</a>
        <a class="nav-link active" href="contact.php">Contact</a>
    </nav>

    <div class="container-fluid" style="padding: 3% 6% 6% 6%;">
        <div class="row">
            <div class="col-sm-6" style="padding: 2% 2% 0 2%;">
                <h2 style="font-weight: bold; color: #3b5045; padding-bottom: 1%;">Contact</h2>
                <p style="font-size: medium;">
                    Here, in The Cat Café, we like to be in close connection with
                    our customers, to make the experience not only as pleasant as possible
                    for you, but also for our main protagonists, our cats.
                </p>
                <img class="img-fluid" src="media/phone-icon.jpg" alt="phone-icon" style="width: 25px; display: inline;"> <b>687 54 01 83</b>
                <br>
                <img class="img-fluid" src="media/mail-icon.jpg" alt="mail-icon" style="width: 25px; display: inline;"> <b>thecatcafe@mail.com</b>
                <br>
                <br>

                <h2 style="font-weight: bold; color: #3b5045;">Send us a message</h2>
                <p style="font-size: smaller;"><em>* Required fields</em></p>
                <form style="margin-bottom: 0;" onsubmit="return validateContact()">
                    <div class="row">
                        <div class="col">
                            <label for="inputName">Name *</label>
                            <input type="text" id="inputName" class="form-control" placeholder="Jane" pattern="[A-Za-z]+" title="The name can only contain leters" required>
                        </div>
                        <div class="col">
                            <label for="inputSurname">Surname</label>
                            <input type="text" id="inputSurname" class="form-control" placeholder="Doe" pattern="[A-Za-z]+" title="The name can only contain letters">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailInput">Email *</label>
                        <input type="email" class="form-control" id="emailInput" placeholder="name@example.com" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="name@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="subjectInput">Subject *</label>
                        <input type="text" class="form-control" id="subjectInput" placeholder="E.g. Further info about adoption" required>
                    </div>
                    <div class="form-group">
                        <label for="descInput">Description</label>
                        <textarea class="form-control" id="descInput" placeholder="Description" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-right submit-btn" onclick="validateContact()">Submit</button>
                </form>
            </div>
            <div class="col-sm-6" style="padding: 2%;">
                <img src="media/contact.jpeg" class="img-fluid" alt="decorative image of cats" style="border-radius: 20px; height: 90%; object-fit: cover;">
            </div>
        </div>
    </div>

    <?php
        include "footer.php"
    ?>
    
</body>
</html>