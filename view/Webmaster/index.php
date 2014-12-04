<div id="contact">
	<div>
		<br />
		<br />
		<h3>Merci de précisez le problème rencontré</h3>


	</div>

	<div class="contactformulaire" >


		<form action="<?php echo Router::url('Webmaster/send'); ?>" method="post">
			<?php echo $this->Form->input('nom','Nom'); ?><br/>
			<span class="error-message"></span>

			<?php echo $this->Form->input('email','Email'); ?><br/>
			<span class="error-message"></span>

			<?php echo $this->Form->input('probleme','Problème'); ?><br/>
			<span class="error-message"></span>

			<?php echo $this->Form->input('message','Message',array('type'=>'textarea')); ?><br/>
			<span class="error-message"></span><br/>


			<input class="myButton" id="envoyer" type="submit" class="btn primary" value="Envoyer">
		</form>
	</div>

</div>


