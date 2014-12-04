<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo isset($title_for_layout)?$title_for_layout:'Mon site'; ?>
	</title>
	<link rel="stylesheet"
	href=<?php echo Router::webroot('css/default.css'); ?>>
</head>
<body>

	<div class="container">
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<h3>
						<a href="#">Mon site</a>
					</h3>

					

				</div>
			</div>
		</div>
		<ul id="menu">
			<?php $pagesMenu = $this->request('Pages','getMenu'); ?>
			<?php foreach($pagesMenu as $p): ?>
			<li><a
				href="<?php echo Router::url('pages/view/id:'.$p->id.'/slug:'.$p->slug); ?>"
				title="<?php echo $p->name; ?>"><?php echo $p->name; ?> </a></li>
			<?php endforeach; ?>
			<li><a href="<?php echo Router::url('posts/index'); ?>">Actualité</a>
			</li>
			<li><a href="<?php echo Router::url('users/index'); ?>">Membres</a></li>
		</ul>

	</div>
	<div class="container" style="padding-top: 60px;">
		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
	</div>