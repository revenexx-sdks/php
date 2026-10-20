<?php

namespace Revenexx\Enums;

use JsonSerializable;

class JourneyWriteTriggerKind implements JsonSerializable
{
    private static JourneyWriteTriggerKind $EVENT;
    private static JourneyWriteTriggerKind $AUDIENCEJOIN;
    private static JourneyWriteTriggerKind $LIFECYCLESTAGE;
    private static JourneyWriteTriggerKind $DATEFIELD;

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

    public static function EVENT(): JourneyWriteTriggerKind
    {
        if (!isset(self::$EVENT)) {
            self::$EVENT = new JourneyWriteTriggerKind('event');
        }
        return self::$EVENT;
    }
    public static function AUDIENCEJOIN(): JourneyWriteTriggerKind
    {
        if (!isset(self::$AUDIENCEJOIN)) {
            self::$AUDIENCEJOIN = new JourneyWriteTriggerKind('audience_join');
        }
        return self::$AUDIENCEJOIN;
    }
    public static function LIFECYCLESTAGE(): JourneyWriteTriggerKind
    {
        if (!isset(self::$LIFECYCLESTAGE)) {
            self::$LIFECYCLESTAGE = new JourneyWriteTriggerKind('lifecycle_stage');
        }
        return self::$LIFECYCLESTAGE;
    }
    public static function DATEFIELD(): JourneyWriteTriggerKind
    {
        if (!isset(self::$DATEFIELD)) {
            self::$DATEFIELD = new JourneyWriteTriggerKind('date_field');
        }
        return self::$DATEFIELD;
    }
}