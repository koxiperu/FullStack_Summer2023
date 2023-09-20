//1 - when the page is loaded , make the preloader disappears
$("html").ready(function () {
  $("#preloader").css({
    display: "none",
  });
});

// 2 - When the user submit his Form, you need to do some verifications
$("#contact-form").on("submit", function () {
  event.preventDefault();
  const email = $("#email").val();
  const messageTo = $("#message").val();
  console.log(email);
  console.log(messageTo);

  //checking e-mail
  if (email.includes(".") && email.includes("@")) {
    console.log("ok email");
    console.log("index '.' is " + email.indexOf("."));
    console.log("index if '@' is " + email.indexOf("@"));
    $("#email").css({
      backgroundColor: "white",
    });
    $("#helpForm").remove();
    if (messageTo.length < 40) {
      $("#message").css({
        backgroundColor: "red",
      });
      $("#helpForm").append(
        $("<p>The message contains less than 40 characters</p>")
      );
      
    };
 } else {
    $("#email").css({
        backgroundColor: "red",
      });
      $("#helpForm").append(
        $("<p>The email does not contain '.' and '@'</p>")
      );
      
    }
  
});

// You will use #helpForm to warn the user
// Trigger

// Input

// Logic

// Output
//errors
// .join('<br>') will make a string from my array
// So that ['error1','error2'] => 'error1<br>error2'
