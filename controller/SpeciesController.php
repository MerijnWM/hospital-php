<?php

require(ROOT . "model/SpeciesModel.php");

function index()
{
	render("species/index", array(
		'species' => getAllSpecies()
	));
}

function createSpecie()
{
	render("species/create");
}

function saveSpecie()
{
	if (insertSpecie()){
		header('location: '. URL . "species/");
	}else {
		header('location: '. URL .  "error/");
	}
}

function deleteSpecie()
{
	$id = $_GET['id'];
	if (removeSpecie($id)){
		header('location: '. URL . "species/");
	}else {
		header('location: '. URL .  "error/");
	}
}

function updateSpecie()
{
	$id = $_GET['id'];
	render("species/update", array(
		'getspecies' => getSpecie($id)));
}

function updateSpecieSave()
{
	$id = $_GET['id'];
	if(changeSpecieData($id)){
		header('location: '. URL . "species/");
	}else {
		header('location: '. URL .  "error/");
	}
}