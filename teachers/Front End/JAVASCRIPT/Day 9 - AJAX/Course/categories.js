fetch("https://api.chucknorris.io/jokes/categories")
  // The first line of code starts the AJAX call (using fetch function)
  // The call is directed to the Chuck Norris API
  // It will get the list of joke categories
  .then((data) => data.json())
  // The second line of code is waiting for the AJAX request to finish
  // When it does, it converts the response to the JSON format
  // JSON is necessary when using JavaScript since it doesn't handle the other data formats

  // The third line of code waits for the JSON data to be ready
  // When it is, it runs a function that does something with that data
  // res = response
  .then(function (res) {
    // res has the information about the request response
    console.log(res);

    // display all the categories
    const catArray = res;
    for (const category of catArray) {
      // 1. Create/Clone
      const clone = document.querySelector("li").cloneNode(true);
      // 2. Append
      document.querySelector("ul").append(clone);
      // 3. Customize
      clone.innerText = category;
      clone.addEventListener("click", function () {
        changeJoke(category);
      });
    }
    document.querySelector("li").remove();
  });

// function for our event listener
function changeJoke(category) {
  const customUrl =
    "https://api.chucknorris.io/jokes/random?category=" + category;
  // it will add the category in the AJAX request URL
  // and fetch a joke from that specific category
  fetch(customUrl)
    .then((data) => data.json())
    .then(function (res) {
      document.querySelector("#jokeJS").innerText = res.value;
    });
}
