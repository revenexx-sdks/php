<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Target implements JsonSerializable
{
    private static Target $ORGANIZATIONS;

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

    public static function ORGANIZATIONS(): Target
    {
        if (!isset(self::$ORGANIZATIONS)) {
            self::$ORGANIZATIONS = new Target('organizations');
        }
        return self::$ORGANIZATIONS;
    }
}