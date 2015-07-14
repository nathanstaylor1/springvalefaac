<?php

use dflydev\markdown\MarkdownParser;
use \Suin\RSSWriter\Feed;
use \Suin\RSSWriter\Channel;
use \Suin\RSSWriter\Item;

date_default_timezone_set('Australia/Melbourne');

/* General Blog Functions */

function get_post_names(){

	static $_cache = array();

	if(empty($_cache)){

		// Get the names of all the
		// posts (newest first):

		$_cache = array_reverse(glob('posts/*.md'));
	}

	return $_cache;
}

function get_posts($page = 1, $perpage = 0){

	if($perpage == 0){
		$perpage = config('posts.perpage');
	}

	$posts = get_post_names();
	$totalposts = count($posts);
	// Extract a specific page with results
	//$posts = array_slice($posts, ($page-1) * $perpage, $perpage);

	$tmp = array();
	$count = 0;
	$buffer = ($page-1) * $perpage;


	$today = time();
	// Create a new instance of the markdown parser
	$md = new MarkdownParser();
	
	foreach($posts as $k=>$v){

		if ( $count < $perpage ){

			$post = new stdClass;

			// Extract the date
			$arr = explode('_', $v);
			$post->date = strtotime(str_replace('posts/','',$arr[0]));
			$posttime = date('U', $post->date);

			// The post URL
			$post->url = site_url().date('Y/m', $post->date).'/'.str_replace('.md','',$arr[1]);

			// Get the contents and convert it to HTML
			$content = $md->transformMarkdown(file_get_contents($v));

			// Extract the title and body
			$arr = explode('</h1>', $content);
			$post->title = str_replace('<h1>','',$arr[0]);
			$post->body = $arr[1];

			if ( $perpage == 1 || $today >= $posttime && $posttime != 0 ){

				if ( $buffer == 0){
					$tmp[] = $post;
					$count = $count + 1;
				} else {
					$buffer = $buffer - 1;
				}

			}
		}

	}

	return $tmp;
}

// Find post by year, month and name
function find_post($year, $month, $name){

	foreach(get_post_names() as $index => $v){

		if( strpos($v, "$year-$month") !== false && strpos($v, $name.'.md') !== false){

			// Use the get_posts method to return
			// a properly parsed object

			$arr = get_posts($index+1,1);
			return $arr[0];
		}
	}

	return false;
}

// Helper function to determine whether
// to show the pagination buttons
function has_pagination($page = 1){
	$total = count(get_post_names());

	return array(
		'prev'=> $page > 1,
		'next'=> $total > $page*config('posts.perpage')
	);
}

// The not found error
function not_found(){
	error(404, render('404'));
}

// Turn an array of posts into an RSS feed
function generate_rss($posts){
	
	$feed = new Feed();
	$channel = new Channel();
	
	$channel
		->appendTo($feed);

	foreach($posts as $p){
		
		$item = new Item();
		$item
			->title($p->title)
			->url($p->url)
			->appendTo($channel);
	}
	
	echo $feed;
}

// Turn an array of posts into a JSON
function generate_json($posts){
	return json_encode($posts);
}
