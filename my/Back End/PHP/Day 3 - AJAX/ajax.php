
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX call form</title>
</head>
<body>
    <div id="result"></div>
        <form>
            <input type="text" name="name" id="">
            <input type="text" name="email" id="">
            <input type="submit" value="submit" name="sbm">
        </form>
        <script>
            document.querySelector("form").addEventListener("submit",function(event){
                event.preventDefault();
                let forma=this;
                fetch("login.php",{
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




//////////////////////////////////////////////////////////////////////////////////////////
login.php
------------------------------------------------------------------------------------------

<?php
if (empty($_POST['name'])) echo "Name is manadtory.<br>";
if (empty($_POST['email'])) echo "Email is mandatory. <br>";
?>
