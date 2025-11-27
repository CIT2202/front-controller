<?php 
$pageTitle="Add a new Film";
require "views/partials/header.view.php";
?>
  <h1>Add a new film</h1>

  <form method="POST" action="index.php?action=store">
    <div>
      <label for="title">Title:</label>
      <input type="text" id="title" name="title">
    </div>
    <div>
      <label for="year">Year:</label>
      <input type="text" id="year" name="year">
    </div>
    <div>
      <label for="duration">Duration:</label>
      <input type="text" id="duration" name="duration">
    </div>
    <div>
      <label for="certId">Certificate id number (1='U', 2='PG', 3='12', 4='15', 5='18')
      </label>
      <input type="text" id="certId" name="certId">
    </div>
    <div>
      <button type="submit">SAVE THE FILM</button>
    </div>

  </form>

<?php 
require "views/partials/footer.view.php";
?>