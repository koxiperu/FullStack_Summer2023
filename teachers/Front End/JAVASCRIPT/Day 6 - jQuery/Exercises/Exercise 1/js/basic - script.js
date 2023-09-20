// 1.
// on every key pressed "keyup"
$("#pswd").on("keyup", function () {
  // Gathering : checked the password value : $("#pswd").val()
  const pwdValue = $("#pswd").val();

  // at least one number "123".match(/\d/) => true
  const numberValid = pwdValue.match(/\d/); // REGEX
  if (numberValid) {
    $("#number").addClass("valid");
  } else {
    $("#number").removeClass("valid");
  }

  // at least one Capital letter .match(/[A-Z]/)
  const capitalValid = pwdValue.match(/[A-Z]/);
  if (capitalValid) {
    $("#capital").addClass("valid");
  } else {
    $("#capital").removeClass("valid");
  }

  // at least one letter .match(/[a-z]/)
  const letterValid = pwdValue.match(/[a-z]/);
  if (letterValid) {
    $("#letter").addClass("valid");
  } else {
    $("#letter").removeClass("valid");
  }

  // length >= 8
  const lengthValid = pwdValue.length >= 8;
  if (lengthValid) {
    $("#length").addClass("valid");
  } else {
    $("#length").removeClass("valid");
  }
});

//2.
// On submit, Check that the password and passwordConfirm matches
$("form#signUp").on("submit", function (event) {
  event.preventDefault();

  // Inputs : pwd, pwdconfirm
  const pwdValue = $("#pswd").val();
  const pwdConfirmValue = $("#pswdConfirm").val();

  // Logic
  // All cases to check
  const capitalValid = pwdValue.match(/[A-Z]/);
  const letterValid = pwdValue.match(/[a-z]/);
  const digitValid = pwdValue.match(/\d/);
  const lengthValid = pwdValue.length >= 8;

  // check for matching of confirmation
  const matchingPWD = pwdValue === pwdConfirmValue;
  const allIsGood =
    capitalValid && letterValid && digitValid && lengthValid && matchingPWD;
    
  if (allIsGood) {
    $(this).html("<h2>You are registered correctly</h2>");
  } else {
    alert("Something's wrong my friend");
  }
});

// 3.
// Apply a show/hide to #pswd_info on focus/blur on #pswd
$("#pswd").on("focus", function () {
  $("#pswd_info").show(1000);
});
$("#pswd").on("blur", function () {
  $("#pswd_info").hide(1000);
});

// if you want to talk RegEx
// Go join your people over there : https://stackoverflow.com/questions/18057962/regex-pattern-including-all-special-characters/18058074
