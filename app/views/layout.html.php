<!DOCTYPE html>
<html>
<head>
	<title><?php echo isset($title) ? _h($title) . " - " . config('blog.title') : config('blog.title') ?></title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />

	<link rel="alternate" type="application/rss+xml" title="<?php echo config('blog.title')?>  Feed" href="<?php echo site_url()?>rss" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet/less" type="text/css" href="<?php echo site_url() ?>assets/css/style.less" />

	<link rel="shortcut icon" href="<?php echo site_url() ?>assets/media/favicon/favicon.ico" type="image/x-icon"/>

	<script src="<?php echo site_url() ?>assets/js/less.min.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type='text/javascript' src="<?php echo site_url() ?>assets/js/script.js"></script>
	
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>

  	<?php include 'navbar.php';?>

	<section id="content">

		<?php echo content()?>

	</section>

	<?php include 'footer.php';?>

</body>
</html>

