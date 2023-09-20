fetch("https://api.chucknorris.io/jokes/categories")
//The first line of code starts the AJAX call (using fetch function)
//the call is directed to the Chuck Norris API
//It will get the list of joke categories
//.then().then().then()   //listen the respond
.then((data)=> data.json()) //data - response from a server, json method converts data
//The second line of code is waiting for the AJAX request to finish.
//When it does, it converts the response to the JSOPN format
//JSON is necessary when using JavaScript since it doesn't handle the other data formats

//the third line of code waits for the JAson data to be ready. When it is, it runs a function that does something with that data
//res - response
.then(function(res){
    //res has the information about the request response
    console.log(res);

    //display all the categories
    const catArray=res;
    for(const category of catArray){
        //1- create clone
        const clone=document.querySelector("li").cloneNode(true);
        //2. append
        document.querySelector("ul").append(clone);
        //3.customize
        clone.innerText=category;
        clone.addEventListener("click",function (){
            changeJoke(category);
        });
    }
    document.querySelector("li").remove();
});

//
function changeJoke(category) {
    const customUrl="https://api.chucknorris.io/jokes/random?category="+category;
    //add the category in the AJAX request URL
    //and fetch a joke from that specific category
    fetch(customUrl).then((data)=>data.json()).then(function(res){
        document.querySelector("p#jokeJS").innerText=res.value;
    });
};