var sortedArr=[];
var shownCards=[];
var cardsToShow=[];
const cardTempl=document.querySelector("#templCard");
window.addEventListener("load", function(){
    unsortedCards(photosArray);
    showAll();
});

function unsortedCards(cardsToShow){
    for (const a of shownCards) {
        a.remove();
      };
    for (const onePhoto of cardsToShow){
    const clone=cardTempl.cloneNode(true);        
    document.querySelector("#cards").append(clone);
    const clonePic=onePhoto.imgUrl;
    const cloneName=onePhoto.name;
    const cloneBest=onePhoto.bestSeller;    
    const clonePrice=onePhoto.price;  
    clone.id=cloneName;  
    clone.querySelector("h3").innerText=cloneName;
    clone.querySelector("img").src=clonePic;
    clone.querySelector("h4").innerText=clonePrice;
    if (!cloneBest){
        clone.querySelector(".seller").style.display="none";        
    }else{
        clone.querySelector("div").classList.add("best");
    }
}
    cardTempl.remove();
    shownCards=document.querySelectorAll(".setCards");    
}

//show all

function showAll(){
for (const a of shownCards){
    a.style.display="block";
}}

//deleting clone
// function deletingClone(){
//     for (const a of allCards){
//         a.remove();
//     }
// }