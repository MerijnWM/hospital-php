<?php

function getAllSpecies() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function insertSpecie()
{
	$specie = isset($_POST['specie']) ? $_POST['specie'] : null;
 
	if ($specie === null )  {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO species (species_description) VALUES (:specie)";

	$query = $db->prepare($sql);
	$query->execute(array(
		":specie" => $specie
		
	));
	
	$db = null;
	
	return true;
}

function removeSpecie($id)
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id=:id";

	$query = $db->prepare($sql);		
	$query->execute(array(
		":id" => $id
	));

	$db = null;
	return true;
}

function getSpecie($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE species_id=:id";

	$query = $db->prepare($sql);	
	$query->execute(array(
		":id" => $id
	));	

	$db = null;

	return $query->fetchAll();
}

function changeSpecieData($id)
{
	$specie = isset($_POST['specie']) ? $_POST['specie'] : null;		

	if ($specie === null || $id == null){
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE species SET species_description=:specie WHERE species_id=:id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":specie" => $specie,		
		"id" => $id
	));
	
	$db = null;
	
	return true;
}