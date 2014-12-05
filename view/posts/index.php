<div>
	<h2>Help Syrie</h2>
</div>

<?php foreach ($posts as $k => $v): ?>
	<h2><?php echo $v->name; ?></h2>
	<?php echo $v->content; ?>
	<p><a href="<?php echo Router::url('posts/view/').$v->id; ?>">Lire la suite &rarr;</a></p>
<?php endforeach ?>

<div>
	<ul class="pagination">
		<?php for($i=1; $i <= $page; $i++): ?>
		<li <?php if($i==$this->request->page) echo 'class="active"'; ?>><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
	<?php endfor; ?>
</ul>
</div>