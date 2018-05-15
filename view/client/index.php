<h2>Client</h2>
<table>
	<thead>
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Phone</th>
			<th>Email</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	</tbody>
		<?php foreach($clients as $client){?>
			<tr>				
				<td><?= $client["client_firstname"] ?></td>
				<td><?= $client["client_lastname"] ?></td>
				<td><?= $client["client_phone"] ?></td>
				<td><?= $client["client_email"] ?></td>
				<td class="center"><a href="<?= URL ?>client/updateClient?id=<?= $client['client_id']; ?>">edit</a></td>
				<td class="center"><a href="<?= URL ?>client/deleteClient?id=<?= $client['client_id']; ?>">delete</a></td>
			</tr>			
		<?php } ?>	
	</tbody>
</table>
	<p><a href="<?= URL ?>client/createClient">Create</a></p>
	
