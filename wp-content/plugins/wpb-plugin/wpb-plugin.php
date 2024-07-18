<?php
/**
* Plugin Name: test-plugin
* Description: Follow us.
* Version: 0.1
* Author: ternovyi
**/
function wpb_follow_us($content) {
 
// Only do this when a single post is displayed
if ( is_single() ) { 
        $content .= '<p class="follow-us">If you liked this post, then please follow us on <a href="http://twitter.com" title="Twitter" target="_blank" rel="nofollow">Twitter</a> and <a href="https://www.facebook.com" title="Facebook" target="_blank" rel="nofollow">Facebook</a>.</p>';
}

return $content; 
}

add_filter('the_content', 'wpb_follow_us'); 
