<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr"> 
    <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    <title><?php echo isset($title_for_layout)?$title_for_layout:'Administration'; ?></title> 
    <link rel="stylesheet" href=<?php echo Router::webroot('css/default.css'); ?>>
    </head> 
    <body>       
      
            <?php echo $this->Session->flash(); ?>
        	<?php echo $content_for_layout; ?>
         
    </body> 
</html>