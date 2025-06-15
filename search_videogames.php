<?php

require_once 'auth.php';

if (!checkAuth()) exit;

header('Content-Type: application/json');

igdb();

function igdb()
{
    $client_id = "secret";
    $client_secret = "secret";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://id.twitch.tv/oauth2/token');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['client_id' => $client_id, 'client_secret' => $client_secret, 'grant_type' => 'client_credentials']));
    $token_response = json_decode(curl_exec($ch), true);
    curl_close($ch);

    $access_token = $token_response['access_token'];

    $query = $_GET['q'];
    $body = "search \"$query\"; fields name, cover.url, genres.name, platforms.name, rating, summary, first_release_date, involved_companies.company.name, involved_companies.developer; limit 1;";

    $ch = curl_init('https://api.igdb.com/v4/games');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Client-ID: ' . $client_id, 'Authorization: Bearer ' . $access_token));
    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
}
?>