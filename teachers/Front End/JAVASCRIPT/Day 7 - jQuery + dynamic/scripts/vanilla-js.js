// Vanilla JS
let totalReached = 0;

const template = document.querySelector('article');

for (const goalData of goalsArray) {
  const clone = template.cloneNode(true);
  document.querySelector('#goalsSection').append(clone);
  clone.querySelector('h3').innerText = goalData.name;
  clone.querySelector('.current').innerText = moneyFormater(goalData.current);
  clone.querySelector('progress').value = goalData.current;
  clone.querySelector('.goal').innerText = moneyFormater(goalData.goal);
  clone.querySelector('progress').max = goalData.goal;
  // BONUS Format data for money$$$
  // Correction using backtick "template string"
  // clone.style.backgroundImage = `url(${goalData.picture})`;
  clone.style.backgroundImage = 'url(' + goalData.picture + ')';
  // Solution when using the <img> in the HTML
  //clone.querySelector('img').src = goalData.picture;
  if (goalData.riched) {
    totalReached++;
    // print the "reached" status in the CSS classes for later on filtering
    clone.classList.add('reached');
  } else {
    clone.classList.add('new');
  }
}

// Kill the original
template.remove();

/* DYNAMIC MODIFY the HTML Buttons */
const totalGoals = goalsArray.length;
const unreachedTotal = totalGoals - totalReached;
document.querySelector('#all span').innerText = totalGoals;
document.querySelector('#new span').innerText = unreachedTotal;
document.querySelector('#reached span').innerText = totalReached;

/* BONUS - FILTERING */

document.querySelector('#all').addEventListener('click', function () {
  definitlyBonusNotExpetectedAtAll();
  // Apply the  CSS Class "selected"
  this.classList.add('selected');
  // Show all the articles
  const allArticles = document.querySelectorAll('article');
  for (const articleHTML of allArticles) {
    articleHTML.style.display = 'block';
  }
});

// REACHED
document.querySelector('#reached').addEventListener('click', function () {
  definitlyBonusNotExpetectedAtAll();
  this.classList.add('selected');
  // hide All
  const allArticles = document.querySelectorAll('article');
  for (const articleHTML of allArticles) {
    articleHTML.style.display = 'none';
  }
  // Show the reached articles
  const filteredArticle = document.querySelectorAll('article.reached');
  for (const articleHTML of filteredArticle) {
    articleHTML.style.display = 'block';
  }
});

// NEW
document.querySelector('#new').addEventListener('click', function () {
  definitlyBonusNotExpetectedAtAll();
  this.classList.add('selected');
  // hide All
  const allArticles = document.querySelectorAll('article');
  for (const articleHTML of allArticles) {
    if (articleHTML.classList.contains('new')) {
      articleHTML.style.display = 'block';
    } else {
      articleHTML.style.display = 'none';
    }
  }
});

function definitlyBonusNotExpetectedAtAll() {
  for (const el of document.querySelectorAll('button')) {
    el.classList.remove('selected');
  }
  // Array function
  // Map do something for each element of an array
  /*
    [...document.querySelectorAll('button')].map((el) =>
      el.classList.remove('selected')
    );
    */
}

function moneyFormater(balance) {
  return balance.toLocaleString('en-US', {
    style: 'currency',
    currency: 'USD',
  });
}
