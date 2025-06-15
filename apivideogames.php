<!DOCTYPE html>
<html>

<head>
    <title>Multiplayer.it - Videogiochi per PC, console, iPhone, iPad e Android</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="apivideogames.js" defer></script>
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
    <section id="container-searchvideogames">
        <div class="searchvideogamestitle">
            <div class="searchintro"><strong>Cerca le informazioni sul tuo videogioco preferito!</strong></div>
        </div>
        <form autocomplete="off">
            <div class="searchvideogames">
                <label for="search">Cerca</label>
                <input type="text" name="search" class="searchBar">
                <input type="submit" value="Cerca" style="display: none">
            </div>
        </form>
        <div class="container-risultati2">
            <div id="risultati2"></div>
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