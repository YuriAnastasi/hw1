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