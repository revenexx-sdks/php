<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceWriteKind implements JsonSerializable
{
    private static AudienceWriteKind $ACTIVE;
    private static AudienceWriteKind $STATIC;

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

    public static function ACTIVE(): AudienceWriteKind
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new AudienceWriteKind('active');
        }
        return self::$ACTIVE;
    }
    public static function STATIC(): AudienceWriteKind
    {
        if (!isset(self::$STATIC)) {
            self::$STATIC = new AudienceWriteKind('static');
        }
        return self::$STATIC;
    }
}