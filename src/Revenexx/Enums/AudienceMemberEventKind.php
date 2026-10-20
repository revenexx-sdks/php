<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceMemberEventKind implements JsonSerializable
{
    private static AudienceMemberEventKind $ADDED;
    private static AudienceMemberEventKind $REMOVED;

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

    public static function ADDED(): AudienceMemberEventKind
    {
        if (!isset(self::$ADDED)) {
            self::$ADDED = new AudienceMemberEventKind('added');
        }
        return self::$ADDED;
    }
    public static function REMOVED(): AudienceMemberEventKind
    {
        if (!isset(self::$REMOVED)) {
            self::$REMOVED = new AudienceMemberEventKind('removed');
        }
        return self::$REMOVED;
    }
}