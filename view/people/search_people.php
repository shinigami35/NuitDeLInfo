
<h2>Search</h2>

<form action="<?php echo Router::url('people/search_people'); ?>" method="post" data-abide>
	<?php echo $this->Form->input('Nom','Identifiant'); ?>
	<?php echo $this->Form->input('Prenom','Mot de passe'); ?>
	<div class="actions">
		<input type="submit" role="button" tabindex="0" class="button" value="OK">
	</div>
</div>
</form>

