document.querySelector("button").addEventListener("click", function(){
    getRandom();
});


function getRandom(){
    fetch("https://randomuser.me/api/")
.then((data)=>data.json())
.then(function(res){
    console.log(res);
    const pic=res.results[0].picture.large;
    const name=res.results[0].name.first+" "+res.results[0].name.last;
    const email=res.results[0].email;
    const gender=res.results[0].gender;
    console.log(gender);
    if (gender=="female") {
        document.querySelector("h1").style.color="rgb(248, 129, 129)"; 
        //you can use classes for gender
        //img.classList.contains("male") -> true/false
        document.querySelector("p").style.color="rgb(248, 129, 129)";
        document.querySelector("img").style.borderColor="rgb(248, 129, 129)";
    }else {
        document.querySelector("h1").style.color="rgb(96, 141, 238)";
        document.querySelector("p").style.color="rgb(96, 141, 238)";
        document.querySelector("img").style.borderColor="rgb(96, 141, 238)";
    }
    document.querySelector("p").innerText=email;
    document.querySelector("h1").innerText=name;
    document.querySelector("img").src=pic;
})
}
