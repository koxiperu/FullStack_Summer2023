const arrOfButtons=document.querySelectorAll("ul button");

document.querySelector("ul button").addEventListener("click",function(){
    for (const but of arrOfButtons) {
      but.classList.remove("selected");  
    }
    this.event.target.classList.add("selected");
   
if (this.name=="all") {
    showSelected("article");
} else {
    hideAll();
    showSelected("article."+this.event.target.name);
}
});

