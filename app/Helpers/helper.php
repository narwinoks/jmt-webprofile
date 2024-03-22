<?php

namespace App\Helpers;

use App\Models\Content;

if (!function_exists('contentName')) {
    function contentName($name)
    {
        $content = Content::where('slug', $name)->first();
        if ($content) {
            $result = $content->content;
        } else {
            return "";
        }
        return $result;
    }
}
