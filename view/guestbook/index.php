

<div class="contactformulaire" >





	<form action="<?php echo Router::url('guestbook/guestbook'); ?>" method="post">

		<?php echo $this->Form->input('nom','Nom'); ?>
		<span class="error-message"></span>

		<?php echo $this->Form->input('titre','Titre'); ?>
		<span class="error-message"></span>

		<?php echo $this->Form->input('message','Message',array('type'=>'textarea')); ?> <br/>
		<span class="error-message"></span>


		<input class="myButton" id="envoyer" type="submit" class="btn primary" value="Envoyer">


	</form>

</div>
<div class="guestbook">
	<div class="trait"></div>
	<?php foreach ($guestbooks as $k => $v): ?>
	<h3><?php echo $v->nom; ?>, <?php setlocale(LC_TIME, 'french'); echo strftime('Le %x', strtotime($v->date)); ?> </h3><br/>
	<h4><?php echo $v->titre; ?></h4>
	<p><?php echo $v->message; ?></p>
	<div class="trait"></div>
<?php endforeach ?>
	
	
</div>


