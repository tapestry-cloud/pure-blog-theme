<?php

if (!function_exists('blog_tag_list')) {
    function blog_tag_list($tags) {
        if (is_null($tags)) {
            return null;
        }

        $tmp = [];
        foreach ($tags as $tag) {
            array_push($tmp, '<a href="' . url('blog/tags/' . str_slug($tag)) . '">' . $tag . '</a>');
        }
        if (count($tmp) === 2) {
            return implode(' &amp; ', $tmp);
        }
        return implode(', ', $tmp);
    }
}