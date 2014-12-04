<?php
class Conf{
	
	static $debug = 0; 

	static $databases = array(

		'default' => array(			
			'host' => '127.0.0.1',
			'database' => 'nuit',
			'login' => 'adrien',
			'password' => 'adrien',
		)	
	);


}

Router::prefix('cockpit','admin');


Router::connect('','posts/index');
Router::connect('cockpit','cockpit/posts/index');
Router::connect('page/:slug-:id','pages/view/id:([0-9]+)/slug:([a-z0-9\-]+)');
Router::connect('blog/:slug-:id','posts/view/id:([0-9]+)/slug:([a-z0-9\-]+)');
Router::connect('blog/category/:slug','posts/category/slug:([a-z0-9\-]+)');
Router::connect('blog/*','posts/*');
