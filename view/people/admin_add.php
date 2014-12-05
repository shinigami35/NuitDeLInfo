<form action="<?php echo Router::url('admin/people/add'); ?>" method="post" data-abide>
		<?php echo $this->Form->inputb('Nom','Nom'); ?>
		<?php echo $this->Form->inputb('Prénom','Prénom'); ?>
		<?php echo $this->Form->inputb('Age','Age'); ?>
		<?php echo $this->Form->inputb('Date','Date de naissance'); ?>
		<?php echo $this->Form->inputb('Pays','Pays de départ'); ?>
		<?php echo $this->Form->inputb('Sexe','Sexe'); ?>
		<?php echo $this->Form->inputb('Ville','Ville d\'origine'); ?>
		<?php echo $this->Form->inputb('Commentaire','Commentaires'); ?>
		<input type="submit" role="button" class="primary btn" value="OK">
	</div>
</form>