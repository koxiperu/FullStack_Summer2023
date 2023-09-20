console.log(actorsArray);
// duplication loop
const templateCard = document.querySelector('.card');
const templateOption = document.querySelector('#inputActors option');
for (const actor of actorsArray) {
  //card
  const daCloneCard = templateCard.cloneNode(true);
  document.querySelector('.card-columns').append(daCloneCard);
  daCloneCard.querySelector('.card-title').innerText = actor.name;
  daCloneCard.querySelector('.card-img-top').src = actor.picture;
  daCloneCard.classList.add(actor.category);

  //option
  const cloneOption = templateOption.cloneNode(true);
  document.querySelector('#inputActors').append(cloneOption);
  cloneOption.innerText = actor.name;
  cloneOption.value = actor.name;
}
templateCard.remove();

// filter to show only the MALES

function filter(category) {
  for (const card of document.querySelectorAll('.card')) {
    card.style.display = 'none';
  }

  for (const card of document.getElementsByClassName(category)) {
    card.style.display = '';
  }
}

//when i click on btn.. filter the "good" card
for (const button of document.querySelectorAll('#category .btn')) {
  button.addEventListener('click', function () {
    const selectedCategory = this.querySelector('input').value;
    console.log(selectedCategory);
    filter(selectedCategory);

    document.querySelector('#inputCategories').value = selectedCategory;
  });
}

// when I submit the form (dancing teacher)...
// something happens
document.querySelector('form').addEventListener('submit', function (event) {
  event.preventDefault();
  const actorName = document.querySelector('#inputActors').value;
  console.log(actorName);
  // checks
  this.innerHtml =
    actorName + ' is not available. Take a ticket and leave the place.';
});
