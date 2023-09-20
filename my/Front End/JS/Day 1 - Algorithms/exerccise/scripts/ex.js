const yourName=prompt('What is your name?');
const yourAge=confirm('Are you above 18?');
const yourEmail=prompt('enter your email');
let message='Hello, '+yourName+"! You're adult and your e-mail (if you foget) is "+yourEmail +'. Now I will spam to you all the time:))))';
alert(message);
const color=prompt('What is your favorite color?');
const food=prompt('What is your favourite food?');
let message1='I record the information, that you like '+color+' '+ food+'.';
alert(message1);
document.write('<p>'+yourName+' is adult. His/Her e-mail is '+yourEmail+'. He/She likes <span style="color:'+color+'"> '+color+'</span> '+food+' .</p>');

