<div class="span8">
	<h3>Liste des utilisateurs</h3>
	

	<table class="table table-bordered table-striped table-condensed">
		<thead>
			<tr>
				<th>ID</th>
				<th>Login</th>
				<th>e-mail</th>
				<th>Role</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $k => $v): ?>
			<tr>
				<td><?php echo $v->id; ?></td>
				<td><?php echo $v->login; ?></td>
				<td><?php echo $v->email; ?></td>
				<td><?php echo $v->role; ?></td>
				<td><a
					onclick="return confirm('Voulez vous vraiment supprimer cet utilisateur'); "
					href="<?php echo Router::url('users/user_delete/'.$v->id); ?>">Supprimer</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<a  href="<?php echo Router::url("users/user_create"); ?>">Ajouter un
				utilisateur</a>
		</p>
</div>