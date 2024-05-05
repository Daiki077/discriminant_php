<H1>THANK YOUR FOR SUBMITTING</H1>

<?php  
if(isset($_GET['getformula'])) {

	// String passed inside our GET variable comes from the name attribute of our input element 
	$A = $_GET['A'];
	$B = $_GET['B'];
    $C = $_GET['C'];


	// GETTING THE DISCRIMINANT VALUE.
	$formula = ($B**2) - (4*$A*$C);

	// Print the result
	echo "<h1>The answer is " . $formula . "</h1>";
}
?>