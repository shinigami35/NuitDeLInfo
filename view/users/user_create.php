<div id="pagination-centered">
	<h1>Création d'un nouvel utilisateur</h1>

<form action="<?php echo Router::url('users/user_create'); ?>"
	method="post">
	<?php echo $this->Form->input('login','Identifiant'); ?>
	<?php echo $this->Form->input('email','Adresse e-mail'); ?>
	<?php echo $this->Form->input('password','Password',array('type'=>'password')); ?>
	<div class="actions">
		<input type="submit" class="btn primary" value="Créer">
	</div>
	</div>
</form>
