<?php

namespace App\Helpers;
use DateTime;
use App\Models\Content;

if (!function_exists('contentName')) {
    function contentName($name)
    {
        $content = Content::where('slug', 'like', '%' . $name . '%')->where('status_enabled', true)->first();
        if ($content) {
            $result = $content->content;
        } else {
            return "";
        }
        return $result;
    }
}
if (!function_exists('contentTitle')) {
    function contentTitle($name)
    {
        $content = Content::where('subtitle', 'like', '%' . $name . '%')->where('status_enabled', true)->first();
        if ($content) {
            $result = $content->title;
        } else {
            return "";
        }
        return $result;
    }
}
if (!function_exists('content')) {
    function content($name)
    {
        $content = Content::where('slug', 'like', '%' . $name . '%')->with('category')->where('status_enabled', true)->whereHas('category', function ($query) {
            $query->where('category', 'general');
        })->orderBy('order')->get();
        if ($content) {
            $result = $content;
        } else {
            return [];
        }
        return $result;
    }
}
if (!function_exists('convertDate')) {
    function convertDate($date): string
    {
        if (!$date instanceof DateTime) {
            $date = new DateTime($date);
        }

        $indonesianDate = $date->format('d F Y');
        $indonesianDate = str_replace([
            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        ], [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ], $indonesianDate);

        return $indonesianDate;
    }
}

