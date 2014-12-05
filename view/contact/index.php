

<div id="contact">
	<div>
		<br />
		<br />
		<br/>
		<br/>
		<br/>
		<p>Vous pouvez nous contactez afin d'avoir plus d'explication quant à notre projet.</p>


	</div>

	<div class="contactformulaire" >


		<form action="<?php echo Router::url('contact/send'); ?>" onSubmit="return validate()" method="post">
			<?php echo $this->Form->inputb('nom','Nom'); ?><br/>
			<span class="error-message"></span>

			<?php echo $this->Form->inputb('email','Email'); ?><br/>
			<span class="error-message"></span>

			<?php echo $this->Form->inputb('message','Message',array('type'=>'textarea')); ?><br/>
			<span class="error-message"></span><br/>


			<input class="myButton" id="envoyer" type="submit" class="button [tiny small large]" value="Envoyer">
		</form>
	</div>

</div>


