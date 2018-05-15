<h2>Species</h2>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Description</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	</tbody>
	<?php foreach($species as $specie){ ?>
		<tr>
			<td><?= $specie["species_id"]?></td>
			<td><?= $specie["species_description"]?></td>
			<td class="center"><a href="<?= URL ?>Species/updateSpecie?id=<?= $specie['species_id']; ?>">edit</a></td>
			<td class="center"><a href="<?= URL ?>Species/deleteSpecie?id=<?= $specie['species_id']; ?>">delete</a></td>
		</tr>
		<?php } ?>		
	</tbody>
</table>
	<p><a href="<?= URL ?>Species/createSpecie">Create</a></p>
	
