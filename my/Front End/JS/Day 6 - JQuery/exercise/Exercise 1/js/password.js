var validPswd;
var showTip=false;
var password;

$("form").on("submit", function (event) {
  event.preventDefault();
  const confPswd = $("#pswdConfirm").val();
  console.log("paswd valid - " + validPswd);
  if (validPswd) {
    if (confPswd == password) {
      $("#signUp li").remove();
      $("#signUp").append("Success mesage! You're perfect!");
      $("#signUp").css({
        textAlign: "center",
        color: "green",
        "font-size": "30px",
      });
    } else {
      alert("NONONO, confirm the password!");
    }
  } 
});

$("#pswd").on("keyup", function () {
  password = $("#pswd").val();
  const pswdLengthValid = password.length > 7;
  const pswdNumberValid = hasNumber(password);
  const pswdLetterValid = hasLetter(password);
  const pswdCapitalLetterValid = hasCapitalLetter(password);

  if (
    pswdLengthValid &&
    pswdNumberValid &&
    pswdLetterValid &&
    pswdCapitalLetterValid
  ) {
    $("#pswd_info").css({
      display: "none",
    });
    $("#pswd").css({
      borderColor: "green",
    });
    validPswd = true;
    console.log("valid pswd - "+validPswd);
  } else {
    if (pswdLengthValid) {
        $("#length").addClass("valid")
    } else {$("#length").removeClass("valid")
    }
    if (pswdNumberValid) {
        $("#number").addClass("valid")
    } else {$("#number").removeClass("valid");
    }
    if (pswdLetterValid) {
        $("#letter").addClass("valid")
    } else {$("#letter").removeClass("valid")
        
    }
    if (pswdCapitalLetterValid) {
        $("#capital").addClass("valid")
    } else {$("#capital").removeClass("valid")
    }
    $("#pswd").css({
      borderColor: "red",
    });
  }
});

function hasNumber(string) {
  return /\d/.test(string);
}
function hasLetter(string) {
  return /[a-z]/.test(string);
}
function hasCapitalLetter(string) {
  return /[A-Z]/.test(string);
}

$("#pswd").on("click",function(){
    $("#pswd_info").css({
        display: "initial",
    });
    showTip=true;
})