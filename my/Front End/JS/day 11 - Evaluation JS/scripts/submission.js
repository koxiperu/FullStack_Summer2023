///IT WORKS BEFORE I STARTED TO DO BONUS:(((((


//listen the form submission.
document.querySelector("#submission").addEventListener("submit", function (event) {
    event.preventDefault();
    console.log("subbutton works");
    //chewck if everything was filled correctly
    if (nameOk&&dateOk) {
    document.querySelector("#submission").remove();
    document.querySelector("#call2Action").innerHTML =
      "<p>Thanks for the trust your puting in us.</p>";
    document.querySelector("#call2Action p").style.color = "darkgreen";
    document.querySelector("#call2Action p").font = "30px Roboto";
    } else {
        alert("An error occured.");
    }    
  });

