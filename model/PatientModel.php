<?php

function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients 
	LEFT OUTER JOIN clients on patients.client_id=clients.client_id
	LEFT OUTER JOIN species on patients.species_id=species.species_id
	LEFT OUTER JOIN sex on patients.sex_id=sex.sex_id";
	
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function order($sort, $order)
{		
	$db = openDatabaseConnection();
	
	$sql = "SELECT * FROM patients 
	LEFT OUTER JOIN clients on patients.client_id=clients.client_id
	LEFT OUTER JOIN species on patients.species_id=species.species_id
	LEFT OUTER JOIN sex on patients.sex_id=sex.sex_id
	ORDER BY $sort $order";
	
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function insertPatient()
{
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$specie = isset($_POST['specie']) ? $_POST['specie'] : null;
	$client = isset($_POST['client']) ? $_POST['client'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;
	$sex = isset($_POST['sex']) ? $_POST['sex'] : null;

	if ($name === null || $specie === null || $client === null || $status === null || $sex === null)  {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients (patient_name, species_id, client_id, patient_status, sex_id) VALUES (:name, :specie, :client, :status, :sex)";

	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name,
		":specie" => $specie,
		":client" => $client,
		":status" => $status,
		":sex" => $sex
	));
	
	$db = null;
	
	return true;
}

function removePatient($id)
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id=:id";

	$query = $db->prepare($sql);		
	$query->execute(array(
		":id" => $id
	));

	$db = null;
	return true;
}

function getPatient($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients 
	LEFT OUTER JOIN clients on patients.client_id=clients.client_id
	LEFT OUTER JOIN species on patients.species_id=species.species_id
	LEFT OUTER JOIN sex on patients.sex_id=sex.sex_id
	WHERE patient_id=:id";

	$query = $db->prepare($sql);	
	$query->execute(array(
		":id" => $id
	));	

	$db = null;

	return $query->fetchAll();
}

function changePatientData($id)
{
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$specie = isset($_POST['specie']) ? $_POST['specie'] : null;
	$client = isset($_POST['client']) ? $_POST['client'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;
	$sex = isset($_POST['sex']) ? $_POST['sex'] : null;

	if ($name === null || $specie === null || $client === null || $status === null || $sex== null || $id == null){
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name=:name, species_id=:specie, client_id=:client, patient_status=:status, sex_id=:sex WHERE patient_id=:id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name,
		":specie" => $specie,
		":client" => $client,
		":status" => $status,
		":sex" => $sex,
		":id" => $id
	));
	
	$db = null;
	
	return true;
}

