<?php foreach($getclient as $client){?>
	<form action="<?=URL?>client/updateClientSave?id=<?=  $client["client_id"]; ?>" method="post">
		<label for="firstname">Firstname</label>
		<input type="text" id="firstname" name="firstname" value="<?= $client["client_firstname"]; ?>"><br>
		<label for="lastname">Lastname</label>
		<input type="text" id="lastname" name="lastname" value="<?= $client["client_lastname"]; ?>"><br>
		<label for="phone">Phone</label>
		<input type="text" id="phone" name="phone" value="<?= $client["client_phone"]; ?>"><br>
		<label for="email">Email</label>
		<input type="text" id="email" name="email" value="<?= $client["client_email"]; ?>"><br>	
		<input type="submit" id="save" value="Save">
	</form>
<?php } ?>
