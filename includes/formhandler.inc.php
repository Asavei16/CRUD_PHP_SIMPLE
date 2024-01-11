<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pwp = $_POST["pwp"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        // $query = "INSERT INTO users (username, pwp, email) VALUES ($username, $pwp, $email);";
        $query = "INSERT INTO users (username, pwp, email) VALUES (:username, :pwp, :email);";
        // $query = "INSERT INTO users (username, pwp, email) VALUES (?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt -> bindParam(":username", $username);
        $stmt -> bindParam(":pwp", $pwp);
        $stmt -> bindParam(":email", $email);

        // $stmt->execute([$username, $pwp, $email]);
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