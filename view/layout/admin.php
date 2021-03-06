<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>Administration</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="<?php echo Router::webroot('css/bootstrap.min.css'); ?>">
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo Router::url('admin/posts/index'); ?>">Administration</a></li>
				<li><a href="<?php echo Router::url('admin/posts/index'); ?>">Articles</a></li>
				<li><a href="<?php echo Router::url('admin/categories/index'); ?>">Catégories</a></li>
				<li><a href="<?php echo Router::url('admin/pages/index'); ?>">Pages</a></li>
				<li><a href="<?php echo Router::url('admin/users/index'); ?>">Liste Membre</a></li>
				<li><a href="<?php echo Router::url('admin/people/index'); ?>">Liste des gens</a></li>
				<li><a href="<?php echo Router::url(); ?>">Voir le site</a></li>
				<li><a href="<?php echo Router::url('users/logout'); ?>">Se déconnecter</a></li>
			</ul>
			
		</ul>
	</div>
</nav>



<div class="bodyperso">
	<!-- Corps -->
	<section class="container">
		<div class="row">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
			
		</div>
	</div>
</section>
</div>
<!-- End Footer -->
</div>

</body>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script type="text/javascript"
src="<?php echo Router::webroot('js/datepicker-fr.js'); ?>"></script>
<script>
$(function() {
	$( "#datepicker" ).datepicker();
});
</script>
<script type="text/javascript">
$(function(){
	$.datepicker.setDefaults( $.datepicker.regional['fr'] ); 
	$( ".datepicker" ).datepicker({
		dateFormat : 'yy-mm-dd'
	});
})
</script>
</html>
