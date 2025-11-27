<?php
function index()
{
    //Ask the model for all the films
    $films = all();
    //Load the films view
    require("./views/index.view.php");
}

function show()
{
    //Get the id from the query string
    $id = (int) $_GET['id'];
    //Get the specific film from the model
    $film = find($id);
    //Load the view
    require("./views/show.view.php");
}

function create()
{
    //No model functionality need, just need to load the view
    require("./views/create.view.php");
}

function save()
{
    //get the data from the form
    $title = $_POST['title'];
    $year = $_POST['year'];
    $duration = $_POST['duration'];
    $certId = $_POST['certId'];

    //Ask the model to save the new film
    store($title, $year, $duration, $certId);

    //Redirect the user to the home page
    header('Location: ./index.php');
}

function about()
{
    //add code in here
}

function edit()
{
    //add code in here
}

function updateFilm()
{
    //add code in here
}

function destroy()
{
    //add code in here
}
