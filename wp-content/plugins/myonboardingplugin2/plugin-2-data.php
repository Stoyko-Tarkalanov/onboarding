<?php
   /*
   Plugin Name: Second Custom Plugin
   Plugin URI: 
   description: My second wordpress plugin 
   Version: 1.2
   Author: SST
   Author URI: None
   License: GPL2
   */

    function add_div_element ($content) {
        // $div_data = '<di class="entry-content">' . '<p>' . 'AAAAAAAAAAAAAAAA' . '</p>' . '</div>';
        $div_data = '<div></div>';

        return $content . $div_data; 
    } 

	add_filter('the_content', 'add_div_element');

