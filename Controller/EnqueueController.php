<?php

use EnqueueController as GlobalEnqueueController;

class EnqueueController
{

    public static function init()
    {
        add_action('wp_enqueue_scripts', [__CLASS__, 'enqueueScript']);
    }

    public static function enqueueScript()
    {
        wp_enqueue_script('sm-smooth-script', 'https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.8.4/smooth-scrollbar.js', [], false, true);
    }
}

GlobalEnqueueController::init();
