
<h2>Connexion des membres/staff</h2>

<form action="<?php echo Router::url('users/login'); ?>" method="post" data-abide>
	<?php echo $this->Form->input('login','Identifiant'); ?>
	<?php echo $this->Form->input('password','Mot de passe',array('type'=>'password')); ?>
	<div class="actions">
		<input type="submit" role="button" tabindex="0" class="button" value="Se connecter">
	</div>
</div>
</form>

