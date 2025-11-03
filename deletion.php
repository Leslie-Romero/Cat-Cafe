<?php
    include 'db-connect.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['reservationID'])) {
        $stmt = $db_server->prepare("DELETE FROM reservations WHERE id=(?)");
        $stmt->bind_param("s", $_GET['reservationID']);
        $stmt->execute();
    }

    header("Location: details.php");

?>  