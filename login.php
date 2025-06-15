<?php
    include 'auth.php';
    if (checkAuth()) {
        header('Location: home.php');
        exit;
    }

    if (!empty($_POST["email"]) && !empty($_POST["password"]) )
    {
        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $query = "SELECT * FROM users WHERE email = '".$email."'";
        $res = mysqli_query($conn, $query) or die(mysqli_error($conn));;
        
        if (mysqli_num_rows($res) > 0) {
            $entry = mysqli_fetch_assoc($res);
            if (password_verify($_POST['password'], $entry['password'])) {
                $_SESSION["_agora_email"] = $entry['email'];
                $_SESSION["_agora_user_id"] = $entry['id'];
                header("Location: home.php");
                mysqli_free_result($res);
                mysqli_close($conn);
                exit;
            }
        }
        $error = "Email e/o password errati.";
    }
    else if (isset($_POST["email"]) || isset($_POST["password"])) {
        $error = "Inserisci email e/o password.";
    }

?>