<?php

namespace Revenexx\Enums;

use JsonSerializable;

class VcsTriggerMode implements JsonSerializable
{
    private static VcsTriggerMode $PUSH;
    private static VcsTriggerMode $TAG;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function PUSH(): VcsTriggerMode
    {
        if (!isset(self::$PUSH)) {
            self::$PUSH = new VcsTriggerMode('push');
        }
        return self::$PUSH;
    }
    public static function TAG(): VcsTriggerMode
    {
        if (!isset(self::$TAG)) {
            self::$TAG = new VcsTriggerMode('tag');
        }
        return self::$TAG;
    }
}
