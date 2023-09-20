//variables for checking is name and date are correct
var nameOk = false;
var dateOk = false;
//listen the input name field
document.querySelector("#victim").addEventListener("keyup", function () {
  const victimName = document.querySelector("#victim");
  const name = victimName.value;
  const arr=name.split(" ");
  if (name.indexOf(" ")>-1) {
    if((arr[0].length>0)&&(arr[1].length>0)){
    victimName.style.borderColor = "green";
    nameOk = true;
    
    //if everithing is ok, enabled the submit-button
    if (nameOk&&dateOk){
      document.querySelector("#submission button").disable="false";
      document.querySelector("#submission button").style.backgroundColor="var(--accent-color)";
    }   
  } else {
    victimName.style.borderColor = "red";
    nameOk = false;
    document.querySelector("#submission button").disable="true";
      document.querySelector("#submission button").style.backgroundColor="var(--grey-text)";
      document.querySelector("#submission button").style.color="black";    
  }
  } else {
    victimName.style.borderColor = "red";
    nameOk = false;
    document.querySelector("#submission button").disable="true";
      document.querySelector("#submission button").style.backgroundColor="var(--grey-text)";
      document.querySelector("#submission button").style.color="black";
  }
  
});
//listen the input date field
document.querySelector("#carry").addEventListener("keyup", function () {
  const victimDate = document.querySelector("#carry");
  const date = victimDate.value;
  if (date.length > 3) {
    victimDate.style.borderColor = "green";
    dateOk = true;    
    //if everithing is ok, enabled the submit-button  
    if (nameOk&&dateOk){
      document.querySelector("#submission button").disable="false";
      document.querySelector("#submission button").style.backgroundColor="var(--accent-color)";
    } 
  } else {
    victimDate.style.borderColor = "red";
    dateOk = false;   
    document.querySelector("#submission button").disable="true";
      document.querySelector("#submission button").style.backgroundColor="var(--grey-text)";
      document.querySelector("#submission button").style.color="black"; 
  }

});

 