<?php

if (!function_exists('markdown_to_html')) {
    function markdown_to_html($markdown)
    {
        return app('parsedown')->text($markdown);
    }
}
