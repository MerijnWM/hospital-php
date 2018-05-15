<?php foreach($getspecies as $specie){?>
	<form action="<?=URL?>species/updateSpecieSave?id=<?= $specie["species_id"]; ?>" method="post">
		<label for="specie">Specie</label>
		<input type="text" id="specie" name="specie" value="<?= $specie["species_description"]; ?>"><br>	
		<input type="submit" id="save" value="Save">
	</form>
<?php } ?>