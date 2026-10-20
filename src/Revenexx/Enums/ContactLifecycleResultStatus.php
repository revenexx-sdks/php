<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactLifecycleResultStatus implements JsonSerializable
{
    private static ContactLifecycleResultStatus $INVITED;
    private static ContactLifecycleResultStatus $ACTIVE;
    private static ContactLifecycleResultStatus $BLOCKED;

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

    public static function INVITED(): ContactLifecycleResultStatus
    {
        if (!isset(self::$INVITED)) {
            self::$INVITED = new ContactLifecycleResultStatus('invited');
        }
        return self::$INVITED;
    }
    public static function ACTIVE(): ContactLifecycleResultStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new ContactLifecycleResultStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function BLOCKED(): ContactLifecycleResultStatus
    {
        if (!isset(self::$BLOCKED)) {
            self::$BLOCKED = new ContactLifecycleResultStatus('blocked');
        }
        return self::$BLOCKED;
    }
}