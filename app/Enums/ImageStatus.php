<?php

namespace App\Enums;


class ImageStatus
{
    const embed = 'embed';
    const image = 'image';
    const video = 'video';
    public static function getValues(): array
    {
        return [self::embed, self::image, self::video];
    }
}
