<?php
require_once 'auth.php';
if (!$userid = checkAuth()) {
    header("Location: index.php");
    exit;
}
?>

<html>

<head>
    <title>Multiplayer.it - Videogiochi per PC, console, iPhone, iPad e Android</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="home.js" defer></script>
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
        <div id="flex-containerarticoli">
            <div id="flex-containerarticolo" data-index="1" data-favorite="false">
                <div class="flex-itemarticolothumbnail">
                    <div class="flex-itemarticoloimmagine">
                        <img class="logoarticolo" src="assets/articolo1.png">
                    </div>
                    <div class="favoriteicon">
                        <img class="favoritebutton" src="assets/favorite(off).png">
                    </div>
                </div>
                <div class="flex-itemarticolotesto">
                    <strong>PROVATO THE FOREVER WINTER</strong><br>
                    <strong>La vera sfida è sopravvivere al mercato</strong>
                </div>
            </div>
            <div id="flex-containerarticolo" data-index="2" data-favorite="false">
                <div class="flex-itemarticolothumbnail">
                    <div class="flex-itemarticoloimmagine">
                        <img class="logoarticolo" src="assets/articolo2.png">
                    </div>
                    <div class="favoriteicon">
                        <img class="favoritebutton" src="assets/favorite(off).png">
                    </div>
                </div>
                <div class="flex-itemarticolotesto">
                    <strong>SPECIALE GOD OF WAR</strong><br>
                    <strong>A vent'anni dal debutto, ripercorriamo la rinascita di God of War</strong>
                </div>
            </div>
            <div id="flex-containerarticolo" data-index="3" data-favorite="false">
                <div class="flex-itemarticolothumbnail">
                    <div class="flex-itemarticoloimmagine">
                        <img class="logoarticolo" src="assets/articolo3.png">
                    </div>
                    <div class="favoriteicon">
                        <img class="favoritebutton" src="assets/favorite(off).png">
                    </div>
                </div>
                <div class="flex-itemarticolotesto">
                    <strong>RECENSIONE CATACLISMO</strong><br>
                    <strong>Obiettivo, costruire enormi fortezze e resistere ai mostri</strong>
                </div>
            </div>
            <div id="flex-containerarticolo" data-index="4" data-favorite="false">
                <div class="flex-itemarticolothumbnail">
                    <div class="flex-itemarticoloimmagine">
                        <img class="logoarticolo" src="assets/articolo4.png">
                    </div>
                    <div class="favoriteicon">
                        <img class="favoritebutton" src="assets/favorite(off).png">
                    </div>
                </div>
                <div class="flex-itemarticolotesto">
                    <strong>INTERVISTA TOMB RAIDER 4-6 REMASTERED</strong><br>
                    <strong>Come si reustaurano i giochi più controversi di Lara Croft?</strong>
                </div>
            </div>
            <div id="flex-containerarticolo" data-index="5" data-favorite="false">
                <div class="flex-itemarticolothumbnail">
                    <div class="flex-itemarticoloimmagine">
                        <img class="logoarticolo" src="assets/articolo5.png">
                    </div>
                    <div class="favoriteicon">
                        <img class="favoritebutton" src="assets/favorite(off).png">
                    </div>
                </div>
                <div class="flex-itemarticolotesto">
                    <strong>ACTIVE 2</strong><br>
                    <strong>Lo smartwatch che sfida i top di gamma con un prezzo aggressivo</strong>
                </div>
            </div>
            <div id="flex-containerarticolo" data-index="6" data-favorite="false">
                <div class="flex-itemarticolothumbnail">
                    <div class="flex-itemarticoloimmagine">
                        <img class="logoarticolo" src="assets/articolo6.png">
                    </div>
                    <div class="favoriteicon">
                        <img class="favoritebutton" src="assets/favorite(off).png">
                    </div>
                </div>
                <div class="flex-itemarticolotesto">
                    <strong>PROVATO INZOI</strong><br>
                    <strong>L'evoluzione naturale di The Sims?</strong>
                </div>
            </div>
            <div id="flex-containerarticolo" data-index="7" data-favorite="false">
                <div class="flex-itemarticolothumbnail">
                    <div class="flex-itemarticoloimmagine">
                        <img class="logoarticolo" src="assets/articolo7.png">
                    </div>
                    <div class="favoriteicon">
                        <img class="favoritebutton" src="assets/favorite(off).png">
                    </div>
                </div>
                <div class="flex-itemarticolotesto">
                    <strong>ANTEPRIMA FBC: FIREBREAK</strong><br>
                    <strong>Uno sparatutto cooperativo nell'universo di Control</strong>
                </div>
            </div>
            <div id="flex-containerarticolo" data-index="8" data-favorite="false">
                <div class="flex-itemarticolothumbnail">
                    <div class="flex-itemarticoloimmagine">
                        <img class="logoarticolo" src="assets/articolo8.png">
                    </div>
                    <div class="favoriteicon">
                        <img class="favoritebutton" src="assets/favorite(off).png">
                    </div>
                </div>
                <div class="flex-itemarticolotesto">
                    <strong>SPECIAL POKÉMON SMILE</strong><br>
                    <strong>Come Pokémon Smile ci ha aiutato a far lavare i denti ai figli</strong>
                </div>
            </div>
            <div id="flex-containerarticolo" data-index="9" data-favorite="false">
                <div class="flex-itemarticolothumbnail">
                    <div class="flex-itemarticoloimmagine">
                        <img class="logoarticolo" src="assets/articolo9.png">
                    </div>
                    <div class="favoriteicon">
                        <img class="favoritebutton" src="assets/favorite(off).png">
                    </div>
                </div>
                <div class="flex-itemarticolotesto">
                    <strong>PROVATO HALF-LIFE 2 RTX</strong><br>
                    <strong>Il capolavoro di Valve si rifà il trucco</strong>
                </div>
            </div>
            <div id="flex-containernotizie">
                <div id="flex-containernotizia">
                    <div class="flex-itemnotiziaimmagine">
                        <img class="logonotizie" src="assets/notizia1.png">
                    </div>
                    <div class="flex-itemnotiziatesto">
                        <h6>42 MINUTI FA|NOTIZIA|NVIDIA RTX PRO 6000 BLACKWELL</h6>
                        <strong>NVIDIA RTX PRO 6000 Blackwell spunta nel listino di un rivenditore, costa 8500
                            dollari</strong>
                    </div>
                    <div class="flex-itemcontorno"></div>
                </div>
                <div class="flex-itemcontorno"></div>
                <div id="flex-containernotizia">
                    <div class="flex-itemnotiziaimmagine">
                        <img class="logonotizie" src="assets/notizia2.png">
                    </div>
                    <div class="flex-itemnotiziatesto">
                        <h6>UN'ORA FA|NOTIZIA|INDIANA JONES E L'ANTICO CERCHIO</h6>
                        <strong>La data di uscita della versione PS5 di Indiana Jones e l'Antico Cerchio sta per essere
                            annunciata?</strong>
                    </div>
                    <div class="flex-itemcontorno"></div>
                </div>
                <div class="flex-itemcontorno"></div>
                <div id="flex-containernotizia">
                    <div class="flex-itemnotiziaimmagine">
                        <img class="logonotizie" src="assets/notizia3.png">
                    </div>
                    <div class="flex-itemnotiziatesto">
                        <h6>3 ORE FA|NOTIZIA|SOLO LEVELING</h6>
                        <strong>Il trailer del finale della seconda stagione di Solo Leveling è esplosivo</strong>
                    </div>
                    <div class="flex-itemcontorno"></div>
                </div>
                <div class="flex-itemcontorno"></div>
                <div id="flex-containernotizia">
                    <div class="flex-itemnotiziaimmagine">
                        <img class="logonotizie" src="assets/notizia4.png">
                    </div>
                    <div class=" flex-itemnotiziatesto">
                        <h6>5 ORE FA|NOTIZIA|GOD OF WAR</h6>
                        <strong>Uno spin-off di God of War dovrebbe uscire entro la fine dell'anno, stando al
                            giornalista Jeff Grubb</strong>
                    </div>
                    <div class="flex-itemcontorno"></div>
                </div>
                <div class="flex-itemcontorno"></div>
                <div id="flex-containernotizia">
                    <div class="flex-itemnotiziaimmagine">
                        <img class="logonotizie" src="assets/notizia5.png">
                    </div>
                    <div class="flex-itemnotiziatesto">
                        <h6>7 ORE FA|NOTIZIA|MINECRAFT</h6>
                        <strong>Mojang non userà l'intelligenza artificiale generativa con Minecraft</strong>
                    </div>
                    <div class="flex-itemcontorno"></div>
                </div>
                <div class="flex-itemcontorno"></div>
                <div id="flex-containernotizia">
                    <div class="flex-itemnotiziaimmagine">
                        <img class="logonotizie" src="assets/notizia6.png">
                    </div>
                    <div class="flex-itemnotiziatesto">
                        <h6>8 ORE FA|NOTIZIA|ASSASSIN'S CREED SHADOWS</h6>
                        <strong>Assassin's Creed Shadows bombardato di recensioni negative su Metacritic, ma su Steam i
                            giudizi sono ottimi</strong>
                    </div>
                    <div class="flex-itemcontorno"></div>
                </div>
                <div class="flex-itemcontorno"></div>
            </div>
            <div id="flex-containergiochiattesi">
                <div class="flex-itemgiochiattesititolo">
                    <strong>I GIOCHI PIÙ ATTESI</strong>
                </div>
                <div class="flex-itemgiochiattesi1">
                    <div id="overlay"></div>
                    <strong><em>30 MAGGIO 2025</em><br>LOST SOUL ASIDE</strong>
                </div>
                <div class="flex-itemgiochiattesi2">
                    <strong><em>27 MARZO 2025</em><br>THE FIRST BERSERKER: KHAZAN</strong>
                </div>
                <div class="flex-itemgiochiattesi3">
                    <strong><em>27 MARZO 2025</em><br>ATOMFALL</strong>
                </div>
                <div class="flex-itemgiochiattesi4">
                    <strong><em>24 APRILE 2025</em><br>CLAIR OBSCUR: EXPEDITION 33</strong>
                </div>
                <div class="flex-itemgiochiattesi5">
                    <strong><em>15 MAGGIO 2025</em><br>DOOM: THE DARK AGES</strong>
                </div>
            </div>
            <div id="flex-containerrecensioniesegnalaproblemi">
                <div id="flex-containerrecensioni">
                    <div id="flex-containerrecensionitesto">
                        <div class="flex-itemrecensioni"><strong>LE ULTIME RECENSIONI</strong></div>
                    </div>
                    <div class="flex-itemcontorno"></div>
                    <div id="flex-containerrecensionitesto">
                        <div class="flex-itemrecensionitesto"><strong>CATACLISMO</strong></div>
                        <div class="flex-itemvoto"><strong>7.5</strong></div>
                    </div>
                    <div class="flex-itemcontorno"></div>
                    <div id="flex-containerrecensionitesto">
                        <div class="flex-itemrecensionitesto"><strong>AMAZFIT ACTIVE 2</strong></div>
                        <div class="flex-itemvoto"><strong>8.5</strong></div>
                    </div>
                    <div class="flex-itemcontorno"></div>
                    <div id="flex-containerrecensionitesto">
                        <div class="flex-itemrecensionitesto"><strong>SSD WD_BLACK SN7100</strong></div>
                        <div class="flex-itemvoto"><strong>6.0</strong></div>
                    </div>
                    <div class="flex-itemcontorno"></div>
                    <div id="flex-containerrecensionitesto">
                        <div class="flex-itemrecensionitesto"><strong>ASSASSIN'S CREED SHADOW</strong></div>
                        <div class="flex-itemvoto"><strong>8.0</strong></div>
                    </div>
                    <div class="flex-itemcontorno"></div>
                    <div id="flex-containerrecensionitesto">
                        <div class="flex-itemrecensionitesto"><strong>XENOBLADE CHRONICLES X: DF</strong></div>
                        <div class="flex-itemvoto"><strong>9.0</strong></div>
                    </div>
                    <div class="flex-itemcontorno"></div>
                </div>
                <div id="flex-containersegnalaproblema">
                    <div class="flex-itemsegnalaproblema">
                        <strong>CONTATTA LA REDAZIONE</strong><br>
                        <em>Hai notato qualcosa che non va nel sito? Segnala il problema!</em>
                    </div>
                    <div class="flex-itemscriviproblema">
                        <textarea placeholder="Scrivi il tuo messaggio"></textarea>
                    </div>
                    <div class="flex-iteminviaproblema">
                        <button><strong>INVIA</strong></button>
                    </div>
                </div>
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