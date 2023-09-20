// [SELECT]
$("h1").text("A new Heading");
$("h1").html("A <em>new</em> Heading");
// $ = document.querySelector()
// don't mix selecting with jQuery and Vanilla JS properties
// $("h1").innerText = "Does not work !!!";
// document.querySelector("h1").text("Does not work !!!");

// One element
$("h1").on("click", function(){
    $(this).toggleClass("important");
});

// Many elements
$("h2").on("click", function(){
    $(this).toggleClass("important");
});
// Equivalent of
// const allH2 = document.querySelectorAll("h2");
// for (const h2 of allH2){
//     h2.addEventListener("click", function(){
//         this.classList.toggle("important");
//     });
// }

// Select a specific element
$("h2").eq(0).text("I am the first h2");

// CSS
$("h1").css({
    color: "red",
    textAlign: "center",
    // "text-align"
    "background-color": "blue" // if property name includes - you need to wrap the property name with ""
});

// FORM
$("form").on("submit", function(event){
    event.preventDefault();
    const name = $("#username").val();
    const nameValid = name.length > 6;
    const color = nameValid ? "green" : "red"; // TRUE : FALSE
    $("#username").css({
        borderColor: color
    });
    // could have been done using .style.borderColor = color;
});

// DUPLICATION / CLONE

// Model/template
const usersArray = [
    {name: "Timmy"},
    {name: "Tiago"},
    {name: "Anna"},
    {name: "Joe"},
    {name: "Conor"},
    {name: "Victor"},
    {name: "Arjana"}
];

// select the first list element to use as a model
const model = $("ul li").eq(0);
for (const userData of usersArray){
    // 1 - Create/Clone
    const clone = model.clone();
    // 2 - Append
    $("ul").append(clone);
    // 3 - Customize
    clone.find("span").text(userData.name); // <li>user : <span></span></li>
    // optional add on event to a clone
    clone.on("click", function(){
        // light animation
        $(this).hide(1000);
    });
}

// kill the model
model.remove();