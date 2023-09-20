var al=true;
var bs=false;
var mas=[];

//hide all
function hideAll(){
    for (const a of shownCards) {
       a.style.display="none";
    }
}


//listen the button ALL
document.querySelector("#all").addEventListener("click", function(){
    console.log("---------------ALL AGAIN------------------");
    document.querySelector("#cards").innerHTML="";
    unsortedCards(photosArray);
    showAll();
    al=true;
    bs=false;
});
//listen the button Best Sellers
document.querySelector("#best").addEventListener("click",function(){
    document.querySelector("#cards").innerHTML="";
    unsortedCards(photosArray);
   hideAll();
   for (const a of shownCards){
    if (a.querySelector("div").classList.contains("best")){        
    a.style.display="block";
    }
   }  
   bs=true;
   al=false;
})