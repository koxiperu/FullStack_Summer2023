//1 - when the page is loaded , make the preloader disappears
$(document).ready(function () {
    $("#preloader").fadeOut(1000);
  });
  
  // 2 - When the user submit his Form, you need to do some verifications
  // You will use #helpForm to warn the user
  // Trigger
  $("form").on("submit", function (event) {
    event.preventDefault();
    let errors = [];
    // Input
    const nameValue = $("#name").val();
    const subjectValue = $("#subject").val();
    const messageValue = $("#message").val();
    const emailValue = $("#email").val();
    // Logic
    const nameValid = nameValue.length > 0;
    if (!nameValid) {
      errors.push("Name is required");
    }
    const subjectValid = subjectValue.length > 0;
    if (!subjectValid) {
      errors.push("Subject is required");
    }
    const messageValid = messageValue.length >= 40;
    if (!messageValid) {
      errors.push("Message should be at least 40 chars");
    }
    const emailValid = emailValue.includes("@") && emailValue.includes(".");
    if (!emailValid) {
      errors.push("That's not a valid email.");
    }
    // Output
    //errors
    // .join('<br>') will make a string from my array
    // So that ['error1','error2'] => 'error1<br>error2'
    $("#helpForm").html(errors.join("<br>"));
    // C  IF ALL IS VALID REPLACE THE FORM WITH
    /*
      const success = `${nameValue}, your message ${messageValue} has been sent. 
      You will be contact soon on the mail address ${emailValue} 
      about ${subjectValue}`;
      */
    if (errors.length == 0) {
      const success =
        nameValue +
        ", your message " +
        messageValue +
        " has been sent. You will be contact soon on the mail address " +
        emailValue +
        " about " +
        subjectValue;
      $("form").text(success);
    }
  });
  