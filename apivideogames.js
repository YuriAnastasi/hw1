function jsonIGDB(json) {
  console.log("Fetching...");
  console.log(json);

  const container = document.getElementById('risultati2');
  container.innerHTML = '';
  container.className = 'videogames';

  if (!json || json.length === 0) {
    noResults2();
    return;
  }

  for (let game of json) {
    const card = document.createElement('div');
    card.classList.add('videogamesCard');

    card.dataset.id = game.id || 'N/A';
    card.dataset.cover = game.cover?.url ? 'https:' + game.cover.url.replace('t_thumb', 't_cover_big') : 'assets/default_image.png';


    const img = document.createElement('img');
    img.src = card.dataset.cover;
    img.alt = game.name || 'Titolo sconosciuto';
    card.appendChild(img);

    const infoContainer = document.createElement('div');
    infoContainer.classList.add('infoContainer');

    const saveForm = document.createElement('div');
    saveForm.classList.add("saveForm");
    const save = document.createElement('div');
    save.classList.add("save");
    saveForm.appendChild(save);
    saveForm.addEventListener('click', saveGames);
    card.appendChild(saveForm);

    const title = document.createElement('h3');
    title.textContent = game.name || 'Titolo sconosciuto';
    infoContainer.appendChild(title);

    const genres = document.createElement('p');
    genres.textContent = 'Genere: ' + (Array.isArray(game.genres) ? game.genres.map(g => g.name).join(', ') : 'Genere sconosciuto');
    infoContainer.appendChild(genres);

    const developer = document.createElement('p');
    let developerName = 'Sviluppatore sconosciuto';
    if (Array.isArray(game.involved_companies)) {const developerCompany = game.involved_companies.find(c => c.developer && c.company?.name);
      if (developerCompany) {
        developerName = developerCompany.company.name;
      }
    }
    developer.textContent = 'Sviluppatore: ' + developerName;
    infoContainer.appendChild(developer);

    const platforms = document.createElement('p');
    platforms.textContent = 'Piattaforme: ' + (Array.isArray(game.platforms) ? game.platforms.map(p => p.name).join(', ') : 'Piattaforme sconosciute');
    infoContainer.appendChild(platforms);

    const releaseDate = game.first_release_date ? new Date(game.first_release_date * 1000).toLocaleDateString() : 'Data non disponibile';
    const release = document.createElement('p');
    release.textContent = 'Data di uscita: ' + releaseDate;
    infoContainer.appendChild(release);

    const rating = document.createElement('p');
    rating.textContent = 'Voto: ' + (typeof game.rating === 'number' ? game.rating.toFixed(1) : 'N/A');
    infoContainer.appendChild(rating);

    const summary = document.createElement('p');
    summary.textContent = 'Trama: ' + (game.summary || 'Nessuna descrizione disponibile');
    infoContainer.appendChild(summary);

    card.appendChild(infoContainer);

    container.appendChild(card);
  }
}

function noResults2() {
  const container = document.getElementById('risultati2');
  container.innerHTML = '';
  const message = document.createElement('p');
  message.textContent = 'Nessun videogioco trovato.';
  message.classList.add('noResults');
  container.appendChild(message);
}

function searchvideogames(event) {
  event.preventDefault();
  const form_data = new FormData(document.querySelector("#container-searchvideogames form"));
  fetch("search_videogames.php?q=" + encodeURIComponent(form_data.get('search'))).then(searchResponse).then(jsonIGDB);
}

function searchResponse(response) {
  return response.json();
}

function saveGames(event) {
  event.stopPropagation();
  console.log("Salvataggio Videogioco");

  const card = event.currentTarget.parentNode;

  const gameData = {
    id: card.dataset.id,
    image: card.dataset.cover
  };

  const formData = new FormData();
  for (const key in gameData) {
    formData.append(key, gameData[key]);
  }

  fetch("save_game.php", {method: 'POST', body: formData}).then(dispatchResponse).catch(dispatchError);
}

function dispatchResponse(response) {
  console.log(response);
  return response.json().then(databaseResponse);
}

function dispatchError(error) {
  console.log("Errore nel salvataggio del videogioco:", error);
}

function databaseResponse(json) {
  if (!json.ok) {
    dispatchError();
    return null;
  }
}

document.querySelector("#container-searchvideogames form").addEventListener("submit", searchvideogames);