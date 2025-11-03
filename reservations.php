<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <title>Cat Café - Reservations</title>
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
    <!--END LOGO-->
    <nav class="nav nav-underline fixed-top justify-content-center" id="my-nav">
        <a class="nav-link" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="cats.php">Cats</a>
        <a class="nav-link active" href="reservations.php">Reservations</a>
        <a class="nav-link" href="contact.php">Contact</a>
    </nav>

    <!--FORM-->
    <div class="container-fluid" style="padding: 3% 6% 6% 6%;">
        <div class="row">
            <div class="col-sm-6" style="padding: 2%;">
                <h2 style="font-weight: bold; color: #3b5045;">Make a reservation</h2>
                <p style="font-size: smaller;"><em>All fields are required</em></p>

                <?php
                    // Read the information from the form and save in the DB
                    include 'db-connect.php';

                    function check(){
                        return isset($_POST["name"], $_POST["surname"], $_POST["email"], $_POST["date"], 
                            $_POST["radioOptions"]);
                    }

                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && check()) {
                        $name = $_POST["name"];
                        $surname = $_POST["surname"];
                        $email = $_POST["email"];
                        $date = $_POST["date"];
                        $radioOption = $_POST["radioOptions"];

                        if ($radioOption == "timeslot1") {
                            $timeframe = "10:00-10:55";
                        } else if ($radioOption == "timeslot2"){
                            $timeframe = "11:00-11:55";
                        } else if ($radioOption == "timeslot3") {
                            $timeframe = "12:00-12:55";
                        } else if ($radioOption == "timeslot4") {
                            $timeframe = "15:00-15:55";
                        } else if ($radioOption == "timeslot5") {
                            $timeframe = "16:00-16:55";
                        } else if ($radioOption == "timeslot6") {
                            $timeframe = "17:00-17:55";
                        }

                        $stmt = $db_server->prepare("INSERT INTO reservations (name, surname, email, date, timeframe) VALUES (?, ?, ?, ?, ?)");
                        $stmt->bind_param("sssss", $name, $surname, $email, $date, $timeframe);
                        $stmt->execute();
                    }

                ?>

                <form style="margin-bottom: 0;" onsubmit="return validateReservations()" action="reservations.php" method="post">
                    <div class="row">
                        <div class="col">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" id="inputName" class="form-control" placeholder="John" pattern="[A-Za-z]+" title="The name can only contain leters" required>
                        </div>
                        <div class="col">
                            <label for="inputSurname">Surname</label>
                            <input type="text" name="surname" id="inputSurname" class="form-control" placeholder="Doe" pattern="[A-Za-z]+" title="The name can only contain letters" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailInput">Email</label>
                        <input type="email" name="email" class="form-control" id="emailInput" placeholder="name@example.com" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="name@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="dateInput">Date</label>
                        <input type="date" name="date" class="form-control" id="dateInput">
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="radioOptions" id="inlineRadio1" value="timeslot1">
                        <label for="inlineRadio1" class="form-check-label time-label">10:00</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="radioOptions" id="inlineRadio2" value="timeslot2">
                        <label for="inlineRadio2" class="form-check-label time-label">11:00</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="radioOptions" id="inlineRadio3" value="timeslot3">
                        <label for="inlineRadio3" class="form-check-label time-label">12:00</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="radioOptions" id="inlineRadio4" value="timeslot4">
                        <label for="inlineRadio4" class="form-check-label time-label">15:00</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="radioOptions" id="inlineRadio5" value="timeslot5">
                        <label for="inlineRadio5" class="form-check-label time-label">16:00</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="radioOptions" id="inlineRadio6" value="timeslot6">
                        <label for="inlineRadio6" class="form-check-label time-label">17:00</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="radioOptions" id="inlineRadio7" value="timeslot7">
                        <label for="inlineRadio7" class="form-check-label time-label">18:00</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary submit-btn" onclick="validateReservations()">Submit</button>
                </form>
            </div>
            <div class="col-sm-6" style="padding: 2%;">
                <img src="media/reservation.jpg" class="img-fluid" alt="decorative image of cats" style="border-radius: 20px; height: 100%; object-fit: cover;">
            </div>
        </div>
        <div class="row">
            <?php
                $name = "";
                $surname = "";
                $email = "";
                $date = "";
                $timeframe = "";
                    
                $query = $db_server->query("SELECT * FROM reservations");

                $count = min($query->num_rows, 3);

                if ($count >= 1) {

                    for ($i = 0; $i<$count; $i++) {
                    $row = $query->fetch_assoc();

                    $name = $row['name'];
                    $surname = $row['surname'];
                    $email = $row['email'];
                    $date = $row['date'];
                    $timeframe = $row['timeframe'];?>

            <div class="col-sm-4">
                <div class="card" style="box-shadow: 0 2px 6px 0 #4c685ab1, 0 4px 10px 0 #4c685ab1; width: 100%;">
                    <div class="card-body">
                        <div class="card-title" style="padding: 1% 1% 0.5% 5%;"><h2 class="fw-bold">Details</h2></div>
                        <dl class="row" style="padding-left: 5%">
                            <dt class="col-sm-6">Full name</dt>
                            <dd class="col-sm-6"><?php echo $name . " " . $surname?></dd>
                            <dt class="col-sm-6">Email</dt>
                            <dd class="col-sm-6"><?php echo $email?></dd>
                            <dt class="col-sm-6">Date</dt>
                            <dd class="col-sm-6"><?php echo $date ?></dd>
                            <dt class="col-sm-6">Time frame</dt>
                            <dd class="col-sm-6"><?php echo $timeframe?></dd>
                        </dl>
                    </div>
                </div>
            </div>

            <?php

                    }
                }   

            ?>
            
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-2">
                <a class="btn btn-primary all-res" href="details.php">See all reservations</a>
            </div>
        </div>
    </div>
    <!--END FORM-->

    <?php
        include "footer.php";

        $db_server->close();
    ?>
</body>
</html>