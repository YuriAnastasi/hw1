function OpenSearch() {
    const search = document.querySelector('#search');
    search.classList.remove('hidden');
}

const search1 = document.querySelector('.itemiconasearch');
search1.addEventListener('click', OpenSearch);

function CloseSearch() {
    const search = document.querySelector('#search');
    search.classList.add('hidden');
}

const search2 = document.querySelector('.flex-itemsearchclose');
search2.addEventListener('click', CloseSearch);

function RedSearch1(event) {
    const image = event.currentTarget;
    image.src = 'assets/search(red).png';
}

const searchred1 = document.querySelector('.itemiconasearch img');
searchred1.addEventListener('mouseover', RedSearch1);

function RedSearch2(event) {
    const image = event.currentTarget;
    image.src = 'assets/search.png';
}

const searchred2 = document.querySelector('.itemiconasearch img');
searchred2.addEventListener('mouseout', RedSearch2);

function favoriteonoff(event) {
    event.stopPropagation();
    const currentContainer = event.currentTarget;
    const currentIndex = currentContainer.dataset.index;
    console.log(currentIndex);

    const favoriteicon = currentContainer.querySelector(".favoritebutton");
    if (currentContainer.dataset.liked === "true") {
        currentContainer.dataset.liked = "false";
        favoriteicon.src = 'assets/favorite(off).png';
    }
    else {
        currentContainer.dataset.liked = "true";
        favoriteicon.src = 'assets/favorite(on).png';
    }
}

const container_list = document.querySelectorAll("#flex-containerarticolo");
for (let container of container_list) {
    container.addEventListener("click", favoriteonoff);
}

function fetchAnime() {
    fetch("fetch_anime.php").then(fetchResponse).then(fetchAnimeJson);
}

function fetchResponse(response) {
    if (!response.ok) {return null};
    return response.json();
}

function fetchAnimeJson(json) {
    console.log("Fetching...");
    console.log(json);

    if (!json.length) {
        noResults();
        return;
    }

    const container = document.getElementById('risultati3');
    container.innerHTML = '';
    container.className = 'anime';

    for (let i in json) {
        const anime = json[i].content;

        const card = document.createElement('div');
        card.classList.add('animeCardsaved');
        card.dataset.id = anime.id;

        const img = document.createElement('img');
        img.src = anime.image;
        img.alt = anime.title;
        card.appendChild(img);

        container.appendChild(card);
    }
}

function noResults() {
    const container = document.getElementById('risultati3');
    container.innerHTML = '';
    const nores = document.createElement('div');
    nores.className = "nores";
    nores.textContent = "Nessun risultato.";
    container.appendChild(nores);
}

fetchAnime();

function fetchGames() {
    fetch("fetch_games.php").then(fetchResponse2).then(fetchGamesJson);
}

function fetchResponse2(response) {
    if (!response.ok) {return null};
    return response.json();
}

function fetchGamesJson(json) {
    console.log("Fetching...");
    console.log(json);

    const container = document.getElementById('risultati4');
    container.innerHTML = '';
    container.className = 'videogames';

    if (!json.length) {
        noResults2();
        return;
    }

    for (let i in json) {
        const game = json[i].content;

        const card = document.createElement('div');
        card.classList.add('videogamesCardsaved');
        card.dataset.id = game.id;

        const img = document.createElement('img');
        img.src = game.image;
        img.alt = game.id;
        card.appendChild(img);

        container.appendChild(card);
    }
}

function noResults2() {
    const container = document.getElementById('risultati4');
    container.innerHTML = '';
    const nores = document.createElement('div');
    nores.className = "nores";
    nores.textContent = "Nessun gioco salvato.";
    container.appendChild(nores);
}

fetchGames();