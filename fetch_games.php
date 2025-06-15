<?php
require_once 'auth.php';
if (!$userid = checkAuth()) exit;

header('Content-Type: application/json');

$conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);

$userid = mysqli_real_escape_string($conn, $userid);

$next = isset($_GET['from']) ? 'AND games.id < ' . mysqli_real_escape_string($conn, $_GET['from']) . ' ' : '';

$query = "SELECT id, user_id, game_id, content FROM games WHERE user_id = $userid $next ORDER BY id DESC LIMIT 5";

$res = mysqli_query($conn, $query) or die(mysqli_error($conn));

$gameArray = array();
while ($entry = mysqli_fetch_assoc($res)) {
    $gameArray[] = array(
        'userid' => $entry['user_id'],
        'gameid' => $entry['game_id'],
        'content' => json_decode($entry['content'])
    );
}

echo json_encode($gameArray);

exit;
?>