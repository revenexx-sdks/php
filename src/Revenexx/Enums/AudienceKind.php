<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceKind implements JsonSerializable
{
    private static AudienceKind $ACTIVE;
    private static AudienceKind $STATIC;

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

    public static function ACTIVE(): AudienceKind
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new AudienceKind('active');
        }
        return self::$ACTIVE;
    }
    public static function STATIC(): AudienceKind
    {
        if (!isset(self::$STATIC)) {
            self::$STATIC = new AudienceKind('static');
        }
        return self::$STATIC;
    }
}