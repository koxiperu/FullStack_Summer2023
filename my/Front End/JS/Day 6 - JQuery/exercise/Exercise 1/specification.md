# Exercise 1

You're given a sign-up page to work on.
There are 3 fields that users need to fill up :

- Username
- Password
- Confirm password

1 - We will not check anything for the username, however the password must follow these criterias :

- At least 8 characters
- At least one number
- At least one letter
- At least one capital letter
  We will use the keyup event to trigger password validation.

  Hint : to check for password requirements, use the following regex (regular expression)
  For numbers : /\d/
  For letters : /[a-z]/
  For capital letters : /[A-Z]/

2 - On form submission, prevent the form default behaviour to happen. Then check if Password and Confirm password have matching values.
If they do, change the content of the form to a success message, if they don't, display an alert for the user.

3 - When clicking inside the Password input field the div with id "pswd_info" must appear.
If you click outside the input, the div must go away.