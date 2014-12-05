<br>
<table class="table table-bordered table-striped table-condensed">
	<thead>
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Age</th>
			<th>Date</th>
			<th>Pays de départ</th>
			<th>Sexe</th>
			<th>Ville d'origine</th>
			<th>Commentaire</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($people as $k => $v): ?>
			<tr>
				<td><?php echo $v->Nom; ?></td>
				<td><?php echo $v->Prénom; ?></td>
				<td><?php echo $v->Age; ?></td>
				<td><?php echo $v->Date; ?></td>
				<td><?php echo $v->Pays; ?></td>
				<td><?php echo $v->Sexe; ?></td>
				<td><?php echo $v->Ville; ?></td>
				<td><?php echo $v->Commentaire; ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>