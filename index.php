<!DOCTYPE html>
<html>

<head>
    <title>Multiplayer.it - Videogiochi per PC, console, iPhone, iPad e Android</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="index.js" defer></script>
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
                    <img class="logologin" src="assets/login.png">
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
    <div id="login" class="hidden">
        <div id="flex-containerlogin">
            <div class="flex-itemlogincontorno1"></div>
            <div id="flex-containercloselogin">
                <div class="flex-itemcloselogin">
                    <img class="logologinclose" src="assets/close.png">
                </div>
            </div>
            <div class="flex-itemlogintitle">
                <strong>MULTIPLAYER LOGIN</strong>
            </div>
            <div class="flex-itemlogincontorno2"></div>
            <div class="flex-itemloginscelta">
                con il tuo social network
            </div>
            <div id="flex-containerloginsocialnetwork">
                <div class="flex-itemloginfacebookandgoogle">
                    <img class="logologinsocial" src="assets/facebooklogin.png">
                </div>
                <div class="flex-itemloginfacebookandgoogle">
                    <img class="logologinsocial" src="assets/googlelogin.png">
                </div>
            </div>
            <form id="formlogin" name='login' method='post' action="login.php">
                <!-- Seleziono il valore di ogni campo sulla base dei valori inviati al server via POST -->
                <div class="email">
                    <input type='text' id='inputlogin1' name='email' placeholder='Email' <?php if (isset($_POST["email"])) {echo "value=" . $_POST["email"];} ?>>
                </div>
                <div class="password">
                    <input type='password' id='inputlogin2' name='password' placeholder='Password' <?php if (isset($_POST["password"])) {echo "value=" . $_POST["password"];} ?>>
                </div>
                <div class="submit-container">
                    <div class="submit-item">
                        <input type='submit' value="Login">
                    </div>
                </div>
            </form>
            <div id="flex-containerloginother">
                <span class="flex-itemloginforgetpassword">
                    Password dimenticata?
                </span>
                <span class="flex-itemloginregister">
                    <strong>Registrati</strong>
                </span>
            </div>
        </div>
    </div>
    <div id="registrazione" class="hidden">
        <div id="flex-containerregistrazione">
            <div class="flex-itemlogincontorno1"></div>
            <div id="flex-containercloseregistrazione">
                <div class="flex-itemcloseregistrazione">
                    <img class="logoregistrazioneclose" src="assets/close.png">
                </div>
            </div>
            <div class="flex-itemlogintitle">
                <strong>REGISTRAZIONE</strong>
            </div>
            <div class="flex-itemlogincontorno2"></div>
            <form id="formsignup" name='signup' method='post' enctype="multipart/form-data" autocomplete="off" action="signup.php">
                <div class="username">
                    <input type='text' id='inputsignup1' name='username' placeholder='Username' <?php if (isset($_POST["username"])) {echo "value=" . $_POST["username"];} ?>>
                </div>
                <div class="email">
                    <input type='text' id='inputsignup2' name='email' placeholder='Email' <?php if (isset($_POST["email"])) {echo "value=" . $_POST["email"];} ?>>
                </div>
                <div class="password">
                    <input type='password' id='inputsignup3' name='password' placeholder='Password' <?php if (isset($_POST["password"])) {echo "value=" . $_POST["password"];} ?>>
                </div>
                <div class="allow">
                    <input type='checkbox' id='inputsignup4' name='allow1' value="1" <?php if (isset($_POST["allow1"])) {echo $_POST["allow1"] ? "checked" : "";} ?>>
                    <label for='allow1'>Ho più di 14 anni</label>
                </div>
                <div class="allow">
                    <input type='checkbox' id='inputsignup5' name='allow2' value="1" <?php if (isset($_POST["allow2"])) {echo $_POST["allow2"] ? "checked" : "";} ?>>
                    <label for='allow2'>Accetto le condizioni sulla privacy</label>
                </div>
                <div class="allow">
                    <input type='checkbox' name='allow3' value="1" <?php if (isset($_POST["allow3"])) {echo $_POST["allow3"] ? "checked" : "";} ?>>
                    <label for='allow3'>Autorizzo l'invio delle newsletter</label>
                </div>
                <div class="submit-container">
                    <input type='submit' value="Registrati" id="submit2">
                </div>
            </form>
            <div id="flex-containerloginregister2">
                <span class="flex-itemloginregister2">
                    <strong>Login</strong>
                </span>
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
                <p><img class="logomultisito" src="assets/logo.png"></p>
                <p>
                    <img class="logomultisocial" src="assets/facebook.png">
                    <img class="logomultisocial" src="assets/x.png">
                    <img class="logomultisocial" src="assets/instagram.png">
                    <img class="logomultisocial" src="assets/telegram.png">
                    <img class="logomultisocial" src="assets/twitch.png">
                    <img class="logomultisocial" src="assets/youtube.png">
                    <img class="logomultisocial" src="assets/connection.png">
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