//[select]
//document.querySelector("h1").innerText="blablabla";
$("h1").text("A new heading");
$("h1").html("A <em>new</em> Heading");
//$ = document.querySelector()
//don't mix selecting with jQuery and Vanilla JS properties
//$("h1").innerText="DOES NOT WORK"
//document.querySelector("h1").text("DOES NOT WORK")

//one element
$("h1").on("click",function(){
    $(this).toggleClass("important");
});

//many elements
$("h2").on("click", function(){
    $(this).toggleClass("important");
});

//Equivalent of
const allH2 = document.querySelectorAll("h2");
for (const h2 of allH2){
    h2.addEventListener("click", function(){
        this.classList.toggle("important");
    });
}
//Select a specific element from equivalents
$("h2").eq(0).text("I'm the first h2"); //may work eq(0,1);

//CSS
$("h1").css({
    color:"red",
    textAlign:"center", //how if we use css-inline JS OR "text-align"
    "background-color":"blue"//of property name includes - you need to wrap the property name with "". 
})

//FORM
$("form").on("submit", function(event){
    event.preventDefault();
    const name= $("#username").val();
    const nameValid=name.length>6;
    const color=nameValid?"green":"red"; //TRUE:FALSE
    $("#username").css({
        borderColor:color,
    }) //could have been done using .style.borderColor=color;

})

//duplication/clone
//Madel/template
const userArray=[
    {name:"Timmy"},
    {name:"Tiago"},
    {name:"Anna"}, 
    {name:"Victor"},
    {name:"Arjana"},
];

//select the first list element to use as a model
const model=$("ul li").eq(0);
for (const userData of userArray) {
    //1 create clone
    const clone=model.clone();
    // 2 append
    $("ul").append(clone);
    //3 custom
    clone.find("span").text(userData.name); //<li>user: <span></span></li>
    //optional add on event to a clone
    clone.on("click", function(){
        //light animation
        $(this).hide(1000);
    });
}
//kill the model
model.remove();