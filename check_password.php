<?php
require_once 'dbconfig.php';

header('Content-Type: application/json');

$conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);

$email = mysqli_real_escape_string($conn, $_POST["email"]);

$password = $_POST["password"];

$query = "SELECT * FROM users WHERE email = '$email'";

$res = mysqli_query($conn, $query) or die(mysqli_error($conn));

if (mysqli_num_rows($res) > 0) {
    $entry = mysqli_fetch_assoc($res);

    if (password_verify($password, $entry["password"])) {
        echo json_encode(['exists' => true]);
    } else {
        echo json_encode(['exists' => false]);
    }
} else {
    echo json_encode(['exists' => false]);
}

mysqli_close($conn);
?>