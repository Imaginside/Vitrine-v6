<hr>

<h1 class="red">Page Accueil</h1>
<img src="<?php echo DIR_IMG ?>image.png">

<h3>Demande actuelle : </h3>
<pre>
	Target: <?php var_dump($match['target']); ?>
	Params: <?php var_dump($match['params']); ?>
	Name: 	<?php var_dump($match['name']); ?>
</pre>

<p><a href="<?php echo $router->generate('accueil'); ?>"><?php echo $router->generate('accueil'); ?></a></p>
<p><a href="<?php echo $router->generate('demo'); ?>">GET <?php echo $router->generate('demo'); ?></a></p>

<?php
foreach($Articles as $article)
{
	print $article . '<br>';
}
?>

<!-- <h3>Exemples de requêtes : </h3>
<?php /*
<p></p>
	<a href="<?php echo $router->generate('home'); ?>">GET <?php echo $router->generate('home'); ?></a>
</p>

<p>
	<a href="<?php echo $router->generate('contact'); ?>">GET <?php echo $router->generate('contact'); ?></a>
</p>

<p>
	<a href="<?php echo $router->generate('users_show', array('id' => 5)); ?>">GET <?php echo $router->generate('users_show', array('id' => 5)); ?></a>
</p>

<p>
	<a href="<?php echo $router->generate('actualites_show', array('id' => 5)); ?>">GET <?php echo $router->generate('actualites_show', array('id' => 5)); ?></a>
</p>

<p>
	<form action="<?php echo $router->generate('users_do', array('id' => 10, 'action' => 'update')); ?>" method="post">
		<button type="submit"><?php echo $router->generate('users_do', array('id' => 10, 'action' => 'update')); ?></button>
	</form>
</p>

<p>
	<form action="<?php echo $router->generate('users_do', array('id' => 10, 'action' => 'delete')); ?>" method="post">
		<button type="submit"><?php echo $router->generate('users_do', array('id' => 10, 'action' => 'delete')); ?></button>
	</form>
</p> */ ?> -->
<hr>