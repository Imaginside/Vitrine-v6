<hr>
<h1 class="red">Page Demo</h1>
<img src="<?php echo DIR_IMG ?>image.png">

<h3>Demande actuelle : </h3>
<pre>
	Target: <?php var_dump($match['target']); ?>
	Params: <?php var_dump($match['params']); ?>
	Name: 	<?php var_dump($match['name']); ?>
</pre>

<p><a href="<?php echo $router->generate('accueil'); ?>"><?php echo $router->generate('accueil'); ?></a></p>
<p><a href="<?php echo $router->generate('demo'); ?>">GET <?php echo $router->generate('demo'); ?></a></p>
<hr>