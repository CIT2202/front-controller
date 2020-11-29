<?php
include "models/film-model.php";

//This is a simple example we would normally do some form validation here

//basic form processing
$title=$_POST['title'];
$year=$_POST['year'];
$duration=$_POST['duration'];
$certId=$_POST['certificate'];

saveFilm($title,$year,$duration,$certId);

include "views/save-view.php";

?>
