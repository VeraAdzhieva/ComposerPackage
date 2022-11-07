<?php

declare(strict_types = 1);

namespace VeraAdzhieva\ComposerPackage;

class Calculate
{
    public function getLength(string $s): int
    {
        return strlen($s);
    }
}