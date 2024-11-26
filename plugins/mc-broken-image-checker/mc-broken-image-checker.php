<?php

/**
 * Plugin Name: Broken Image Checker
 * Description: Checks if the featured images exist and un-attaches them if they return a 404 error.
 * Version: 1.0
 * Author: Your Name
 */

// Ensure the file is being accessed through WordPress
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Check_Featured_Images_Plugin {
    public function __construct() {
        add_action('admin_menu', array($this, 'add_plugin_page'));
        add_action('admin_post_check_featured_images', array($this, 'check_and_unattach_featured_images'));
    }

    public function add_plugin_page() {
        add_menu_page(
            'Check Featured Images',
            'Check Featured Images',
            'manage_options',
            'check-featured-images',
            array($this, 'create_admin_page'),
            'dashicons-admin-tools',
            6
        );
    }

    public function create_admin_page() {
        ?>
        <div class="wrap">
            <h1>Check and Unattach Broken Featured Images</h1>
            <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                <input type="hidden" name="action" value="check_featured_images">
                <?php wp_nonce_field('check_featured_images_nonce'); ?>
                <p><input type="submit" class="button button-primary" value="Check Featured Images"></p>
            </form>
            <div id="check-featured-images-log">
                <?php $this->display_log(); ?>
            </div>
        </div>
        <?php
    }

    public function check_and_unattach_featured_images() {
        // Verify nonce for security
        if (!isset($_POST['_wpnonce']) || !wp_verify_nonce($_POST['_wpnonce'], 'check_featured_images_nonce')) {
            wp_die('Security check failed');
        }

        // Get all posts
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1
        );
        $posts = get_posts($args);

        $log = array();

        foreach ($posts as $post) {
            // Get the featured image ID
            $thumbnail_id = get_post_thumbnail_id($post->ID);

            if ($thumbnail_id) {
                // Get the URL of the featured image
                $thumbnail_url = wp_get_attachment_url($thumbnail_id);

                // Check if the image exists
                $response = wp_remote_head($thumbnail_url);

                if (is_wp_error($response) || wp_remote_retrieve_response_code($response) == 404) {
                    // Image doesn't exist, so unattach it
                    delete_post_thumbnail($post->ID);
                    $log[] = array('post_id' => $post->ID, 'status' => 'Image does not exist');
                } else {
                    $log[] = array('post_id' => $post->ID, 'status' => 'Image exists');
                }
            } else {
                $log[] = array('post_id' => $post->ID, 'status' => 'No featured image');
            }
        }

        update_option('check_featured_images_log', $log);

        // Redirect back to the plugin page
        wp_redirect(admin_url('admin.php?page=check-featured-images'));
        exit;
    }

    public function display_log() {
        $log = get_option('check_featured_images_log', array());

        if (!empty($log)) {
            echo '<h2>Log</h2>';
            echo '<table class="widefat fixed">';
            echo '<thead><tr><th>Post ID</th><th>Status</th></tr></thead>';
            echo '<tbody>';
            foreach ($log as $entry) {
                echo '<tr>';
                echo '<td>' . esc_html($entry['post_id']) . '</td>';
                echo '<td>' . esc_html($entry['status']) . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        }
    }
}

new Check_Featured_Images_Plugin();
