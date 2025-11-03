<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <title>Details of reservation</title>
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
        <a class="nav-link active" href="reservations.php">Reservations</a>
        <a class="nav-link" href="contact.php">Contact</a>
    </nav>

    <br>

    <h1 style="text-align: center; color:rgb(76, 104, 90); font-size: 5">All active reservations</h1>
    <div class="container-fluid">
        <div class="row">
            <?php
                include 'db-connect.php';

                $name = "";
                $surname = "";
                $email = "";
                $date = "";
                $timeframe = "";
                    
                $query = $db_server->query("SELECT * FROM reservations");

                    for ($i = 0; $i<$query->num_rows; $i++) {
                    $row = $query->fetch_assoc();
                    
                    $id = $row['id'];
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
                        <a href="deletion.php?reservationID=<?php echo $id ?>" class="btn btn-primary card-button float-end" style="margin: 1%">Delete reservation</a>
                    </div>
                </div>
            </div>

            <?php

                }

            ?>
        </div>
    </div>

    <br><br><br>
    <?php
        include "footer.php";

        $db_server->close();
    ?>

</body>
</html>