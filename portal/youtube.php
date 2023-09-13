<?php 
//store the URL into a variable
$url = 'https://www.youtube.com/watch?v=kUMe1FH4CHE';
  
//extract the ID
preg_match(
        '/[\?\&]v=([^\?\&]+)/',
        $url,
        $matches
    );
  
//the ID of the YouTube URL: eLl7Y29eC7o
$id = $matches[1];
  
//set a custom width and height
$width = '640';
$height = '360';
  
//echo the embed code. You can even wrap it in a class
echo '<iframe width="' .$width. '" height="'.$height.'" src="//www.youtube.com/embed/'.$id.'" frameborder="0" allowfullscreen></iframe>';
?>