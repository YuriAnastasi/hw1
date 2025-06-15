function jsonJikan(json) {
  console.log("Fetching...");
  console.log(json);

  const container = document.getElementById('risultati');
  container.innerHTML = '';
  container.className = 'anime';

  if (!json.data || json.data.length === 0) {
    noResults();
    return;
  }

  for (let anime of json.data) {
    const card = document.createElement('div');
    card.classList.add('animeCard');

    card.dataset.id = anime.mal_id;
    card.dataset.image = anime.images.jpg.image_url;

    const img = document.createElement('img');
    img.src = anime.images.jpg.image_url;
    img.alt = anime.title;
    card.appendChild(img);

    const infoContainer = document.createElement('div');
    infoContainer.classList.add('infoContainer');

    const saveForm = document.createElement('div');
    saveForm.classList.add("saveForm");
    const save = document.createElement('div');
    save.classList.add("save");
    saveForm.appendChild(save);
    saveForm.addEventListener('click', saveAnime);
    card.appendChild(saveForm);

    const title = document.createElement('h3');
    title.textContent = anime.title_english;
    infoContainer.appendChild(title);

    const genres = document.createElement('p');
    genres.textContent = 'Genere: ' + anime.genres.map(g => g.name).join(', ');
    infoContainer.appendChild(genres);

    const aired = document.createElement('p');
    aired.textContent = 'Data di uscita: ' + (anime.aired.from ? anime.aired.from.substring(0, 10) : 'N/A');
    infoContainer.appendChild(aired);

    const episodes = document.createElement('p');
    episodes.textContent = 'Episodi: ' + (anime.episodes ?? 'N/A');
    infoContainer.appendChild(episodes);

    const score = document.createElement('p');
    score.textContent = 'Voto: ' + (anime.score ?? 'N/A');
    infoContainer.appendChild(score);

    const synopsis = document.createElement('p');
    synopsis.textContent = 'Trama: ' + (anime.synopsis ?? 'Nessuna sinossi disponibile.');
    infoContainer.appendChild(synopsis);

    card.appendChild(infoContainer);
    
    container.appendChild(card);
  }
}

function noResults() {
  const container = document.getElementById('risultati');
  container.innerHTML = '';
  const message = document.createElement('p');
  message.textContent = 'Nessun anime trovato.';
  message.classList.add('noResults');
  container.appendChild(message);
}

function searchanime(event) {
  console.log("Verifica del codice!");
  event.preventDefault();
  const form_data = new FormData(document.querySelector("#container-searchanime form"));
  fetch("search_anime.php?q=" + encodeURIComponent(form_data.get('search'))).then(searchResponse).then(jsonJikan);
}

function searchResponse(response) {
  console.log(response);
  return response.json();
}

function saveAnime(event) {
  event.stopPropagation();
  console.log("Salvataggio Anime");

  const card = event.currentTarget.parentNode;

  const animeData = {
    id: card.dataset.id,
    image: card.dataset.image
  };

  const formData = new FormData();
  for (const key in animeData) {
    formData.append(key, animeData[key]);
  }

  fetch("save_anime.php", {method: 'POST', body: formData}).then(dispatchResponse).catch(dispatchError);
}

function dispatchResponse(response) {
  console.log(response);
  return response.json().then(databaseResponse);
}

function dispatchError(error) {
  console.log("Errore nel salvataggio dell'anime:", error);
}

function databaseResponse(json) {
  if (!json.ok) {
    dispatchError();
    return null;
  }
}

document.querySelector("#container-searchanime form").addEventListener("submit", searchanime);