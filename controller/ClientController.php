<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	render("client/index", array(
		'clients' => getAllClients()
	));
}

function createClient()
{
	render("client/create");
}

function saveClient()
{
	if(insertClient()){
		header('location: '. URL ."client/");
	} else {
		header('location: '. URL .  "error/");
	}	
}

function deleteClient()
{	
	$id = $_GET['id'];
	if (removeClient($id)){
		header('location: '. URL . "client/");
	}else {
		header('location: '. URL .  "error/");
	}
}

function updateClient()
{
	$id = $_GET['id'];
	render("client/update", array(
		'getclient' => getClient($id)));
}

function updateClientSave()
{
	$id = $_GET['id'];
	if(changeClientData($id)){
		header('location: '. URL . "client/");
	}else {
		header('location: '. URL .  "error/");
	}
}