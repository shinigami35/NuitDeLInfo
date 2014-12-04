

<div id="contact">
	<div>
		<br />
		<br />
		<br/>
		<br/>
		<br/>
		<p>Vous pouvez me contacter par téléphone au <b>06 42 93 71 05</b> ou bien via ce formulaire ou bien par email à cette adresse : <b>evasionparadisiaque @ hotmail.fr</b> . Je vous informe que les prises de rendez-vous se font uniquement par téléphone et non par email ni sur place.</p>


	</div>

	<div class="contactformulaire" >


		<form action="<?php echo Router::url('contact/send'); ?>" onSubmit="return validate()" method="post">
			<?php echo $this->Form->input('nom','Nom'); ?><br/>
			<span class="error-message"></span>

			<?php echo $this->Form->input('email','Email'); ?><br/>
			<span class="error-message"></span>

			<?php echo $this->Form->input('message','Message',array('type'=>'textarea')); ?><br/>
			<span class="error-message"></span><br/>


			<input class="myButton" id="envoyer" type="submit" class="btn primary" value="Envoyer">
		</form>
	</div>

</div>


