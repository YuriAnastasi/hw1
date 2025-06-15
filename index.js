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

function showError(message) {
    const form = document.getElementById("formlogin");
    const existingError = form.querySelector(".error");

    if (existingError) {
        existingError.textContent = message;
        return;
    }

    const errorElement = document.createElement("div");
    errorElement.className = "error";
    errorElement.textContent = message;
    form.appendChild(errorElement);
}

function showError2(message) {
    const form2 = document.getElementById("formsignup");
    const existingError = form2.querySelector(".error");

    if (existingError) {
        existingError.textContent = message;
        return;
    }

    const errorElement = document.createElement("div");
    errorElement.className = "error";
    errorElement.textContent = message;
    form2.appendChild(errorElement);
}

function clearError() {
    const errorElement = document.querySelector(".error");
    if (errorElement) {
        errorElement.remove();
    }
}

function checkEmailExists(email) {
    return fetch("check_email.php", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `email=${encodeURIComponent(email)}`
    })
        .then(response => response.json())
        .then(json => {
            if (json.exists === null) {
                showError(json.error);
                return null;
            }
            return json.exists;
        });
}

function checkPasswordExists(email, password) {
    return fetch("check_password.php", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}`
    })
        .then(response => response.json())
        .then(json => {
            if (json.exists === null) {
                showError(json.error);
                return null;
            }
            return json.exists;
        });
}

function checkUsernameExists(username) {
    return fetch("check_username.php", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `username=${encodeURIComponent(username)}`
    })
        .then(response => response.json())
        .then(json => {
            if (json.exists === null) {
                showError2(json.error);
                return null;
            }
            return json.exists;
        });
}

function handleSubmission(event) {
    event.preventDefault();

    const emailInput = document.getElementById("inputlogin1");
    const passwordInput = document.getElementById("inputlogin2");

    if (emailInput.value.trim() === "") {
        showError("Inserisci un'e-mail!");
        return;
    } else if (!isValidEmail(emailInput.value)) {
        showError("Inserisci un'e-mail valida!");
        return;
    }

    checkEmailExists(emailInput.value).then(emailExists => {
        if (!emailExists) {
            showError("L'e-mail non è corretta");
            return;
        }

        if (passwordInput.value.trim() === "") {
            showError("Inserisci la password!");
            return;
        } else if (!isValidPassword(passwordInput.value)) {
            showError("Inserisci una password valida!");
            return;
        }

        checkPasswordExists(emailInput.value, passwordInput.value).then(passwordExists => {
            if (passwordExists) {
                document.getElementById("formlogin").submit();
            } else {
                showError("La Password non è corretta");
            }
        });
    });
}

document.getElementById("login").addEventListener("submit", handleSubmission);

function isValidUsername(username) {
    return /^[a-zA-Z0-9 ]{1,15}$/.test(username);
}

function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function isValidPassword(password) {
    return /^.{8,}$/.test(password);
}

function handleSubmission2(event) {
    event.preventDefault();

    const usernameInput = document.getElementById("inputsignup1");
    const emailInput = document.getElementById("inputsignup2");
    const passwordInput = document.getElementById("inputsignup3");
    const checkbox1Input = document.getElementById("inputsignup4");
    const checkbox2Input = document.getElementById("inputsignup5");

    if (usernameInput.value.trim() === "") {
        showError2("Inserisci un username!");
        return;
    } else if (!isValidUsername(usernameInput.value)) {
        showError2("Inserisci un username valido!");
        return;
    }

    checkUsernameExists(usernameInput.value).then(usernameExists => {
        if (usernameExists) {
            showError2("Username già utilizzato!");
            return;
        }

        if (emailInput.value.trim() === "") {
            showError2("Inserisci un'e-mail!");
            return;
        } else if (!isValidEmail(emailInput.value)) {
            showError2("Inserisci un'e-mail valida!");
            return;
        }

        checkEmailExists(emailInput.value).then(emailExists => {
            if (emailExists) {
                showError2("L'e-mail è già utilizzata!");
                return;
            }

            if (passwordInput.value.trim() === "") {
                showError2("Inserisci una password!");
                return;
            } else if (!isValidPassword(passwordInput.value)) {
                showError2("Inserisci una password valida!");
                return;
            }

            if (!checkbox1Input.checked) {
                showError2("Conferma la tua età!");
                return;
            }

            if (!checkbox2Input.checked) {
                showError2("Accetta i termini e le condizioni!");
                return;
            }

            document.getElementById("formsignup").submit();
        });
    });
}

document.getElementById("formsignup").addEventListener("submit", handleSubmission2);

function OpenLogin() {
    clearError();
    const login = document.querySelector('#login');
    login.style.top = window.pageYOffset + 'px';
    login.classList.remove('hidden');
    document.body.classList.add('no-scroll');
}

const login1 = document.querySelector('.itemiconalogin');
login1.addEventListener('click', OpenLogin);

function CloseLogin() {
    const login = document.querySelector('#login');
    document.body.classList.remove('no-scroll');
    login.classList.add('hidden');
}

const login2 = document.querySelector('.flex-itemcloselogin');
login2.addEventListener('click', CloseLogin);

function OpenRegistrazione() {
    clearError();
    const registrazione = document.querySelector('#registrazione');
    registrazione.style.top = window.pageYOffset + 'px';
    registrazione.classList.remove('hidden');
    const login = document.querySelector('#login');
    login.classList.add('hidden');
    document.body.classList.add('no-scroll');
}

const registrazione1 = document.querySelector('.flex-itemloginregister');
registrazione1.addEventListener('click', OpenRegistrazione);

function CloseRegistrazione() {
    const registrazione2 = document.querySelector('#registrazione');
    registrazione2.classList.add('hidden');
    document.body.classList.remove('no-scroll');
}

const registrazione2 = document.querySelector('.flex-itemcloseregistrazione');
registrazione2.addEventListener('click', CloseRegistrazione);

function SwitchLogin() {
    const registrazione = document.querySelector('#registrazione');
    registrazione.style.top = window.pageYOffset + 'px';
    registrazione.classList.add('hidden');
    const login = document.querySelector('#login');
    login.classList.remove('hidden');
    document.body.classList.add('no-scroll');
}

const switchlogin = document.querySelector('.flex-itemloginregister2');
switchlogin.addEventListener('click', SwitchLogin);

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

function RedLogin1(event) {
    const image = event.currentTarget;
    image.src = 'assets/login(red).png';
}

const loginred1 = document.querySelector('.itemiconalogin img');
loginred1.addEventListener('mouseover', RedLogin1);

function RedLogin2(event) {
    const image = event.currentTarget;
    image.src = 'assets/login.png';
}

const loginred2 = document.querySelector('.itemiconalogin img');
loginred2.addEventListener('mouseout', RedLogin2);

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