<!-- /*

EXERCISE :

1. Create two pages, index.html and checking.php.
2. In index.html you’ll have a form with a text input (call it 'username') and a submit button.
3. When the form is submitted, send the value of the input to checking.php using AJAX.
4. In checking.php, check if the input value contains '@'. If it does, send back "Enter a valid username".
If it does not, send back "Welcome [username] to our website !".
Hint : use str_contains() to check if a string contains something.
5. Display the response message in a <p> element.

BONUS 1 : Add a new password field to the form. In the PHP file verify that it is at least 6 characters long.
Return the appropriate error message if it's shorter.

*/
 -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX call form</title>
</head>
<body>
    
        <form style="background-color:lightgreen;margin:50px 30%;padding:30px; box-shadow:0 0 30px grey;">
            <label for="name">Name</label>
            <input type="text" name="name" id=""><br>
            <label for="password">Password</label>
            <input type="password" name="password" id=""><br>
            <input type="submit" value="submit" name="sbm">
        </form>
        <p id="result"></p>
        <script>
            document.querySelector("form").addEventListener("submit",function(event){
                event.preventDefault();
                let forma=this;
                fetch("checking.php",{
                    method:"post",
                    body: new FormData(forma)//creates a new formdata object with input values and sets it as the request body
                }).then((res)=>res.text()).then(function (result){
                    //once ajax call is done
                    console.log(result);
                document.querySelector("#result").innerHTML=result;
                })

            })
        </script>
    
</body>
</html>

////////////////////////////////////////////////////////////////////////
<?php
$name=$_POST['name'];
$pas=$_POST['password'];
$arr=[];
if (str_contains($name,'@')) {
    array_push($arr,"Enter a valid username.<br>");
}
if (strlen($pas)<6) array_push($arr, "Password min 6 symbols.<br>");
if ($arr==[]) echo "Welcome $name on our website.<br>";
else {
    foreach ($arr as $a) echo $a;
}
     
?>