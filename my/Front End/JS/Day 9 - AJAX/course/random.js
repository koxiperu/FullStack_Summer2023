//we want a random joke every time we load the page
//vanilla js
fetch("https://api.chucknorris.io/jokes/random")
.then((data)=> data.json())
.then(function(res){
    console.log(res);
    const joke=res.value;
    document.querySelector("#jokeJS").innerText=joke;
});

//jQuery
$.ajax({
    method:"GET",
    url:"https://api.chucknorris.io/jokes/random",
    dataType:"json",
}).done(function(res){
    const joke=res.value;
    $("#jokeJQ").text(joke);
})