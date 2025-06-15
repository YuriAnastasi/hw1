<?php

require_once 'auth.php';

if (checkAuth()) {
    header("Location: home.php");
    exit;
}

if (!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["email"])) {
    $error = array();
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

    if (!preg_match('/^[a-zA-Z0-9 ]{1,15}$/', $_POST['username'])) {
        $error[] = "Username non valido";
    } else {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $query = "SELECT username FROM users WHERE username = '$username'";
        $res = mysqli_query($conn, $query);
        if (mysqli_num_rows($res) > 0) {
            $error[] = "Username già utilizzato";
        }
    }

    if (strlen($_POST["password"]) < 8) {
        $error[] = "Caratteri password insufficienti";
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error[] = "Email non valida";
    } else {
        $email = mysqli_real_escape_string($conn, strtolower($_POST['email']));
        $res = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
        if (mysqli_num_rows($res) > 0) {
            $error[] = "Email già utilizzata";
        }
    }

    if (count($error) == 0) {
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO users(email, username, password) VALUES('$email', '$username', '$password')";

        if (mysqli_query($conn, $query)) {
            $_SESSION["_agora_user_id"] = mysqli_insert_id($conn);
            mysqli_close($conn);
            header("Location: home.php");
            exit;
        } else {
            $error[] = "Errore, connessione al Database fallita";
        }
    }

    mysqli_close($conn);
} else if (isset($_POST["username"])) {
    $error = array("Riempi gli spazi lasciati vuoti per continuare");
}
?>