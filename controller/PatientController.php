<?php

require(ROOT . "model/PatientModel.php");
require(ROOT . "model/SpeciesModel.php");
require(ROOT . "model/ClientModel.php");

function index()
{
	render("patient/index", 
		array('patients' => getAllPatients())		
	);
}

function orderPatients(){
	$sort = $_GET['sort'];
	$order = $_GET['order'];
	render("patient/index", 
		array('patients' => order($sort, $order))		
	);
}

function createPatient()
{
	render("patient/create", 
		array('species' => getAllSpecies(),
			'clients' => getAllclients()
	));
}

function savePatient()
{
	if(insertPatient()){
		header('location: '. URL ."patient/");
	} else {
		header('location: '. URL .  "error/");
	}	
}

function deletePatient()
{	
	$id = $_GET['id'];
	if (removePatient($id)){
		header('location: '. URL . "patient/");
	}else {
		header('location: '. URL .  "error/");
	}
}

function updatePatient()
{
	$id = $_GET['id'];
	render("patient/update", array(
		'getpatient' => getPatient($id),
		'species' => getAllSpecies(),
		'clients' => getAllclients()
	));
}

function updatePatientSave()
{
	$id = $_GET['id'];
	if(changePatientData($id)){
		header('location: '. URL . "patient/");
	}else {
		header('location: '. URL .  "error/");
	}
}