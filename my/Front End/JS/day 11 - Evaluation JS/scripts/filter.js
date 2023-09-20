//listen the filter-button-ALL
document.querySelector("#allBut").addEventListener("click",function(){
    for (const a of cardsHtml){
        hideAll();
        showAll();
    };
    //change the color of button... It can be done by classes and css, but 
    //i like css less than JS :)
    document.querySelector("#inBut").style.backgroundColor="var(--grey-text)";
    document.querySelector("#soonBut").style.backgroundColor="var(--grey-text)";
    document.querySelector("#allBut").style.backgroundColor="var(--accent-color)";
});

//listen the filter-button INSTOCK
document.querySelector("#inBut").addEventListener("click",function(){
    hideAll();
    for (const a of cardsHtml){        
        if (a.querySelector("div").classList.contains("inStock")){
            console.log(a);
        a.style.display="block";
        };
    };
    //change the color of button... It can be done by classes and css, but 
    //i like css less than JS :)
    document.querySelector("#allBut").style.backgroundColor="var(--grey-text)";
    document.querySelector("#soonBut").style.backgroundColor="var(--grey-text)";
    document.querySelector("#inBut").style.backgroundColor="var(--accent-color)";
});

//listen the filter-button SOON
document.querySelector("#soonBut").addEventListener("click",function(){
    hideAll();
    for (const a of cardsHtml){        
        if (a.querySelector("div").classList.contains("soon")){
            console.log(a);
        a.style.display="block";
        };
    };
    //change the color of button... Ok, if i will have time, i do it by classes in css
    document.querySelector("#allBut").style.backgroundColor="var(--grey-text)";
    document.querySelector("#inBut").style.backgroundColor="var(--grey-text)";
    document.querySelector("#soonBut").style.backgroundColor="var(--accent-color)";
});