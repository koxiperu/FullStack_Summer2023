// Create an Event listener that will listen to "submit" for form submission
// event.preventDefault();
// hide all <article>
// retrieve value
// get filtered <article> elements with the good class ...
// show the filtered <article>

//1 - Form
document
  .querySelector("form")
  //submit
  .addEventListener("submit", function (event) {
    // 3- prevent!
    event.preventDefault();
    //input/gather
    const catValue = document.querySelector("#category").value;
    console.log(catValue); // all/science/politics
    // hide
    const allArticles = document.querySelectorAll("article");
    for (const element of allArticles) {
      element.style.display = "none";
    }

    // show
    const selectedArticles = document.querySelectorAll('.' + catValue);
    if (catValue == "all") {
      selectedArticles = allArticles;
    }
    for (const element of selectedArticles) {
      element.style.display = "inherit";
    }
  });
