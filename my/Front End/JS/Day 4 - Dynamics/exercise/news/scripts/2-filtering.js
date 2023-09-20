
document.querySelector("form").addEventListener("submit",function(event){
        var sel=document.querySelector("#category").value;
        console.log("submitted ");
        event.preventDefault(); 
        if (sel=="all") {        
        showSelected("article");
        };        
        if (sel=="science") {
        hideAll();
        showSelected("article.science");
        };    
        if (sel=="politics") {
        hideAll();
        showSelected("article.politics");
        };
    });

function showSelected(selector) {
    const matchingArticles=document.querySelectorAll(selector);
    hideAll();
    for (const mA of matchingArticles) {
        mA.style.display="inherit";
    };
};

function hideAll() {
    const hidingArticles=document.querySelectorAll("article");
    for (const hA of hidingArticles) {
        hA.style.display="none";
    };
};

