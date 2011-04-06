<?php // Alter expiry lenght on feeds (set in seconds)
add_filter( 'wp_feed_cache_transient_lifetime', create_function('$a', 'return 480;') ); 
?>
