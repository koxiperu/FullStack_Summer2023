/*
    Multiple
    line
    of
    comment
*/
// On line of comment

//to Show Off

/****************
 ***Decoration***
 *****************/
//Copyright Gabriel :mine

// * Important information is highlighted
// ! Deprecated method, DO NOT USE
// ? Should this method be exposed in the public folder? 
// TODO: change this function so that it do this

/****************************
 * Already defnied FUNCTIONS
**************************** */
// INPUT : prompt("sentence");
const name = prompt("Enter your Name");

// INPUT : confirm('message');
const legal = confirm('Are you above 18?');

//OUTPUT: alert('message')
alert('Hello');

//OUTPUT: document.write('HTML TAGS AND CONTENT')
document.write('<h2>ok</h2>');

//OUTPUT FOR DEVS : console.log();
console.log("I'm a dev now");

/* VARIABLES */

const teacher = 'Gabriel'; //Declaration + Assignment
// console.log(teacher);
let age; //Declaration
age = 39; // assignement / initialisation 
age = 40;
console.log(age);

// ! don't use "var", never, ever, for life and behond
// ? Var is for losers
// * you have to use "const" and "let"

const email = prompt('Enter your email');
alert('Thank you, we will spam the email : ' + email);

const lastName = "teacher";
const fullName = teacher + " " + lastName;
console.log(fullName);

/* TYPES */
// Default 
let friends;
console.log(friends);
friends = null; // NULL -> a dev choose to reset the value
console.log(friends);

// [STRING] - sentence, words, letters set of chars.
friends = 'Timmy';
friends = "Timmy's girlfriend";
console.log(friends);
// -> allowed operation : concatenation
friends = 'Gabriel' + '        ' + 'Abreu';
console.log(friends);

// [NUMBERS] - 123456789
let temperature = 15.6;

temperature = -10;
temperature = 2 / 3;
console.log(temperature);

let score = 0;
score = score + 1;
score += 1;
score++;

score -= 1;
score *= 1;
score /= 1;
score--;

// [BOOLEAN] : true /false
const teacherIsGood = true;
const luxembourgIsSunny = false; // but sometimes true
const notGood = "false"; // this is not a boolean, this is a string
// falsy : false, undefined, 0, null, NaN (Not a Number)
// truthy : everything else

// smart Typing
let whatIsIt = '1' + 9;// = string + int = 19
console.log(whatIsIt);
console.log(1 + 9); // = 10
//From string to number
const currency = +'9' || Number('9');
//from number to string
const money = '' + 1 || (1).toString();

// 10euro (budget), 
// you want to buy a sandwich (4 euro)
// > Calculate the budget after buying the sandwich

const budget = 10;
const sandwichPrice = 4;
const BudgetAfterEatingTheGoodSandwich = budget - sandwichPrice;
console.log('My budget is now : ' + BudgetAfterEatingTheGoodSandwich + 'euro');


// ---------------------------------------
//String Concatenation and Variables

// You have the first name as 'John' and last name as 'Doe'.
// > Create two variables firstName and lastName and assign these values.
// > Create a third variable fullName and concatenate firstName 
//and lastName with a space in between. console.log() fullName to the console.
// add : My name is 
let fn = 'john';
let ln = 'Doe';
let fullN = fn + ' ' + ln;
console.log('My name is ' + fullN);



// ---------------------------------------

// Number Operations and Variables

// You have 100 apples and you gave 45 to your friends.
// > Create a variable totalApples and assign it the value 100.
// > Create another variable applesGiven and assign it the value 45.
// > Subtract applesGiven from totalApples and assign the 
//result to a new variable applesLeft.
// > Console.log() applesLeft to the console.

let totalApples = 100;
let applesGiven = 45;
let applesLeft = totalApples - applesGiven;

// ---------------------------------------

// //Boolean and Conditions

// // You are driving. You want to know if you should stop or not when 
// // you see a traffic light.
// // > Create a variable isRedLight and assign 
// // it a boolean value of true or false.
// // > Write a console.log statement to print "Stop" 
// // if isRedLight is true, and "Go" if isRedLight is false.


// ---------------------------------------
// BONUS
// Type Conversion

// You have a string '100' and you want to convert it to a number.
// > Create a variable stringNumber and assign it the string '100'.
// > Convert stringNumber to a number using the '+' operator and assign the result to a new variable number.
// > Print number to the console.

// ----------------------------------------
// Falsy and Truthy Values
// BONUS 
// You have a variable mysteryVariable assigned an unknown value.
// > Create a variable mysteryVariable and assign it a value.
// > Write a console.log statement to print "Truthy" if mysteryVariable
// is truthy, and "Falsy" if mysteryVariable is falsy.









