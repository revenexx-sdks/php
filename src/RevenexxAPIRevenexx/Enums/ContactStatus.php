<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class ContactStatus implements JsonSerializable
{
    private static ContactStatus $INVITED;
    private static ContactStatus $ACTIVE;
    private static ContactStatus $BLOCKED;

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

    public static function INVITED(): ContactStatus
    {
        if (!isset(self::$INVITED)) {
            self::$INVITED = new ContactStatus('invited');
        }
        return self::$INVITED;
    }
    public static function ACTIVE(): ContactStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new ContactStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function BLOCKED(): ContactStatus
    {
        if (!isset(self::$BLOCKED)) {
            self::$BLOCKED = new ContactStatus('blocked');
        }
        return self::$BLOCKED;
    }
}