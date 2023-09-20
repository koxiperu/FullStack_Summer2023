
//take an array
const comTempl=document.querySelector("#coms li");
let i=0;
for (const c of comments) {
    i=i+1;
    const clone=comTempl.cloneNode(true);
    document.querySelector("#coms").append(clone);
    const text=c.message;
    clone.querySelector("img").src="images/friend"+i+".png";
    clone.querySelector("p").innerText=text;
}
comTempl.remove();

//add comment
 document.querySelector("form").addEventListener("submit", function(event){
     event.preventDefault();
     const text=document.querySelector("#comment").value;
     if(text.length<4){
        alert("Input the text!");
     }else{
        const clone=comTempl.cloneNode(true);
     document.querySelector("#coms").prepend(clone);
     clone.querySelector("p").innerText=text;
     clone.querySelector("img").src="images/friend4.png";
     }     
 })