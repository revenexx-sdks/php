<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudiencePatchKind implements JsonSerializable
{
    private static AudiencePatchKind $ACTIVE;
    private static AudiencePatchKind $STATIC;

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

    public static function ACTIVE(): AudiencePatchKind
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new AudiencePatchKind('active');
        }
        return self::$ACTIVE;
    }
    public static function STATIC(): AudiencePatchKind
    {
        if (!isset(self::$STATIC)) {
            self::$STATIC = new AudiencePatchKind('static');
        }
        return self::$STATIC;
    }
}