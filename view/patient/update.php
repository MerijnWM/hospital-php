<?php foreach($getpatient as $patient){ 	
	if ($patient['sex_description'] == "Male") {
			$male = 'checked="checked"';
		}elseif ($patient['sex_description']  == "Female") {
			$female = 'checked="checked"';
		}

	function echoSpecie($species, $patient)
	{
		foreach ($species as $specie) { 
			if($specie["species_description"] == $patient['species_description']){
				$checked = 'selected="selected"';
			}	
		 	echo "<option value='" . $specie['species_id'] . "'" . $checked . ">" . $specie['species_description'] . "</option>" ;
		 	$checked = ""; 
		} 
	}

	function echoClientName($clients, $patient)
	{
		foreach ($clients as $client) { 
			if($client["client_firstname"] == $patient['client_firstname']){
				$checked = 'selected="selected"';
			}	
		 	echo "<option value='" . $client['client_id'] . "'" . $checked . ">" . $client['client_firstname'] . "</option>" ;
		 	$checked = ""; 
		} 	
	}
?>
	<form action="<?=URL?>patient/updatePatientSave?id=<?= $patient['patient_id']; ?>" method="post">
		<label for="name">Naam</label>
		<input type="text" id="name" name="name" value="<?= $patient['patient_name']; ?>"><br>
		<label for="specie">Soort</label>	
		<select name="specie" > 
			<?= echoSpecie($species, $patient); ?>
		</select><br>
		<label for="client">Client</label>		 
		<select name="client"> 		
			<?= echoClientName($clients, $patient); ?>
		</select><br>	
		<label for="status">Status</label>
		<input type="text" id="status" name="status" value="<?= $patient['patient_status']; ?>"><br>
		<input type="radio" name="sex" value="1" <?= $female; ?> >Female</input> 
		<input type="radio" name="sex" value="2" <?= $male; ?> >Male</input><br>
		<br>	
		<input type="submit" id="save" value="Save">
	</form>
<?php } ?>