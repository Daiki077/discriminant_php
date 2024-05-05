<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Getting the discriminant value</title>
    <!-- style for submit button -->
    <style>
    input[type="submit"] {
        background-color: gray;
        color: white; 
        padding: 10px;
        border-color: 10px black;
        border-radius: 5px; 
        cursor: pointer; 
        font-size: 16px;
    }
    input[type = "text"]{
        padding: 10px;
        background-color: 10px black;
    }
    </style>
</head>
<H1>DISCRIMINANT OF A QUADRATIC FORMULA</H1>
<body>

	 <!-- The form submits to the same page using GET method -->
	<form action="formula.php" method="GET">

		<!-- Input field for the username. Take note of the value stored in the name attribute -->
		<h1>A</h1><p><input type="text" placeholder="Enter the value of A" name="A"></p>
		<h1>B</h1><p><input type="text" placeholder="Enter the value of B" name="B"></p>
        <h1>C</h1><p><input type="text" placeholder="Enter the value of C" name="C"></p>
        

		<!-- Submit button -->
		<p ><input type="submit" value="Submit" name="getformula"></p>
	</form>
</body>
</html>