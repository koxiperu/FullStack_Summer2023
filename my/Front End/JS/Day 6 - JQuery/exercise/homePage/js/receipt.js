
/* 
  create a function that will check All Inputs 
  A message needs to be display if condition not met: 
  "Please enter more than 40 caracters for your message"
*/
function checkAllInputs(event) {
  event.preventDefault();
  const messageValue = $('#message').val();
  const messageValid = messageValue.length > 40;
  if (!messageValid) {
    $('#helpForm').text('Please enter more than 40 caracters for your message');
  }
}
$('form').on('submit', checkAllInputs);
