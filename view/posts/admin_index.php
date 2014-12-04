<div class="post">
	<h1><?php echo $total; ?> Articles</h1>
</div>
<div id"ajout" style="padding-bottom: 20px">
	<a href="<?php echo Router::url('admin/posts/edit'); ?>" class="primary btn">Ajouter un article</a>
</div>

<table class="table table-bordered table-striped table-condensed">
	<thead>
		<tr>
			<th>ID</th>
			<th>En ligne ?</th>
			<th>Titre</th>
			<th>Catégorie</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($posts as $k => $v): ?>
			<tr>
				<td><?php echo $v->id; ?></td>
				<td><span class="label <?php echo ($v->online==1)?'success':'error'; ?>"><?php echo ($v->online==1)?'En ligne':'Hors ligne'; ?></span></td>
				<td><?php echo $v->name; ?></td>
				<td><?php echo $v->catname; ?></td>
				<td>
					<a href="<?php echo Router::url('admin/posts/edit/'.$v->id); ?>">Editer</a>
					<a onclick="return confirm('Voulez vous vraiment supprimer ce contenu'); " href="<?php echo Router::url('admin/posts/delete/'.$v->id); ?>">Supprimer</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>


<div >
  <ul class="pagination">
  <?php for($i=1; $i <= $page; $i++): ?>
    <li <?php if($i==$this->request->page) echo 'class="active"'; ?>><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
  <?php endfor; ?>
  </ul>
</div>

