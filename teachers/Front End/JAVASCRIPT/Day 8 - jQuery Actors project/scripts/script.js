console.log(actorsArray);
// duplication loop
const templateCard = $('.card').eq(0);
const templateOption = $('#inputActors option').eq(0);
for (const actor of actorsArray) {
  //card
  const daCloneCard = templateCard.clone();
  $('.card-columns').append(daCloneCard);
  daCloneCard.find('.card-title').text(actor.name);
  daCloneCard.find('.card-img-top').attr('src', actor.picture);
  daCloneCard.addClass(actor.category);

  //option
  const cloneOption = templateOption.clone();
  $('#inputActors').append(cloneOption);
  cloneOption.text(actor.name);
  cloneOption.val(actor.name);
}
templateCard.remove();

// filter to show only the MALES
$('.card').hide();
$('.male').show();

//when i click on btn.. filter the "good" card
$('#category .btn').on('click', function () {
  const selectedCategory = $(this).find('input').val();
  console.log(selectedCategory);
  $('.card').slideUp();
  $('.' + selectedCategory).slideDown(); //-> .male .female .baby
  $('#inputCategories').val(selectedCategory);
});

// when I submit the form (dancing teacher)...
// something happens
$('form').on('submit', function (event) {
  event.preventDefault();
  const actorName = $('#inputActors').val();
  console.log(actorName);
  // checks
  $(this).html(
    actorName + ' is not available. Take a ticket and leave the place.'
  );
});

// bonus
$('.card').on('click', function () {
  $('.card').removeClass('bg-primary text-white');
  $(this).addClass('bg-primary text-white');
  const selectedActor = $(this).find('h5').text();
  $('#inputActors').val(selectedActor);
});
