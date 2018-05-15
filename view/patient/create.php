<form action="<?=URL?>patient/savePatient" method="post">
	<label for="name">Naam</label>
	<input type="text" id="name" name="name"><br>
	<label for="specie">Soort</label>	
	<select name="specie" > 
		<?php foreach ($species as $specie) { ?>	
		 	<option value="<?= $specie['species_id']?>"><?= $specie["species_description"]; ?></option>	 	
		<?php } ?>
	</select><br>	
	<label for="client">Client</label>		 
	<select name="client"> 		
		<?php foreach ($clients as $client) { ?>	
		 	<option value="<?= $client['client_id']?>"><?= $client["client_firstname"]; ?></option>	 	
		<?php } ?>
	</select><br>	
	<label for="status">Status</label>
	<input type="text" id="status" name="status"><br>	
	<input type="radio" name="sex" value="1">Female</input> 
	<input type="radio" name="sex" value="2">Male</input><br>
	<input type="submit" id="save" value="Save">	
</form>