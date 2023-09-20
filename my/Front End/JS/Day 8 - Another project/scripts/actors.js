var actName="";
const actorTempl = $("#cardTempl");
const actNameTempl=$("#templateToFill");
var cardArr=[];


//before loading form the array of all clones
  for (const clonedActor of actorsArray) {
    //clone into the field
  const cardClone = actorTempl.clone();
  $("#card_list").append(cardClone);
  //clone into the list
const cloneName=actNameTempl.clone();
  $("#exampleFormControlSelect2").append(cloneName);
  //adjust
  const actGen = clonedActor.category;
  actName = clonedActor.name;
  const actPic = clonedActor.picture;
  cardClone.find("img").attr({
    "src": actPic,
    "alt": actGen
  });
  cloneName.text(actName);
  cloneName.val(actName);
  cardClone.find(".card-title").text(actName);
  cardClone.val(actName);
  cardClone.css({
    display: "none",
  }); 
  actorTempl.remove();
  actNameTempl.remove();  
}
cardArr=$(".card");
console.log(cardArr);


//when load show only males
$("html").ready(visibleCard("male"));

//hide ALL cards
function hideAll() {
  for (const toHide of cardArr) {
    $(toHide).hide();
  }
}

//function that disappears choosen gender
function visibleCard(gender) {  
   hideAll();
    for (const as of cardArr) {
      const cat=$(as).find("img").prop("alt");
      if (cat == gender) {
        $(as).css({
          "display":"block"
        });
      }
       }      
   $("#exampleFormControlSelect1 option[value='"+gender+"']").prop("selected",true);
 }

//listen the click on gender-buttons
$("#ifmale").on("click", function () {
  $("#exampleFormControlSelect1 option[value='male']").prop("selected", true);
  hideAll();
  visibleCard("male");
});

$("#iffemale").on("click", function () {
  $("#exampleFormControlSelect1 option[value='female']").prop("selected", true);
  hideAll();
  visibleCard("female");  
});

$("#ifbaby").on("click", function () {
  $("#exampleFormControlSelect1 option[value='baby']").prop("selected", true);
  hideAll();
  visibleCard("baby");
});


//listen "select gender"
$("#exampleFormControlSelect1").on("change", function () {
  hideAll();  
  const gend=this.value;
  $("input[type='radio'][name='male']").prop("selected", false);
  $("input[type='radio'][name='female']").prop("selected", false);
  $("input[type='radio'][name='baby']").prop("selected", false);
  $("input[type='radio'][name='"+gend+"']").prop("selected", true);
  $("#ifmale").removeClass("active");
  $("#iffemale").removeClass("active");
  $("#ifbaby").removeClass("active");
  $("#if"+gend).addClass("active");
  visibleCard(gend);
});
 
//set listen on all of the cards
for (const everyCard of cardArr){
  $(everyCard).on("click", function(){
    const chosenName=$(this).val();
    console.log(chosenName); 
  for (const notChooseActor of cardArr){
    $(notChooseActor).removeClass("bg-primary text-white");
  }
  $(this).addClass("bg-primary text-white");
  $("#exampleFormControlSelect2 option[value='"+chosenName+"']").prop("selected", true);
}); 
};
 
//listen the selection of 1 actor
$("#exampleFormControlSelect2").on("change", function () {
  hideAll();  
  const theOne=this.value;
  let theGen="";
  for(const a of actorsArray){
    if (a.name==theOne){
      theGen=a.category;
    }
   console.log(theOne+"-"+theGen); 
  }
  $("input[type='radio'][name='male']").prop("selected", false);
  $("input[type='radio'][name='female']").prop("selected", false);
  $("input[type='radio'][name='baby']").prop("selected", false);
  $("input[type='radio'][name='"+theGen+"']").prop("selected", true);
  $("#ifmale").removeClass("active");
  $("#iffemale").removeClass("active");
  $("#ifbaby").removeClass("active");
  $("#if"+theGen).addClass("active");
  for (const as of cardArr) {
    const mane=$(as).val();
    if (mane == theOne) {
      $(as).css({
        "display":"block"
      });
    }
     }      
 $("#exampleFormControlSelect1 option[value='"+theGen+"']").prop("selected",true);
});

//listen the submition
$("#ask").on("click",function(){
  console.log("wait");
  const compName=$("#formGroupExampleInput").val();
  const theOneCh=$("#exampleFormControlSelect2 option:selected").val();
  if (compName.length<2) {
    alert("input the name of the company");
  }else{
    const eemail=$("#eemail").val();
    console.log(eemail);
    if((eemail.includes("@"))&&(eemail.includes("."))){
      console.log("COOOOL");
      for (const a of cardArr){
        $(a).css({
        "display":"none"
      })
      }
      
      $("main").append("Sorry, "+theOneCh+" is not currently available. You will be contacted as soon as possible");
    }else{
      alert("input the e-mail address");
    }
  }
})