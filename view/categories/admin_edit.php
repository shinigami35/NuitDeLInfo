<div class="span8">
	<h1>Editer un catégorie</h1>


	<form action="<?php echo Router::url('admin/categories/edit/'.$id); ?>" method="post">
		<table class="bordered-table">
			<?php echo $this->Form->input('name','Titre'); ?>
			<?php echo $this->Form->input('slug','Url'); ?>
			<?php echo $this->Form->input('id','hidden'); ?>
		</table>
		<div class="actions">
			<input type="submit" class="btn primary" value="Envoyer">
		</div>
	</form>
</div>