// Ask for the user's name
const userName = prompt("Enter your Name");

// Confirm if the user is above 18 or not
confirm('Are you above 18?');

// Ask for the user's email
const email = prompt('Enter your email');

// Thank the user and notify them that an email will be sent
alert('Thank you, ' + userName + '. We will send the details to the email: ' + email);

// Ask the user's favourite color
const color = prompt("What's your favourite color?");

// Ask the user's favourite food
const food = prompt("What's your favourite food?");

// Notify the user that the information has been recorded
alert('Got it! You love ' + color + ' and ' + food + '. This information will be used to personalize your experience.');

// Display the user's responses
document.write('Name: ' + userName + '<br/>');
document.write('Email: ' + email + '<br/>');
document.write('Favourite Color: ' + color + '<br/>');
document.write('Favourite Food: ' + food + '<br/>');
