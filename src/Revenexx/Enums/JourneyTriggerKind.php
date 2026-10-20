<?php

namespace Revenexx\Enums;

use JsonSerializable;

class JourneyTriggerKind implements JsonSerializable
{
    private static JourneyTriggerKind $EVENT;
    private static JourneyTriggerKind $AUDIENCEJOIN;
    private static JourneyTriggerKind $LIFECYCLESTAGE;
    private static JourneyTriggerKind $DATEFIELD;

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

    public static function EVENT(): JourneyTriggerKind
    {
        if (!isset(self::$EVENT)) {
            self::$EVENT = new JourneyTriggerKind('event');
        }
        return self::$EVENT;
    }
    public static function AUDIENCEJOIN(): JourneyTriggerKind
    {
        if (!isset(self::$AUDIENCEJOIN)) {
            self::$AUDIENCEJOIN = new JourneyTriggerKind('audience_join');
        }
        return self::$AUDIENCEJOIN;
    }
    public static function LIFECYCLESTAGE(): JourneyTriggerKind
    {
        if (!isset(self::$LIFECYCLESTAGE)) {
            self::$LIFECYCLESTAGE = new JourneyTriggerKind('lifecycle_stage');
        }
        return self::$LIFECYCLESTAGE;
    }
    public static function DATEFIELD(): JourneyTriggerKind
    {
        if (!isset(self::$DATEFIELD)) {
            self::$DATEFIELD = new JourneyTriggerKind('date_field');
        }
        return self::$DATEFIELD;
    }
}