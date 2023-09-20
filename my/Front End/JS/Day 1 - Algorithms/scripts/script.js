/*
Multiple line 
of
comment*/

//one line of comment

//to show off
/**************************
 * *********Decorartion*****
 * ************************** */

//Convention
//* Important information is highlighted
//!Deprecated method, DO NOT USE
//? Should this method be exposed in the public folder?
//TODO: change this function so that do this

/****************************
 * Already defiined functions
 * ***************************/
//INPUT: prompt("sentence");
const name=prompt("Enter your name");

//?INPUT: confirm("message");
const legal=confirm('Are you above 18?');

//OUTPUT: alert('message');
alert('Hello');

//OUTPUT: document.write('HTML tags and content');
// . call function
document.write('<h2>ok</h2>');

//OUTPUT for DEVS:console.log('');
console.log("I'm a dev now");

/*VARIABLES*/
const teacher='Gabriel'; //Declaration + assignment
//console.log(teacher); - there will an error.
let age; //declaration
age=39;//assignement, initiolisation
age=40;
console.log(age);

//!don't use "var" never, ever, for life and behond
//?Var is for users
//*you have to use "const" and "let"
const email=prompt('enter your email');
alert('thank you, we will spam the email: '+email);

const lastName=" Abreu Damaso";
const fullName=teacher+" mr"+lastName;
console.log(fullName);

/*TYPES*/
//Default 
let friends; //undefined
console.log(friends);
friends=null; //null - a developer choose to reset the value
console.log(friends);

//[string] - setence, words, letters of charts
friends="Timmy";
friends="Timmy's girlfriend";

// -> allow operation: concatenation:
friends='gabriel'+'       '+'Abreau';
console.log(friends);
//[numbers] - 12345678955
let temperature=15.6;
console.log(temperature);
temperature= -10;
console.log(temperature);
temperature=2/3;
console.log(temperature);

let score=0;
score=score+1;
score+=1;
score++;
console.log(score);

score -=1;
score*=2;
console.log(score);
score /=3;
score --;

//---------------------------------------------------------------------------
//[boolean]:true/false
const teacherIsGood=true;
const luxembourgIsSunny=false;
const notGood="false"; //this is not a boolean, this is string
//falsy: false, underfined, 0, null, NaN (Not a Number)
//truthy: everything else.

//smart Typing
let whatIsIt='1'+9; //string+int=string (19)
console.log(whatIsIt);
console.log(1+9);//=10
//From string to number

const currency=+'10'|| Number('10');
console.log(currency);
//from number to string
const money=''+1 || (1).toString();
console.log(money);

//=================ex=====================================================
console.log('=======ex-begin==========');
let budget=10;
console.log(budget-4);

let firstName ='John';
let lastNam ='Doe';
let fullNam=firstName+' '+lastNam;
console.log('My name is '+fullNam);

let totalApples=100;
let applesGiven=45;
applesLeft=totalApples-applesGiven;
console.log(applesLeft);

let stringNumber='100';
let numberNumber=+stringNumber;
console.log(numberNumber);


console.log('========practice================');
const yourName=prompt('What is your name?');
const yourAge=confirm('Are you above 18?');
const yourEmail=prompt('enter your email');
let message='Hello, '+yourName+"! You're adult and your e-mail (if you foget) is "+yourEmail +'. Now I will spam to you all the time:))))';
alert(message);
const color=prompt('What is your favorite color?');
const food=prompt('What is your favourite food?');
let message1='I record the information, that you like '+color+' '+ food+'.';
alert(message1);
document.write('<p>'+yourName+' is adult. His/Her e-mail is '+yourEmail+'. He/She likes '+color+' '+food+'.</p>');

console.log('===========ex-end===========');
//========================================================================