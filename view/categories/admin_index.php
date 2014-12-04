<div class="span8">
	<h1>Gérer les catégories</h1>

	<table class="table table-bordered table-striped table-condensed">
		<thead>
			<tr>
				<th>ID</th>
				<th>Titre</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($categories as $k => $v): ?>
			<tr>
				<td><?php echo $v->id; ?></td>
				<td><?php echo $v->name; ?></td>
				<td>
					<a href="<?php echo Router::url('admin/categories/edit/'.$v->id); ?>">Editer</a>
					<a onclick="return confirm('Voulez vous vraiment supprimer ce contenu'); " href="<?php echo Router::url('admin/categories/delete/'.$v->id); ?>">Supprimer</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<div  style="padding-bottom: 20px">
	<a href="<?php echo Router::url('admin/categories/edit'); ?>" class="primary btn"  style="padding-bottom: 20px">Ajouter une Catégorie</a>
</div>
</div>

