<div id ="feed" class = "hidden-xs hidden-sm">
	<?php foreach($archive as $a):?>
		<h5><a href="<?php echo $a->url?>"><?php echo $a->title ?></a></h2>
	<?php endforeach;?>
</div>
<div id = "blog">
	<div class = "container-fluid">
		<?php foreach($posts as $p):?>
			<div class="post">
				<h2><a href="<?php echo $p->url?>"><?php echo $p->title ?></a></h2>

				<div class="date"><?php echo date('d F Y', $p->date)?></div>

				<?php echo $p->body?>

			</div>
		<?php endforeach;?>

		<?php if ($has_pagination['prev']):?>
			<a href="?page=<?php echo $page-1?>" class="pagination-arrow newer link-button">Newer</a>
		<?php endif;?>

		<?php if ($has_pagination['next']):?>
			<a href="?page=<?php echo $page+1?>" class="pagination-arrow older link-button">Older</a>
		<?php endif;?>
	</div>
</div>