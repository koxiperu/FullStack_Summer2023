var cardsHtml=[];

//build array of cards in html
const cardTempl=document.querySelector("#card");
for (const onePat of patientArray) {
    const clone=cardTempl.cloneNode(true);
    document.querySelector("#cardSpace").append(clone);    
    const q=onePat.quantity;
    clone.style.backgroundImage="url('"+onePat.pictureUrl+"')";
    if (q==0){
        clone.querySelector("div").innerText="SOON";
        clone.querySelector("div").classList.remove("inStock");
        clone.querySelector("div").classList.add("soon");
        clone.querySelector("div").style.backgroundColor="var(--grey-text)";
    }else {
        clone.querySelector("div").innerText="IN STOCK";
        clone.querySelector("div").classList.remove("soon");
        clone.querySelector("div").classList.add("inStock");
        clone.querySelector("div").style.backgroundColor="var(--accent-color)";
    }
    cardTempl.remove();
    clone.style.display="none";
    cardsHtml.push(clone);
};

//function to display all cards
function showAll(){
    for (const a of cardsHtml){
        a.style.display="block";
    }}
//to hide all cards by display none
function hideAll(){
        for (const a of cardsHtml) {
           a.style.display="none";
        }
    }    