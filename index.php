<?php

require 'vendor/autoload.php';
require 'app/includes/dispatch.php';
require 'app/includes/functions.php';

// Load the configuration file
config('source', 'app/config.ini');


//STANDARD routing
get('/index', function () {	

	$archive = get_posts(1, 3);
	render('frontpage', array(
		'title' => "Home",
		'archive' => $archive
	));

});
	//locations
get('/locations', function () {	render('locations', array('title' => "Locations"));});
	get('/locations/springvale', function () {render('locations/springvale', array('title' => "Springvale"));});
	get('/locations/lynbrook', function () {render('locations/lynbrook', array('title' => "Lynbrook"));});
	//conditions
get('/conditions', function () { render('conditions', array('title' => "Common Conditions"));});
	get('/conditions/diabetes', function () { render('conditions/diabetes', array('title' => "Diabetes"));});
	get('/conditions/flat', function () { render('conditions/flat', array('title' => "Flat feet"));});
	get('/conditions/heel', function () { render('conditions/heel', array('title' => "Heel pain"));});
	get('/conditions/knee', function () { render('conditions/knee', array('title' => "Knee pain"));});
	get('/conditions/shin', function () { render('conditions/shin', array('title' => "Shin pain"));});
	get('/conditions/skin', function () { render('conditions/skin', array('title' => "Skin and Nail care"));});
get('/services', function () {	render('services', array('title' => "Services"));});
get('/booking', function () {	render('bookings', array('title' => "Bookings"));});
get('/contact', function () {	render('contact', array('title' => "Contact"));});
	
//CONTACT FORM

	post('/contact/mail', function () {	

		function test_input($data) {
		  $data = strip_tags($data);
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

		$name = test_input($_POST['name']);
		$email = test_input($_POST['email']);
		$phone = preg_replace("/[^0-9]/", '', test_input($_POST['phone']));
		$message = test_input($_POST['message']);
				
		//validation //
		$error = "";

		$nameErr = " - Name is required. <br>";
		$contactErr = " - A valid email or phone number is required. <br>";
		$messageErr = " - Please write a message. <br>";

		$nameInputErr = " - Name must only contain letters and whitespace. <br>";
		$emailInputErr = " - Must ba a valid email address. <br>";
		$phoneInputErr = " - Must ba a valid phone number. <br>";

		if (empty($name)){ 
			$error .= $nameErr;
		} elseif ( !preg_match("/^[a-zA-Z ]*$/",$name) ){
			$error .= $nameInputErr;
		}

		if (empty($email) && empty($phone)){ 
			$error .= $contactErr;
		} else {
			if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
				$error .= $emailInputErr;	
			}
			if (!empty($phone) && ( strlen($phone) < 8 || strlen($phone) > 12 ) ) {
				$error .= $phoneInputErr;	
			}
		}

		if (empty($message)){ 
			$error .= $messageErr;
		}

		//response
		if ($error === ""){
			$formcontent="--  Message from website contact form:  -- \n \n　From: $name \n　Email: $email \n　Phone: $phone \n \n　Message: \n \n $message \n \n ";
			$recipient = "nathanstaylor1@gmail.com";
			$subject = "Website contact form message from: $name";
			$mailheader = "From: $email \r\n";
			//mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
			render('thankyou');
		} else {
			render('contact', array('title' => "Contact",
			 'error' => $error,
			 'name' => $name,
			 'email' => $email,
			 'phone' => $phone,
			 'message' => $message,
			 ));
		}
	});




//BLOG ROUTING

// The front page of the blog.
// This will match the /blog url
get('/blog', function () {

	$page = from($_GET, 'page');
	$page = $page ? (int)$page : 1;
	
	$posts = get_posts($page);

	$archive = get_posts(1, 30);
	
	if(empty($posts) || $page < 1){
		// a non-existing page
		not_found();
	}
	
    render('blogmain',array(
    	'page' => $page,
		'posts' => $posts,
		'archive' => $archive,
		'has_pagination' => has_pagination($page)
	));
});

// The post page
get('/:year/:month/:name',function($year, $month, $name){

	$post = find_post($year, $month, $name);

	if(!$post){
		not_found();
	}

	$archive = get_posts(1, 10);

	render('blogpost',array(
		'title' => $post->title .' ⋅ ' . config('blog.title'),
		'p' => $post,
		'archive' => $archive
	));
});

// The JSON API
get('/api/json',function(){

	header('Content-type: application/json');

	// Print the 10 latest posts as JSON
	echo generate_json(get_posts(1, 10));
});

// Show the RSS feed
get('/blog/rss30',function(){
	header('Content-Type: application/rss+xml');
	echo generate_rss(get_posts(1, 30));
});
get('/blog/rss5',function(){
	header('Content-Type: application/rss+xml');
	echo generate_rss(get_posts(1, 5));
});


// If we get here, it means that
// nothing has been matched above

get('.*',function(){
	not_found();
});

// Serve the blog
dispatch();
