/*
BONUS : to make this even more interactive a list of buttons for each category 
can replace the form submission.
Uncomment the bonus part of the HTML code and start working with the buttons.
*/

// Create a function "filterArticles" that will:
// remove the CSS class "selected" for all of the buttons
// add the CSS class "selected" to the clicked button
// filter the articles using the algorythm from part 2 (time for a function maybe ?)


document
  .querySelector('[name="politics"]')
  .addEventListener("click", function () {
    hideAll();
    filterArticles("article.politics");
  });

document
  .querySelector('[name="science"]')
  .addEventListener("click", function () {
    hideAll();
    filterArticles("article.science");
  });

document.querySelector('[name="all"]').addEventListener("click", function () {
  filterArticles("article");
});

function filterArticles(category) {
  const allButtons = document.querySelectorAll("ul li button");
  for (const currentButton of allButtons) {
    currentButton.classList.remove("selected");
  }
  this.event.target.classList.add("selected");
  showArticles(category);
}

function hideAll() {
  const allArticles = document.querySelectorAll("article");
  for (const element of allArticles) {
    element.style.display = "none";
  }
}

function showArticles(selector) {
  const scienceArticle = document.querySelectorAll(selector);
  for (const element of scienceArticle) {
    element.style.display = "inherit";
  }
}
