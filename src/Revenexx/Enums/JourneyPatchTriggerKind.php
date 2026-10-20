<?php

namespace Revenexx\Enums;

use JsonSerializable;

class JourneyPatchTriggerKind implements JsonSerializable
{
    private static JourneyPatchTriggerKind $EVENT;
    private static JourneyPatchTriggerKind $AUDIENCEJOIN;
    private static JourneyPatchTriggerKind $LIFECYCLESTAGE;
    private static JourneyPatchTriggerKind $DATEFIELD;

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

    public static function EVENT(): JourneyPatchTriggerKind
    {
        if (!isset(self::$EVENT)) {
            self::$EVENT = new JourneyPatchTriggerKind('event');
        }
        return self::$EVENT;
    }
    public static function AUDIENCEJOIN(): JourneyPatchTriggerKind
    {
        if (!isset(self::$AUDIENCEJOIN)) {
            self::$AUDIENCEJOIN = new JourneyPatchTriggerKind('audience_join');
        }
        return self::$AUDIENCEJOIN;
    }
    public static function LIFECYCLESTAGE(): JourneyPatchTriggerKind
    {
        if (!isset(self::$LIFECYCLESTAGE)) {
            self::$LIFECYCLESTAGE = new JourneyPatchTriggerKind('lifecycle_stage');
        }
        return self::$LIFECYCLESTAGE;
    }
    public static function DATEFIELD(): JourneyPatchTriggerKind
    {
        if (!isset(self::$DATEFIELD)) {
            self::$DATEFIELD = new JourneyPatchTriggerKind('date_field');
        }
        return self::$DATEFIELD;
    }
}