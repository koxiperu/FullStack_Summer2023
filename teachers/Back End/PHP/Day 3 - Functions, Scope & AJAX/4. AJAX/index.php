<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AJAX Call Form</title>
</head>
<body>
	<div id="result"></div>

	<form>
		<input type="text" name="name">
		<input type="text" name="email">
		<input type="submit" name="submitBtn">
	</form>
	<script>
		document.querySelector("form").addEventListener("submit", function (event){
			event.preventDefault();
			let form = this;

			fetch("login.php", {
				method: "post",
				body: new FormData(form) // creates a new 'FormData' object with the 
				// input values and sets it as the request body
			}).then((res)=> res.text()).then(function (result){
				// Once AJAX call is done
				console.log(result);
				document.querySelector("#result").innerHTML = result;
			})
		})
	</script>
</body>
</html>