<?php
require_once 'auth.php';
if (!$userid = checkAuth()) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<?php
$conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
$userid = mysqli_real_escape_string($conn, $userid);
$query = "SELECT * FROM users WHERE id = $userid";
$res_1 = mysqli_query($conn, $query);
$userinfo = mysqli_fetch_assoc($res_1);
?>

<head>
    <title>Multiplayer.it - Videogiochi per PC, console, iPhone, iPad e Android</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="profile.js" defer></script>
</head>

<body>
    <nav>
        <div id="flex-containerlogo">
            <a href="home.php"><img class="logosito" src="assets/logo.png"></a>
        </div>
        <div id="flex-containericone">
            <div id="flex-containericona">
                <div id="flex-containermenu">
                    <div class="flex-lines">
                    </div>
                    <div class="flex-lines">
                    </div>
                    <div class="flex-lines">
                    </div>
                </div>
                <div class="itemicona">
                    <strong>PIATTAFORME</strong>
                </div>
            </div>
            <div id="flex-containericona">
                <div id="flex-containermenu">
                    <div class="flex-lines">
                    </div>
                    <div class="flex-lines">
                    </div>
                    <div class="flex-lines">
                    </div>
                </div>
                <div class="itemicona">
                    <strong>RECENSIONI</strong>
                </div>
            </div>
            <div id="flex-containericona">
                <div id="flex-containermenu">
                    <div class="flex-lines">
                    </div>
                    <div class="flex-lines">
                    </div>
                    <div class="flex-lines">
                    </div>
                </div>
                <div class="itemicona">
                    <strong>NEWS</strong>
                </div>
            </div>
            <div id="flex-containericona">
                <div class="itemicona">
                    <strong>VIDEO</strong>
                </div>
            </div>
            <div id="flex-containericona">
                <div class="itemicona">
                    <strong>LIVE</strong>
                </div>
            </div>
            <div id="flex-containericona">
                <div class="itemicona">
                    <strong>GIOCHI</strong>
                </div>
            </div>
            <div id="flex-containericona2">
                <div class="itemiconasearch">
                    <img class="logosearch" src="assets/search.png">
                </div>
            </div>
            <div id="flex-containericona2">
                <div class="itemiconalogin">
                    <a href="profile.php"><img class="logologin" src="assets/loginprofile.png"></a>
                </div>
            </div>
        </div>
    </nav>
    <div id="search" class="hidden">
        <div id="flex-containersearch">
            <input type="text" placeholder="CERCA NEL SITO..." />
            <div class="flex-itemsearchsend">
                <img class="logosearch" src="assets/search.png">
            </div>
            <div class="flex-itemsearchclose">
                <img class="logosearch2" src="assets/close.png">
            </div>
        </div>
    </div>
    <section>
        <div id="profilecontainer">
            <div class="propic">
                <img src="assets/profilepicture.png" width="100%" height="100%">
            </div>
            <div id="propictest">
                <div class="propic2">
                    <strong><?php echo $userinfo['username'] ?></strong>
                </div>
                <div class="propic2">
                    <a href="logout.php"><strong>Logout</strong></a>
                </div>
                <div id="propicapi">
                    <div class="propic3">
                        <a href="apianime.php"><strong>Anime</strong></a>
                    </div>
                    <div class="propic3">
                        <a href="apivideogames.php"><strong>Games</strong></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="risultati-testo"><strong>I miei anime preferiti:</strong></div>
        <div id="container-risultati3">
            <div id="risultati3">

            </div>
        </div>
        <div class="risultati-testo"><strong>I miei videgiochi preferiti:</strong></div>
        <div id="container-risultati4">
            <div id="risultati4">

            </div>
        </div>
    </section>
    <footer>
        <div id="flex-containerinformazioni">
            <div class="flex-itemloghi">
                <p><img src="assets/logo.png" width="200" height="25"></p>
                <p>
                    <img src="assets/facebook.png" width="25" height="25">
                    <img src="assets/x.png" width="25" height="25">
                    <img src="assets/instagram.png" width="25" height="25">
                    <img src="assets/telegram.png" width="25" height="25">
                    <img src="assets/twitch.png" width="25" height="25">
                    <img src="assets/youtube.png" width="25" height="25">
                    <img src="assets/connection.png" width="25" height="25">
                </p>
            </div>
            <div class="flex-itemdescrizione">
                <p>Dedicato cervello e anima a tutti quelli che i videogiochi li hanno nel sangue, Multiplayer.it è il
                    punto di riferimento italiano per l'intrattenimento del presente e del futuro. Preparatevi ad essere
                    stupiti ogni giorno con articoli, news, video, live e produzioni geniali.</p>
                <p><em>Tutti i prezzi sono validi al momento della pubblicazione. Se fai click o acquisti qualcosa,
                        potremmo ricevere un compenso.</em></p>
                <p>
                    <u>Informativa sui cookie</u>
                    <u>Privacy Policy</u>
                    <u>Termini e condizioni</u>
                    <u>Contatti</u>
                    <u>Lavora con noi</u>
                    <u>Aggiorna le impostazioni di tracciamento della pubblicità</u>
                </p>
                <div class="flex-itemcontorno2"></div>
                <p>
                    IL NETWORK
                    <img class="logoinformazioni" src="assets/netaddiction.png">
                </p>
                <div class="flex-itemcontorno2"></div>
                <p>
                    <strong><u>Multiplayer</u></strong>
                    <strong><u>Movieplayer</u></strong>
                    <strong><u>Dissapore</u></strong>
                    <strong><u>Fidelity House</u></strong>
                    <strong><u>Lega Nerd</u></strong>
                    <strong><u>Garage Pizza</u></strong>
                    <strong><u>Gameplay Café</u></strong>
                    <strong><u>Multiplayer Edizioni</u></strong>
                </p>
                <p>
                <h6>© 2025 NetAddiction Srl - P.iva: 01206540559 - Sede Legale: Piazza Europa, 19 - 05100 Terni (TR)
                    Italy</h6>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>