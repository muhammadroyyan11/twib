function myFunction() {
    // DOM
    const input = document.getElementById('myInput').value.toUpperCase();
    // console.log(input);
    const cardContainer = document.getElementById('card-lists');
    console.log(cardContainer);
    const card = cardContainer.getElementsByClassName('card-box');
    console.log(card);


    for (let i = 0; i < card.length; i++) {
        let tittle = card[i].querySelector(".card-body");
        console.log(tittle);

        if (tittle.innerText.toUpperCase().indexOf(input) > -1) {
            card[i].style.display = "";
        } else{
            card[i].style.display = "none";
        }
    }
}