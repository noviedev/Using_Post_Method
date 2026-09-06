<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = htmlspecialchars($_POST['firstName']); 
    $email = htmlspecialchars($_POST['userEmail']);

    echo "<h1>Success!</h1>";
    echo "<p>Received data for: <strong>" . $name . "</strong></p>";
    echo "<p>Email provided: <strong>" . $email . "</strong></p>";
    
   
    echo '<a href="index.html">Go back</a>';
} else {
    echo "No data was submitted.";
}
?>
