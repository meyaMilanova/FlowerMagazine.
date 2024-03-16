window.addEventListener('load', init);
// localStorage.clear()
let flowers;
let buttons;

let connection = 'flower-details.php';
let connectionDetails

let items = [];
let favoriteStar

let mainMouse = document.getElementById("flowers")
let detailsMouse = document.getElementById("infoSection")






function init() {
    flowerMain()

    flowers = document.getElementById('flowers')
    flowers.addEventListener('click', allButtons);

    buttons = document.getElementsByTagName('button');

    detailsMouse.addEventListener('mouseover',mouseEventOnDetails);
    detailsMouse.addEventListener('mouseout', mouseEventOffDetails);
}





function allButtons(e) {
    e.preventDefault();
    let buttonWasClicked = e.target;

    if(e.target.className === "details") {
        let flower = buttonWasClicked.parentElement;
        let flowerId = flower.id;
        let name = document.querySelector('#infoSection h2')
        name.innerHTML = flower.getElementsByTagName("h2")[0].innerHTML

        connectionDetails = 'flower-details.php?id=' + flowerId
        console.log("flower" + flowerId)
        flowerDetails(e.target.dataset.id)
    }

    if(e.target.className === "star" || e.target.className === "star favorite-star" ){
        let favorite = e.target.id

        if (localStorage.getItem("all-favorites") === null){
            items.push(favorite);
            localStorage.setItem("all-favorites", JSON.stringify(items))

            changeStar(favorite)

        } else {

            items = JSON.parse(localStorage.getItem("all-favorites"));

            if(items.includes(favorite)){
                let favorite = e.target.id
                items = JSON.parse(localStorage.getItem("all-favorites"));
                let index  = items.indexOf(favorite);
                items.splice(index, 1);
                localStorage.setItem("all-favorites", JSON.stringify(items))
                e.target.classList.remove("favorite-star")

            } else {

                items.push(favorite);
                localStorage.setItem("all-favorites", JSON.stringify(items))

                changeStar(favorite)
            }
        }

    }
}





function flowerMain() {
    fetch(connection)
        .then(response => {
            if (!response.ok) {
                throw new Error("There is a problem with main data!");
            }
            return response.json();
        })
        .then(data => {
            flowers = document.getElementById('flowers');
            let testId = 0;
            data.forEach(flower => {
                mainFlowersContainer(flower, testId);
                testId++
            });
            testId = 0;
            storage()
        })
        .catch(errorHandler)
}





function flowerDetails(id) {
    console.log(connectionDetails + "?id=" + id)
    fetch(connectionDetails + id)
        .then(response => {
            if (!response.ok) {
                throw new Error("There is a problem with details data!");
            }
            return response.json();
        })
        .then(data => {
            detailsContainer(data);
        })
        .catch(errorHandler)
}







function mainFlowersContainer(flower, id){
    const flowerCards = document.createElement("div");
    flowerCards.classList.add("flowerCards");
    flowerCards.id = flower.id;
    flowers.append(flowerCards);

    const flowerCardTitle = document.createElement("h2");
    flowerCardTitle.innerText = flower.name
    flowerCardTitle.classList.add("flower-card-title")
    flowerCards.append(flowerCardTitle);

    const flowerCardImg = document.createElement("img");
    flowerCardImg.src = `./img/${flower.image}`;
    flowerCardImg.classList.add("img-flower")
    flowerCards.append(flowerCardImg);

    const underPhoto = document.createElement("div")
    underPhoto.classList.add("under-photo")
    flowerCards.append(underPhoto)

    favoriteStar = document.createElement("h2");
    favoriteStar.id = flower.id
    favoriteStar.className = 'star'
    favoriteStar.innerHTML = "&#9734";
    underPhoto.appendChild(favoriteStar);

    const flowerCardDetailsButton = document.createElement("button");
    flowerCardDetailsButton.classList.add("details");
    flowerCardDetailsButton.innerHTML = "Details";
    flowerCardDetailsButton.dataset.id = id;
    underPhoto.append(flowerCardDetailsButton);
}






function storage(){
    let storageData = localStorage.getItem("all-favorites")
    if(storageData != null){
        items = JSON.parse(storageData)
    }
    for(let ster of items){
        changeStar(ster)
    }
}






function changeStar(ster) {
    let flowersMax = document.querySelectorAll(".star");
    for (let i = 0; i < flowersMax.length; i++) {
        if (ster === flowersMax[i].id) {
            flowersMax[i].classList.add("favorite-star");
        }
    }
}








function detailsContainer(data) {
    let detailsTitle = document.getElementById("first-title");
    detailsTitle.innerText = data.names;

    let commonColourTitle = document.getElementById('h-one');
    commonColourTitle.innerText = "Common Colour";
    commonColourTitle.classList.add("details-titles");

    let commonColourAnswer = document.getElementById("p-one");
    commonColourAnswer.innerText = data.common_colour.join(', ');
    commonColourAnswer.classList.add("details-answers");

    let uncommonColourTitle = document.getElementById('h-two');
    uncommonColourTitle.innerText = "Uncommon Colour";
    uncommonColourTitle.classList.add("details-titles");

    let uncommonColourAnswer = document.getElementById("p-two");
    uncommonColourAnswer.innerText = data.uncommon_colour.join(', ');
    uncommonColourAnswer.classList.add("details-answers");

    let lifeSpanTitle = document.getElementById('h-three');
    lifeSpanTitle.innerText = "Life Span";
    lifeSpanTitle.classList.add("details-titles");

    let lifeSpanAnswer = document.getElementById("p-three");
    lifeSpanAnswer.innerText = data.life_span;
    lifeSpanAnswer.classList.add("details-answers");

    let nativeTitle = document.getElementById('h-four');
    nativeTitle.innerText = "Native";
    nativeTitle.classList.add("details-titles");

    let nativeAnswer = document.getElementById("p-four");
    nativeAnswer.innerText = data.native.join(', ');
    nativeAnswer.classList.add("details-answers");

    let averageSizeTitle = document.getElementById('h-five');
    averageSizeTitle.innerText = "Average Size";
    averageSizeTitle.classList.add("details-titles");

    let averageSizeAnswer = document.getElementById("p-five");
    averageSizeAnswer.innerText = data.average_size;
    averageSizeAnswer.classList.add("details-answers");
}









function mouseEventOnDetails() {
    detailsMouse.style.backgroundColor = '#aecfae';
    detailsMouse.style.transition = '0.3s ease'
}
function mouseEventOffDetails() {
    detailsMouse.style.backgroundColor = '#f2e9d8';
}







function errorHandler(error){
    console.log(error.message)
}
