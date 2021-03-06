<div>
	<h2>Search</h2>

	<form action="<?php echo Router::url('admin/people/search'); ?>" method="post" data-abide>
		<?php echo $this->Form->inputb('nom','Nom'); ?>
		<?php echo $this->Form->inputb('prenom','Prénom'); ?>
		<input type="submit" role="button" class="primary btn" value="OK">
	</div>
</form>
</div>

<div>
	<h2>People</h2>
	<hr>
	<div>
		<h4>Nombre de personnes dans le camp : <?php echo $total; ?> personnes</h4>
	</div>
	<a href="<?php echo Router::url('admin/people/add'); ?>">Ajouter une personne</a>
	<hr>
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
				<th>Action</th>
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
				<td><a
					onclick="return confirm('Voulez vous vraiment supprimer cet utilisateur'); "
					href="<?php echo Router::url('admin/people/delete/'.$v->id); ?>">Supprimer</a>
				</td>
		<?php endforeach ?>
		</tbody>
	</table>
	<div>
		<ul class="pagination">
			<?php for($i=1; $i <= $page; $i++): ?>
			<li <?php if($i==$this->request->page) echo 'class="active"'; ?>><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
		<?php endfor; ?>
	</ul>
	</div>
</div>