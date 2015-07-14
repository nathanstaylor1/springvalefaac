<div id ="feed" class = "hidden-xs hidden-sm">
	<?php foreach($archive as $a):?>
		<h5><a href="<?php echo $a->url?>"><?php echo $a->title ?></a></h2>
	<?php endforeach;?>
</div>
<div id = "blog">
	<div class="post">

		<h2><?php echo $p->title ?></h2>

		<div class="date"><?php echo date('d F Y', $p->date)?></div>

		<?php echo $p->body?>

	</div>	
	<a href="<?php echo site_url() ?>blog/"> Back </a>
</div>
