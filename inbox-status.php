<?php
/*
    Plugin Name: Inbox Status 
    Plugin URI: https://github.com/blobaugh/inbox-status
    Description: Easy widget and functions to show email counts in your theme (Like unread email)
    Version: 0.1
    Author: Ben Lobaugh
    Author URI: http://ben.lobaugh.net
*/

require_once( 'class.InboxStatusImap.php' );
require_once( 'class.EmailWidget.php' );


class inbox_status_unread_shortcode {
    public function __construct() {
        add_shortcode('inbox-status-unread', array($this, 'shortcode'));
    }
    
    public function shortcode(){
        return "Testing";
    }
    
}
