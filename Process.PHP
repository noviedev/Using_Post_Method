<?php
// The server looks for the exact 'name' attributes defined in the HTML
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Basic security practice: use htmlspecialchars to prevent XSS attacks
    $name = htmlspecialchars($_POST['firstName']); 
    $email = htmlspecialchars($_POST['userEmail']);

    echo "<h1>Success!</h1>";
    echo "<p>Received data for: <strong>" . $name . "</strong></p>";
    echo "<p>Email provided: <strong>" . $email . "</strong></p>";
    
    // Optional: Add a link to go back to the team page
    echo '<a href="index.html">Go back</a>';
} else {
    echo "No data was submitted.";
}
?>
