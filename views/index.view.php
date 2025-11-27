<?php 
$pageTitle="The Amazing Film App";
require "views/partials/header.view.php";
?>
<h1>Here's a list of films</h1>
<?php
// The results from the database are returned as an array
// Use a foreach loop to iterate over the array and display the each film
foreach ($films as $film) {
    echo "<p>";
    // Construct a link to the show.php page
    echo "<a href='index.php?action=show&id={$film["id"]}'>";
    // Display the film's title
    echo $film["title"];
    echo "</a>";
    echo "</p>";
}
?>
<?php 
require "views/partials/footer.view.php";
?>
