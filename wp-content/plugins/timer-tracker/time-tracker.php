<?php
/**
 * Plugin Name: Time Tracker
 * Description: Tracks the time a user spends on the site and displays it at the top.
 * Version: 0.1
 * Author: ternovyi
 */

function time_tracker_enqueue_scripts() {
    wp_enqueue_style('time-tracker-css', plugin_dir_url(__FILE__) . 'time-tracker.css');
    wp_enqueue_script('time-tracker-js', plugin_dir_url(__FILE__) . 'time-tracker.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'time_tracker_enqueue_scripts');

function time_tracker_display_timer() {
    echo '<div id="time-tracker" class="time-tracker">
        <p>Tiem spent on this site: <span id="time-tracker-display">0 seconds</span></p>
    </div>';
}

add_action('wp_body_open', 'time_tracker_display_timer');
