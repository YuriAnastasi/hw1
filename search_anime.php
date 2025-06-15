<?php

require_once 'auth.php';

if (!checkAuth()) exit;

header('Content-Type: application/json');

jikan();

function jikan()
{
    if (!isset($_GET["q"])) {
        echo json_encode(["error" => "Parametro 'q' mancante."]);
        exit;
    }

    $query = urlencode($_GET["q"]);
    $url = 'https://api.jikan.moe/v4/anime?q=' . $query . '&limit=1&type=tv';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $res = curl_exec($ch);
    curl_close($ch);

    echo $res;
}
?>