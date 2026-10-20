<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TriggerKind implements JsonSerializable
{
    private static TriggerKind $EVENT;
    private static TriggerKind $AUDIENCEJOIN;
    private static TriggerKind $LIFECYCLESTAGE;
    private static TriggerKind $DATEFIELD;

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

    public static function EVENT(): TriggerKind
    {
        if (!isset(self::$EVENT)) {
            self::$EVENT = new TriggerKind('event');
        }
        return self::$EVENT;
    }
    public static function AUDIENCEJOIN(): TriggerKind
    {
        if (!isset(self::$AUDIENCEJOIN)) {
            self::$AUDIENCEJOIN = new TriggerKind('audience_join');
        }
        return self::$AUDIENCEJOIN;
    }
    public static function LIFECYCLESTAGE(): TriggerKind
    {
        if (!isset(self::$LIFECYCLESTAGE)) {
            self::$LIFECYCLESTAGE = new TriggerKind('lifecycle_stage');
        }
        return self::$LIFECYCLESTAGE;
    }
    public static function DATEFIELD(): TriggerKind
    {
        if (!isset(self::$DATEFIELD)) {
            self::$DATEFIELD = new TriggerKind('date_field');
        }
        return self::$DATEFIELD;
    }
}