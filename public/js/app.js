// Global DOM var
const $body = $('#body')
const $openModalBtn = $('.open-modal-btn')
const $mainWrapper = $('#main-wrapper')
const $modal = $('.modal')
const $modalTitle = $('.modal-title')
const $modalCloseBtn = $('.modal-close-btn')

// Func
const onOpenModal = () => {
    $mainWrapper.attr('aria-hidden', 'true')
    $modal.attr('aria-hidden', 'false')
    $body.addClass('no-scroll')
    $modal.css('display', 'flex')
    $modalCloseBtn.focus()
}

const onCloseModal = () => {
    $mainWrapper.attr('aria-hidden', 'false')
    $modal.attr('aria-hidden', 'true')
    $body.removeClass('no-scroll')
    $modal.css('display', 'none')
    $openModalBtn.focus()
}

// Event
$openModalBtn.click(function() {
    onOpenModal()
})

$modalCloseBtn.click(function() {
    onCloseModal()
})

// Close modal when espace key is pressed
$(document).on('keydown', e => {
    const keyCode = e.keyCode ? e.keyCode : e.which

    if ($modal.attr('aria-hidden') == 'false' && keyCode === 27) {
        onCloseModal()
    }
})

// Global var
const $prevBtn = $('.prev-image')
const $nextBtn = $('.next-image')
const $carouselItems = $('.carousel-item')
const $carouselPauseBtn = $('.carousel-pause-btn')

let currentItemPosition = 0
let carouselInterval

// Funcs
const goToNextSlide = () => {
    if (currentItemPosition + 1 >= $carouselItems.length) {
        const lastItem = `.item-${currentItemPosition}`

        currentItemPosition = 0
        const currentItem = `.item-${currentItemPosition}`

        setNodeAttributes(lastItem, currentItem)
    } else {
        currentItemPosition += 1
        const lastItem = `.item-${currentItemPosition - 1}`
        const currentItem = `.item-${currentItemPosition}`

        setNodeAttributes(lastItem, currentItem)
    }
}

const goToPreviousSlide = () => {
    if (currentItemPosition - 1 >= 0) {
        currentItemPosition -= 1
        const currentItem = `.item-${currentItemPosition}`
        const lastItem = `.item-${currentItemPosition + 1}`

        setNodeAttributes(lastItem, currentItem)
    } else {
        const lastItem = `.item-${currentItemPosition}`

        currentItemPosition = 2
        const currentItem = `.item-${currentItemPosition}`

        setNodeAttributes(lastItem, currentItem)
    }
}

const setNodeAttributes = (lastItem, currentItem) => {
    $(lastItem).css('display', 'none')
    $(currentItem).css('display', 'block')
    $(lastItem).attr('aria-hidden', 'true')
    $(currentItem).attr('aria-hidden', 'false')
}

// Events
$prevBtn.click(function() {
    goToPreviousSlide()
})

$nextBtn.click(function() {
    goToNextSlide()
})

$(document).keydown(function(e) {
    const keyCode = e.keyCode ? e.keyCode : e.which

    if (keyCode === 39) {
        goToNextSlide()
    } else if (keyCode === 37) {
        goToPreviousSlide()
    }
})

$carouselPauseBtn.on('click', function() {
    clearInterval(carouselInterval)
})

$(document).ready(function() {
    carouselInterval = setInterval(() => goToNextSlide(), 5000)
})

// Create your variables here
// ==========================================

let numberOfSeasons = 6;
let numberOfEpisodes = 12;

// ==========================================

// Calculate totalShowTime here
// =====================================

let episodeTime = 45;
let commercialTime = 5;

let totalShowTime = (episodeTime + commercialTime) * numberOfSeasons * numberOfEpisodes;

// =====================================

let paragraph = document.querySelector('#info-1');
paragraph.innerText = `${numberOfSeasons} seasons, ${numberOfEpisodes} episodes per season
Total viewing time: ${totalShowTime} minutes`

let numberOfCats = 3;
numberOfCats = 4;

let totalCDs = 67;
let totalVinyls = 34;
let totalMusic = totalCDs + totalVinyls;

let cookiesInJar = 10;
let cookiesRemove = 2;
let cookiesLeftInJar = cookiesInJar - cookiesRemove;

cookiesInJar = 10;
/* manger deux cookies */
cookiesInJar -= 2; //il reste 8 cookies
/* cuisson d'un nouveau lot de cookies */
cookiesInJar += 12; // il y a maintenant 20 cookies dans la boîte

let numberOfLikes = 10;
numberOfLikes++; // cela fait 11
numberOfLikes--; // et on revient à 10...qui n'a pas aimé mon article ?

let costPerProduct = 20;
let numberOfProducts = 5;
let totalCost = costPerProduct * numberOfProducts;
let averageCostPerProduct = totalCost / numberOfProducts;

numberOfCats = 2;
numberOfCats *= 6; // numberOfCats vaut maintenant 2*6 = 12;
numberOfCats /= 3; // numberOfCats vaut maintenant 12/3 = 4;

let compteur = 0;
compteur++;
compteur = 10;

// Create constants here
// =====================================

const hoursPerDay = 24;
const minutesPerHour = 60;
const secondsPerMinute = 60;

// =====================================

const dayInput = document.querySelector('#day-input');
const calculateButton = document.querySelector('#calculate-button');
const hours = document.querySelector('#hours');
const minutes = document.querySelector('#minutes');
const seconds = document.querySelector('#seconds');

calculateButton.addEventListener('click', () => {
    let days = dayInput.value;
    let calcHours = days * hoursPerDay;
    let calcMinutes = calcHours * minutesPerHour;
    let calcSeconds = calcMinutes * secondsPerMinute;

    hours.innerText = `${calcHours} hours`;
    minutes.innerText = `${calcMinutes} minutes`;
    seconds.innerText = `${calcSeconds} seconds`;
});

let integerCalculation = 1 + 2; // donne 3
let weirdCalculation = 0.1 + 0.2; // on attend 0.3, réponse réelle 0.30000000000000004

let userIsSignedIn = true;
let userIsAdmin = false;

let firstName = "Will";
let lastName = 'Alexander';

let wholeName = firstName + " " + lastName;

const myName = `Alexander`;
const salutation = `Bienvenue sur mon site ${myName}!`;
console.log(salutation); //retournera "Bienvenue sur mon site Alexander!"

// Create variables here
// =========================================

let episodeTitle = 'The First Battle';
let episodeDuration = 45;
let hasBeenWatched = false;

// =========================================

// Create Object here
// =========================================

let episode = {
    title: 'Dark Beginnings',
    duration: 45,
    hasBeenWatched: false
}

// =========================================

// Create variables here
// =====================================

episodeTitle = episode.title;
episodeDuration = episode.duration;
let episodeHasBeenWatched = episode.hasBeenWatched;

// =====================================

document.querySelector('#episode-info').innerText = `Episode: ${episodeTitle}
Duration: ${episodeDuration} min
${episodeHasBeenWatched ? 'Already watched' : 'Not yet watched'}`

let myBook = {
    title: "L'Histoire de Tao",
    author: "Will Alexander",
    numberOfPages: 250,
    isAvailable: true
};

let propertyToAccess = "title";
let bookTitle = myBook[propertyToAccess]; // "L'Histoire de Tao"
let bookPages = myBook["numberOfPages"]; // 250

class Book {
    constructor(title, author, pages) {
        this.title = title;
        this.author = author;
        this.pages = pages;
    }
}

myBook = new Book("L'Histoire de Tao", "Will Alexander", 250);

// Create a class here
// =====================================

class Episode {
    constructor(title, duration, hasBeenWatched) {
        this.title = title;
        this.duration = duration;
        this.hasBeenWatched = hasBeenWatched;
    }
}

let firstEpisode = new Episode('Dark Beginnings', 45, true);
let secondEpisode = new Episode('The Mystery Continues', 45, false);
let thirdEpisode = new Episode('The Unexpected Climax', 60, false);

// =====================================

// Modify the array here
// ====================================

let episodes = [];
episodes.push(firstEpisode, secondEpisode, thirdEpisode, thirdEpisode);

episodes.pop();

numberOfEpisodes = episodes.length;

// ====================================

// Add logic here
// ======================

for (let episode of episodes) {
    episode.hasBeenWatched = false;
}
    
// ======================

let body = document.querySelector('#body-3');

document.querySelector('#episodes').innerText = numberOfEpisodes;

for(let episode of episodes) {
    let newDiv = document.createElement('div');
    newDiv.classList.add('series-frame');
    let newTitle = document.createElement('h2');
    newTitle.innerText = 'The Story of Tau';
    let newParagraph = document.createElement('p');
    newParagraph.innerText = `${episode.title}
${episode.duration} minutes
${episode.hasBeenWatched ? 'Already been watched' : 'Not yet watched'}`;
    newDiv.append(newTitle);
    newDiv.append(newParagraph);
    body.append(newDiv);
}

document.querySelector('#first-episode-info').innerText = `Episode: ${firstEpisode.title}
Duration: ${firstEpisode.duration} min
${firstEpisode.hasBeenWatched ? 'Already watched' : 'Not yet watched'}`;

document.querySelector('#second-episode-info').innerText = `Episode: ${secondEpisode.title}
Duration: ${secondEpisode.duration} min
${secondEpisode.hasBeenWatched ? 'Already watched' : 'Not yet watched'}`;

document.querySelector('#third-episode-info').innerText = `Episode: ${thirdEpisode.title}
Duration: ${thirdEpisode.duration} min
${thirdEpisode.hasBeenWatched ? 'Already watched' : 'Not yet watched'}`;

let firstFrontRowGuest;
let secondFrontRowGuest;

firstFrontRowGuest = "Sarah Kate";
secondFrontRowGuest = "Audrey Simon";

let guests = ["Sarah Kate", "Audrey Simon", "Will Alexander"];
let howManyGuests = guests.length; // 3

guests.push("Tao Perkington"); // ajoute "Tao Perkington" à la fin de notre tableau guests

guests.unshift("Tao Perkington"); // "Tao Perkington" est ajouté au début du tableau guests

guests.pop(); // supprimer le dernier élément du tableau

let firstGuest = guests[0]; // "Sarah Kate"
let thirdGuest = guests[2]; // "Will Alexander"
let undefinedGuest = guests[12] // undefined

const numberOfSeats = 30;
const numberOfGuests = 25;
if (numberOfGuests == numberOfSeats) {
    // tous les sièges sont occupés
} else if (numberOfGuests < numberOfSeats) {
    // autoriser plus d'invités
} else {
    // ne pas autoriser de nouveux invités
}

console.log(numberOfGuests); // 20

let totalNumberOfGuests = numberOfGuests; // 20

let artistProfile = {
    name: "Tao Perkington",
    age: 27,
    available: true
};

let allProfiles = [artistProfile]; // nouveau tableau contenant l'objet ci-dessus
artistProfile.available = false; // modification de l'objet
console.log(allProfiles) // affiche { nom: "Tao Perkington", age: 27, available: false }

let UserLoggedIn = true;
if (UserLoggedIn) {
    console.log("Utilisateur connecté!");
} else {
    console.log("Alerte, intrus!");
}

//On pointe sur l'élément de message
const espaceMessage1 = document.getElementById("message-1");
//On pointe sur l'élément de bouton-1
const bouton1 = document.getElementById("bouton-1");
//On pointe sur l'élément de champ de saisie de l'âge
const ageInput = document.getElementById("age");
//On pointe sur l'élément de la checkbox de contrôle parental
const parentalInput = document.getElementById("parental");
//On défini la variable age qu'on utilisera et une variable définissant l'âge de la majorité
let age;
let isControlParentalActive;
let ageMajorite = 18;


//Cette fonction affichera le message de validation
function valider(){
    espaceMessage1.innerHTML = "Vous êtes autorisé à entrer";
}

//Cette fonction affichera un message d'erreur
function refuser(){
    alert("Cette espace est interdit aux personnes mineurs");
}



function onConfirm(){

    //On récupère la saisie de l'âge et on transforme le texte en nombre entier
    age = parseInt(ageInput.value);
    //Si la saisie n'est pas un nombre, on affiche un message d'erreur
    if(isNaN(age)){
        alert("Ceci n'est pas un nombre");
        return;
    }
    //On récupère la valeur du checkbox de contrôle parental. "true" si coché ou "false" si décoché
    isControlParentalActive = parentalInput.checked;

    //=======Code corrigé======
    if(age < ageMajorite && isControlParentalActive){
    refuser();
    }else{
    valider()
    }
    //=======/Code corrigé======


    //On vide le champ de saisie
    ageInput.value = "";
}

//On écoute l'action de click sur le bouton et on appelle la fonction onConfirm
bouton1.addEventListener('click', onConfirm);

let userLoggedIn = true;
let welcomeMessage = ''; // déclarer la variable ici

if (userLoggedIn) {
    welcomeMessage = 'Welcome back!'; // modifier la variable extérieure
} else {
    welcomeMessage = 'Welcome new user!'; // modifier la variable extérieure
}

console.log(welcomeMessage);

let userHasPremiumAccount = true;
let userHasMegaPremimumAccount = false;

userLoggedIn && userHasPremiumAccount; // true
userLoggedIn && userHasMegaPremimumAccount; // false

userLoggedIn || userHasPremiumAccount; // true
userLoggedIn || userHasMegaPremimumAccount; // true

!userLoggedIn; // false
!userHasMegaPremimumAccount; // true

let firstUser = {
    name: "Will Alexander",
    age: 33,
    accountLevel: "normal"
};

let secondUser = {
    name: "Sarah Kate",
    age: 21,
    accountLevel: "premium"
};

let thirdUser = {
    name: "Audrey Simon",
    age: 27,
    accountLevel: "mega-premium"
};

switch (firstUser.accountLevel) {
    case 'normal':
        console.log('You have a normal account!');
    break;
    case 'premium':
        console.log('You have a premium account!')
    break;
    case 'mega-premium':
        console.log('You have a mega premium account!');
    break;

    default:
        console.log('Unknown account type!');
}

if (firstUser.accountLevel === 'normal') {
    console.log('You have a normal account!');
} else if (firstUser.accountLevel === 'premium') {
    console.log('You have a premium account!')
} else if (firstUser.accountLevel === 'mega-premium') {
    console.log('You have a mega premium account!');
} else {
    console.log('Unknown account type!');
}

const numberOfPassengers = 10;
for (let i = 0; i < numberOfPassengers; i++) {
    console.log("Passager embarqué !");
}

console.log("Tous les passagers sont embarqués !");

const passengers = [
{
name: "Will Alexander",
ticketNumber: 209542
},

{
name: "Sarah Kate",
ticketNumber: 169336
},

{
name: "Audrey Simon",
ticketNumber: 779042
},

{
name: "Tao Perkington",
ticketNumber: 703911
}
]

for (let passenger of passengers) {
    console.log('Embarquement du passager ' + passenger.name + ' avec le ticket numéro ' + passenger.ticketNumber);
}

let seatsLeft = 10;
let passengersStillToBoard = 8;
let passengersBoarded = 0;

while (seatsLeft > 0 && passengersStillToBoard > 0) {
passengersBoarded++; // un passager embarque
passengersStillToBoard--; // donc il y a un passager de moins à embarquer
seatsLeft--; // et un siège de moins
}

console.log(passengersBoarded); // imprime 8, car il y a 8 passsagers pour 10 sièges

// On définit la fonction

function afficherDeuxValeurs(valeur1, valeur2) {
    console.log('Première valeur:' + valeur1);
    console.log('Deuxième valeur:' + valeur2);
}

// On exécute la fonction
afficherDeuxValeurs(12, 'Bonjour');

// On obtient dans la console
// > Première valeur:12
// > Deuxième valeur:Bonjour

// Modify the code here
// ======================

const calculateAverageRating = (ratings) => {

    if(ratings.length === 0) {
        return 0;
    }

    let sum = 0;
    for (let rating of ratings) {
        sum += rating;
    }

    return sum / ratings.length;

}

// ======================

const tauRatings = [5, 4, 5, 5, 1, 2];
const colinRatings = [5, 5, 5, 4, 5];

const tauAverage = calculateAverageRating(tauRatings);
const colinAverage = calculateAverageRating(colinRatings);

if (tauAverage && colinAverage) {
    document.querySelector('#tau-score').innerText = tauAverage.toFixed(1) + ' stars';
    document.querySelector('#colin-score').innerText = colinAverage.toFixed(1) + ' stars';
    document.querySelector('#clara-score').innerText = `${calculateAverageRating([]) === 0 ? 'No ratings' : calculateAverageRating([]) + ' stars'}`
}

class BankAccount {
    constructor(owner, balance) {
        this.owner = owner;
        this.balance = balance;
    }
    showBalance() {
        console.log("Solde: " + this.balance + " EUR");
    }
    deposit(amount) {
        console.log("Dépôt de " + amount + " EUR");
        this.balance += amount;
        this.showBalance();
    }
    withdraw(amount) {
        if (amount > this.amount) {
            console.log("Retrait refusé !");
        } else {
            console.log("Retrait de " + amount + " EUR");
            this.balance -= amount;
            this.showBalance();
        }
    }
}

const newAccount = new BankAccount("Will Alexander", 500);

newAccount.showBalance(); // imprime "Solde: 500 EUR" à la console

// Modify the code here
// ======================

class Show {
  constructor(title, numberOfSeasons) {
    this.title = title;
    this.numberOfSeasons = numberOfSeasons;
    this.ratings = [];
    this.averageRating = 0;
  }

  addRating(rating) {
    this.ratings.push(rating);
    let sum = 0;
    for (let rating of this.ratings) {
        sum += rating;
    }

    this.averageRating = sum / this.ratings.length;
  }
  
  
}

// ======================

const tau = new Show('The Story of Tau', 5);
const colin = new Show('The Hero of Old Meldrum', 3);
const clara = new Show('The Bugs of Isla Clara', 6);

const shows = [tau, colin, clara];

body = document.querySelector('#body-4');
const refresh = document.querySelector('#refresh');

refresh.addEventListener('click', () => {
    removeShows();
    addRandomRatings();
    updateShows();
})

const updateShows = () => {
    for (let show of shows) {
        const showPane = document.createElement('div');
        showPane.classList.add('series-frame');
        const showHeading = document.createElement('h2');
        showHeading.innerText = show.title;
        const showDetails = document.createElement('p');
        const seasons = document.createElement('p');
        seasons.innerText = show.numberOfSeasons + ' seasons';
        const ratings = document.createElement('p');
        ratings.innerText = show.averageRating > 0 ? show.ratings.length + ' ratings\n' + show.averageRating.toFixed(1) + ' stars' : 'No ratings yet';
        showDetails.append(seasons);
        showDetails.append(ratings);
        showPane.append(showHeading);
        showPane.append(showDetails);
        body.append(showPane);
    }
};

const removeShows = () => {
    const children = [];
    for (let childNode of body.childNodes) {
        children.push(childNode);
    }
    for (let child of children) {
        if (child.tagName == 'DIV') {
            body.removeChild(child);
        }
    }
}

const addRandomRatings = () => {
    for (let show of shows) {
        if (Math.random() >= 0.2) {
            const numberOfRatings = Math.floor(Math.random() * 4 + 1);
            for (let i = 0; i < numberOfRatings; i++) {
                const rating = Math.floor(Math.random() * 5 + 1);
                show.addRating(rating);
            }
        }
    }
}

updateShows();

const randomNumber = Math.random(); // crée un nombre aléatoire sur l'intervalle [0, 1]

const roundMeDown = Math.floor(495.966); // arrondit vers le bas à l'entier le plus proche, renvoie 495

class BePolite {
static sayHello() {
    console.log("Hello!");
}

static sayHelloTo(name) {
    console.log("Hello " + name + "!");
}

static add(firstNumber, secondNumber) {
return firstNumber + secondNumber;
}
}

BePolite.sayHello(); // imprime "Hello!""

BePolite.sayHelloTo("Will"); // imprime "Hello Will!""

const sum = BePolite.add(2, 3);

const getWordCount = (stringToTest) => {
    const wordArray = stringToTest.split(' ');
return wordArray.length;
}

const getLetterCount = (stringToTest) => {
    const wordArray = stringToTest.split(' ');
    let totalLetters = 0;
    for (let word of wordArray) {

// retire la ponctuation pour ne compter que les lettres

word.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g, "");
totalLetters += word.length;
}

return totalLetters;
}
/*
** renvoie la longueur moyenne des mots
** arrondie à deux chiffres après la virgule
*/
const getAverageWordLength = (stringToTest) => {
return parseFloat((getLetterCount(stringToTest) / getWordCount(stringToTest)).toFixed(2));
}

const printStringStats = (stringToTest) => {
    console.log({
wordCount: getWordCount(stringToTest),
letterCount: getLetterCount(stringToTest),
getAverageWordLength: getAverageWordLength(stringToTest)
})
}

//-----CODE NON DRY------

//variable de différentes personnes
let personne1 = "Jean";
let personne2 = "Paul";
let personne3 = "Marcel";

function saluer(prenom){
    //On met la première lettre en majuscule, on salue la personne et on donne le nombre de lettre dans son prénom
    const monPrenom = prenom[0].toUpperCase() + prenom.substr(1);
    const longueurPrenom = monPrenom.length;
    console.log(`Bonjour ${monPrenom}, ton prénom contient ${longueurPrenom} lettres`);
}

//On salue les 3 personnes
saluer(personne1);
saluer(personne2);
saluer(personne3);


//-----CODE MAL NOMMÉ------

//tableau des âges des élèves dans la classe
const agesElevesDeClasse = [14, 14, 15, 14, 16, 14, 14, 13];
// Nombre d'élèves
const nombreEleves = agesElevesDeClasse.length;
// variable pour calculer la somme des âges
let sommeAges = 0;
for(let age of agesElevesDeClasse) {
    sommeAges += age;
}
//moyenne d'âge dans la classe
const moyenneAgesDeClasse = sommeAges / nombreEleves;
console.log('Il y a ' + nombreEleves + " élèves dans la classe et la moyenne d'âge est " + moyenneAgesDeClasse);

const temperature = 25;



if(temperature < 10){

console.log("Il fait très froid"); }

else if(temperature < 0){

console.log("Il fait froid");

}else if(temperature < 10){

console.log("Il fait frais");

}else if(temperature < 20){

console.log("Il fait doux");

}else if(temperature < 30){

console.log("Il fait bon");

}else{

console.log("Il fait chaud");

}

const findElement = (array, thingToFind) => {
    for (let element of array) {
if (element === thingToFind) {
return true;
}
}

return false;
}

const binarySearch = (array, thingToFind, start, end) => {
if (start > end) {
return false;
}
    let mid = Math.floor((start + end) / 2);

if (array[mid] === thingToFind) {
return true;
}

if (thingToFind < array[mid]) {
// il faut rechercher dans la première moitié
return binarySearch(array, thingToFind, start, mid - 1); // on utilise (mid - 1) car on sait que l'on n'a pas besoin de l'élément mid, il a déjà été vérifié !
} else {

// il faut rechercher dans la deuxième moitié
return binarySearch(array, thingToFind, mid + 1, end);
}
}

//On pointe sur l'élément de message
const espaceMessage2 = document.getElementById("message-2");
//On pointe l'élément de bouton-2
const bouton2 = document.getElementById("bouton-2");
//On pointe sur l'élément de champ de saisie de l'année
const numberInput = document.getElementById("number-2");

let number;

//======FONCTION À ECRIRE======
function factorielle(number){
 if(number <= 1) return 1;
 else return (number * factorielle(number-1));
}
//======/FONCTION À ECRIRE======

function onCalcul(){
    number = parseInt(numberInput.value);
    //Si la saisie n'est pas un nombre, on affiche un message d'erreur
    if(isNaN(number)){
        alert("Ceci n'est pas un nombre");
        return;
    }
    espaceMessage2.innerHTML = "La factorielle de " + number + " est " + factorielle(number);
}

//On écoute l'action de click sur le onConvert et on appelle la fonction onConvert
bouton2.addEventListener('click', onCalcul);

var monPrenom = "Emily";
function saluerUtilisateur() {
    alert("Bonjour " + monPrenom);
}
saluerUtilisateur();

var pays = "France";
var ville = "Paris";
var typeAnimal = "chien";

function saluerEtudiants() {
    alert('Bonjour les étudiants !');
}
saluerEtudiants();

var monCanvas1 = document.getElementById('dessin-1');
if (monCanvas1.getContext){
    var ctx = monCanvas1.getContext('2d');
    ctx.fillStyle = "red";
    ctx.fillRect(0,0,200,50);
    ctx.fillStyle = "blue";
    ctx.fillRect(30,30,200,50)
} else {
    alert('canvas non supporté par ce navigateur');
}

var monCanvas2 = document.getElementById('dessin-2');
if (monCanvas2.getContext){
    var ctx = monCanvas2.getContext('2d');
    /* couleurs de remplissage et de trait */
    ctx.fillStyle = "yellowgreen";
    ctx.strokeStyle = "steelblue";
    ctx.lineWidth = 2;
    /* début de tracé */
    ctx.beginPath();
    ctx.moveTo(20, 20);
    ctx.lineTo(20, 100);
    ctx.lineTo(70, 100);
    ctx.lineTo(20, 20);
    ctx.closePath();
    /* remplissage */
    ctx.fill();
    /* couleur de trait */
    ctx.stroke();
} else {
    alert('canvas non supporté par ce navigateur');
}

var monCanvas3 = document.getElementById('dessin-3');
if (monCanvas3.getContext){
    var ctx = monCanvas3.getContext('2d');
    /* Dégradé linéaire et points*/
    var lingrad = ctx.createLinearGradient(0,0,0,230);
    lingrad.addColorStop(0, '#00ABEB');
    lingrad.addColorStop(0.5, '#66CC00');
    lingrad.addColorStop(1, '#000000');
    /* Association du dégradé au style du contexte */
    ctx.fillStyle = lingrad;
    /* Le rectangle qui va contenir le dégradé */
    ctx.fillRect(30,30,200,50);
} else {
    alert('canvas non supporté par ce navigateur');
}

var monCanvas4 = document.getElementById('dessin-4');
if (monCanvas4.getContext){
    var ctx = monCanvas4.getContext('2d');
    // rotation
    ctx.rotate(Math.PI / 8);
    ctx.fillStyle = "red";
    ctx.fillRect(0,0,200,50);
    ctx.fillStyle = "blue";
    ctx.fillRect(30,30,200,50);
} else {
    alert('canvas non supporté par ce navigateur');
}

var monCanvas5 = document.getElementById('dessin-5');
if (monCanvas5.getContext){
    var ctx = monCanvas5.getContext('2d');
    // rotation
    ctx.rotate(Math.PI / 8);
    ctx.translate(0,50);
    ctx.fillStyle = "red";
    ctx.fillRect(0,0,200,50);
    ctx.fillStyle = "blue";
    ctx.fillRect(30,30,200,50);
} else {
    alert('canvas non supporté par ce navigateur');
}

var monCanvas6 = document.getElementById('dessin-6');
if (monCanvas6.getContext){
    var ctx = monCanvas6.getContext('2d');
    /* premier rectangle dans le contexte par défaut */
    ctx.fillStyle = "red";
    ctx.fillRect(0, 0, 200, 50);
    /* rotation du contexte */
    ctx.rotate(Math.PI / 8);
    /* second rectangle dans le contexte modifié */
    ctx.fillStyle = "blue";
    ctx.fillRect(30, 30, 200, 50);
} else {
    alert('canvas non supporté par ce navigateur');
}

var monCanvas7 = document.getElementById('dessin-7');
if (monCanvas7.getContext){
    var ctx = monCanvas7.getContext('2d');
    ctx.fillStyle       = '#00F';
    ctx.font            = 'Italic 30px Sans-Serif';
    ctx.textBaseLine    = 'top';
    /* texte plein */
    ctx.fillText('Hello!', 40, 50);
    ctx.font            = 'Bold 30px Sans-Serif';
    /* contour de texte */
    ctx.strokeText('Hello!', 40, 150);
} else {
    alert('canvas non supporté par ce navigateur');
}

// gestionnaire
var X = 0;
document.addEventListener("keydown", down, false);
document.addEventListener("keyup", up, false);

function down(e){
    // traitement de différents cas
    switch(e.keyCode) {
        case 39:
            // flèche droite
            X = 4;
            break;
        case 37:
            // flèche gauche
            X = -4;
            break;
        default:
    }
}
function up(e){
    X = 0;
}

/* ajouter propriété pour drop et transfert de données */
$.event.props.push('dataTransfer');
$(document).ready(function() {
    $('#image1').on({
        dragstart: function(e) {
            var id = $(this).attr('id');
            $('#info-2').html("déplacement de "+id);
            $(this).css('opacity', '0.5');
            /* on garde l'identifiant en mémoire */
            e.dataTransfer.setData('text/html', id);
        },
        dragend: function() {
            var id = $(this).attr('id');
            $('#info-2').html("fin du déplacement de "+id);
            $(this).css('opacity', '1');
        }
    });
    $('#cible').on({
        dragover: function(e) {
            e.preventDefault();
        },
        drop: function(e) {
            e.preventDefault();
            var data = e.dataTransfer.getData('text/html');
            $(this).append($("#"+data));
        }
    });
});

$(document).ready(function() {
    // ajouter propriété pour drop et transfert de données
    //$.event.props.push('dataTransfer');// Attention : ne fonctionne plus si jQuery > 3 : passer par originalEvent (cf ci-dessous)

    // dessin des billes
    for(var i=1; i<=5; i++){
        var monCanvas9 = $('#bille'+i)[0];
        var context = monCanvas9.getContext('2d');
        context.clearRect(0,0, monCanvas9.width,monCanvas9.height);
        dessineBalle(context,i);
    }

    // gestionnaire des billes
    for(var i=1; i<=5; i++){
        // attention : var canvas = $('#myCanvas') renvoie un objet jQuery par un élément du DOM
        $('#bille'+i).on({
            dragstart: function(e) {
                var id = $(this).attr('id');
                $('#info-3').html("déplacement de "+id);
                $(this).css('opacity', '0.5');
                // on garde l'identifiant en mémoire
                //e.dataTransfer.setData('text/html', id);
                e.originalEvent.dataTransfer.setData('text/html', id);
            },
            dragend: function() {
                var id = $(this).attr('id');
                $('#info-3').html("fin du déplacement de "+id);
                $(this).css('opacity', '1');
            }
        });
    }

    // gestionnaires des boîtes
    for(var i=1; i<=2; i++){
        $('#boite'+i).on({
            dragover: function(e) {
                e.preventDefault();
            },
            drop: function(e) {
                //var data = e.dataTransfer.getData('text/html');
                var data = e.originalEvent.dataTransfer.getData('text/html');
                $(this).append($("#"+data));
            }
        });
    }

    // dessin d'une balle : x départ, vitesse / y, rayon
    function dessineBalle(ctx,numero){
        // dessin
        ctx.translate(20,20);
            ctx.beginPath();
            ctx.arc(0, 0, 18, 0, 2 * Math.PI, false);
            ctx.fillStyle = 'green';
            ctx.fill();
            ctx.lineWidth = 1;
            ctx.strokeStyle = '#003300';
            ctx.stroke();
        ctx.fillStyle   = '#fff';
        ctx.font        = 'Italic 18px Sans-Serif';
        ctx.fillText    (i, -7, 4);
    }
});

$(document).ready(function(){
    $("#searchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#lessonList .col-12").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
