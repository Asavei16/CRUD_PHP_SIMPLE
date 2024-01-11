<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pwp = $_POST["pwp"];

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE username = :username AND pwp = :pwp;";

        $stmt = $pdo->prepare($query);

        $stmt -> bindParam(":username", $username);
        $stmt -> bindParam(":pwp", $pwp);

        $stmt -> execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();

    } catch (PDOException $e){
        die("Query failed: " . $e -> getMessage());
    }
} else {
    header("Location: ../index.php");
}

?>