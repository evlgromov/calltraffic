<?php

namespace App\Services;

class TransformationService
{
    public function transformStringToNumber(string $string): int
    {
        return hexdec($string);
    }
}
