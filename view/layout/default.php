<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title><?php echo isset($title_for_layout)?$title_for_layout:'Action in the World'; ?>
	</title>
	<link rel="stylesheet" href=<?php echo Router::webroot('css/foundation.min.css'); ?>>
	<link rel="stylesheet" href=<?php echo Router::webroot('css/perso.css'); ?>>
	<link rel="icon" type="image/png" href="<?php echo Router::webroot('img/icone.png'); ?>" />
	
	<script src="<?php echo Router::webroot('js/vendor/jquery.js'); ?>"></script>
	<script src="<?php echo Router::webroot('js/vendor/modernizr.js'); ?>"></script>

	<script src="<?php echo Router::webroot('js/foundation/foundation.js'); ?>"></script>
	<script src="<?php echo Router::webroot('js/foundation/foundation.orbit.js'); ?>"></script>
</head>
<body>
	<!-- Header -->
	<nav class="top-bar" data-topbar="" style="">
		<ul class="title-area">

			<li class="name">
				<h1>
					<a href="http://foundation.zurb.com/templates/realty.html#">
						Top Bar Title
					</a>
				</h1>
			</li>
			<li class="toggle-topbar menu-icon"><a href="http://foundation.zurb.com/templates/realty.html#"><span>menu</span></a></li>
		</ul>
		<!-- Menu -->
		<section class="top-bar-section">
			<ul class="right">
				<?php $pagesMenu = $this->request('Pages','getMenu'); ?>


				<li><a href="<?php echo Router::url('page/index-36'); ?>">Accueil</a></li>
				<li><a href="<?php echo Router::url('page/plan-1'); ?>">Plan d'accès</a></li>
				<li><a href="<?php echo Router::url('guestbook/index'); ?>">Livre d'Or</a></li>
				<li><a href="<?php echo Router::url('page/galerie-photos-2'); ?>">Galerie Photos</a></li>
				<li><a href="<?php echo Router::url('page/liens-partenaires-42'); ?>">Liens Partenaires</a></li>
				<li><a href="<?php echo Router::url('page/carte-cadeaux-5'); ?>">Carte Cadeau</a></li>
				<li><a href="<?php echo Router::url('page/offres-48'); ?>">Offre</a></li>
				<li><a href="<?php echo Router::url('contact/index'); ?>">Contact</a></li>
				<li><a href="<?php echo Router::url('people/index'); ?>">Contact</a></li>
				<?php if(!$this->Session->isLogged()){ ?>
				<li><a href="<?php echo Router::url('users/login'); ?>">Connexion</a></li>
				<?php }
				else
					{?>
				<li><a href="<?php echo Router::url('users/logout'); ?>">Déconnexion</a></li>
				<?php }?>

			</ul>
		</section>
	</nav>
	<!-- End header -->



	<!-- Page 
	<div class="row">
		<div class="large-12 hide-for-small">
			<div id="featured" data-orbit>
				<img src="<?php //echo Router::webroot('img/test.jpg'); ?>" alt="slide 1" />
				<img src="<?php// echo Router::webroot('img/test.jpg'); ?>" alt="slide 2" />
				<img src="<?php //echo Router::webroot('img/test.jpg'); ?>" alt="slide 3" />
			</div>
		</div>
	</div>-->

	<!-- End Carrousel-->

	<!-- Corps -->
	<div class="row">
		<div class="large-12 columns">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
	</div>

	<!-- Footer-->
	<footer class="row">
		<div class="large-12 columns"><hr>
			<div class="row">
				<div class="large-6 columns">
					<?php require('footer.php'); ?>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

</body>
<script>
$(document).foundation();

var doc = document.documentElement;
doc.setAttribute('data-useragent', navigator.userAgent);
</script>

</html>
