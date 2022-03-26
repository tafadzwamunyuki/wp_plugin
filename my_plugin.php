<?php
   /*
   Plugin Name: WordPress Interaction
   Plugin URI: http://tafadzwamunyuki.epizy.com
   description: >-
  a plugin to interact with WordPress API
   Version: 1.0
   Author: Tafadzwa Munyuki
   Author URI: http://tafadzwamunyuki.epizy.com
   License: GPL2
   */
   
   function awepop_add_view() {
   if(is_single()) {
      global $post;
      $current_views = get_post_meta($post->ID, "awepop_views", true);
      if(!isset($current_views) OR empty($current_views) OR !is_numeric($current_views) ) {
         $current_views = 0;
      }
      $new_views = $current_views + 1;
      update_post_meta($post->ID, "awepop_views", $new_views);
      return $new_views;
   }
}
   
?>