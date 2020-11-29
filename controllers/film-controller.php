<?php
function listfilms(){
    $films = getAllFilms();
    include "views/list-view.php";
}

function details(){
    $filmId=$_GET['id'];
    $film = getFilmById($filmId);
    include "views/details-view.php";
}

function create(){
  include "views/create-view.php";
}

function save(){
  //basic form processing
  $title=$_POST['title'];
  $year=$_POST['year'];
  $duration=$_POST['duration'];
  $certId=$_POST['certificate'];
  saveFilm($title,$year,$duration,$certId);
  include "views/save-view.php";
}


?>
