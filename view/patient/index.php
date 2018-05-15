<?php 
	$ordertype = $_GET['order'];
	if ($ordertype == "ASC") {
		 $ordertype = "DESC";
	}else{
		 $ordertype = "ASC";
	}
?>
<h2>Patiënts</h2>
<table>
	<thead>
		<tr>
			<th><a href="<?= URL ?>Patient/orderPatients?sort=patient_name&order=<?= $ordertype; ?>">Name</a></th>						
			<th><a href="<?= URL ?>Patient/orderPatients?sort=species_description&order=<?= $ordertype; ?>">Species</a></th>
			<th><a href="<?= URL ?>Patient/orderPatients?sort=patient_status&order=<?= $ordertype; ?>">Status</a></th>
			<th><a href="<?= URL ?>Patient/orderPatients?sort=client_firstname&order=<?= $ordertype; ?>">Client</a></th>
			<th><a href="<?= URL ?>Patient/orderPatients?sort=sex_description&order=<?= $ordertype; ?>">Sex</a></th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	</tbody>
	<?php foreach($patients as $patient) { ?>
		<tr>
			<td><?= $patient['patient_name']; ?></td>			
			<td><?= $patient['species_description']; ?></td>
			<td><?= $patient['patient_status']; ?></td>
			<td><?= $patient['client_firstname']; ?></td> 
			<td><?= $patient['sex_description']; ?></td> 
			<td class="center"><a href="<?= URL ?>Patient/updatePatient?id=<?= $patient['patient_id']; ?>">edit</a></td>
			<td class="center"><a href="<?= URL ?>Patient/deletePatient?id=<?= $patient["patient_id"]; ?>">delete</a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<p><a href="<?= URL ?>Patient/createPatient">Create</a></p>
	
