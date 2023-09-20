// DUPLICATE
const template = $('#goalsSection article').eq(0);
for (const goalData of goalsArray) {
  const clone = template.clone(); // cloneNode(true)
  $('#goalsSection').append(clone);
  clone.find('h3').text(goalData.name); // find() -> querySelector()
  clone.find('.current').text(converter(goalData.current)); //text() -> innerText
  clone.find('.goal').text(converter(goalData.goal));
  clone.css({
    'background-image': 'url(' + goalData.picture + ')',
  }); // clone.style.backgroundImage
  // `url(${goalData.picture})`

  // Add a CSS class
  if (goalData.riched) {
    clone.addClass('reached');
  } else {
    clone.addClass('new');
  }

  // formated in $USD
  clone.find('progress').attr('value', goalData.current); // .value
  clone.find('progress').attr('max', goalData.goal); // .max
}
template.remove();

// FILTERING
$('#all').on('click', function () {
  // Add the CSS class "selected" to the clicked button
  $('button').removeClass('selected');
  $(this).addClass('selected');
  // show all the articles
  $('article').slideDown(500); // the animation 
});

// REACHED
$('#reached').on('click', function () {
  // Add the CSS class "selected" to the clicked button
  $('button').removeClass('selected');
  $(this).addClass('selected');
  // hide the NEW articles
  $('article.new').slideUp(500);
  // Show the REACHED articles
  $('article.reached').slideDown(500);
});
$('#new').on('click', function () {
  // Add the CSS class "selected" to the clicked button
  $('button').removeClass('selected');
  $(this).addClass('selected');
  // Hide all the REACHED articles
  $('article.reached').slideUp(500);
  // Show all the NEW articles
  $('article.new').slideDown(500);
});
// BONUS dynamic numbers

const totalGoals = goalsArray.length;
$('#all span').text(totalGoals);
let totalreached = 0;
for (const goalData of goalsArray) {
  if (goalData.riched) {
    totalreached = totalreached + 1;
  }
}
$('#reached span').text(totalreached);

const totalNew = totalGoals - totalreached;
$('#new span').text(totalNew);

// bonus usd
function converter(number) {
  return number.toLocaleString('en-US', {
    style: 'currency',
    currency: 'USD',
  });
}
