<div class="span8">
	<h1>Liste des utilisateurs</h1>
	

	<table class="table table-bordered table-striped table-condensed">
		<thead>
			<tr>
				<th>ID</th>
				<th>nom</th>
				<th>merssage</th>
				<th>Rprenomole</th>
			</tr>
		</thead>
		<tbody>
			/<?php foreach ($guestbooks as $k => $v): ?>
			<tr>
				<td><?php echo $v->id; ?></td>
				<td><?php echo $v->nom; ?></td>
				<td><?php echo $v->message; ?></td>
				<td><?php echo $v->prenom; ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
</div>