<?php

namespace Revenexx\Enums;

use JsonSerializable;

class JourneyTemplateTriggerKind implements JsonSerializable
{
    private static JourneyTemplateTriggerKind $EVENT;
    private static JourneyTemplateTriggerKind $AUDIENCEJOIN;
    private static JourneyTemplateTriggerKind $LIFECYCLESTAGE;
    private static JourneyTemplateTriggerKind $DATEFIELD;

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

    public static function EVENT(): JourneyTemplateTriggerKind
    {
        if (!isset(self::$EVENT)) {
            self::$EVENT = new JourneyTemplateTriggerKind('event');
        }
        return self::$EVENT;
    }
    public static function AUDIENCEJOIN(): JourneyTemplateTriggerKind
    {
        if (!isset(self::$AUDIENCEJOIN)) {
            self::$AUDIENCEJOIN = new JourneyTemplateTriggerKind('audience_join');
        }
        return self::$AUDIENCEJOIN;
    }
    public static function LIFECYCLESTAGE(): JourneyTemplateTriggerKind
    {
        if (!isset(self::$LIFECYCLESTAGE)) {
            self::$LIFECYCLESTAGE = new JourneyTemplateTriggerKind('lifecycle_stage');
        }
        return self::$LIFECYCLESTAGE;
    }
    public static function DATEFIELD(): JourneyTemplateTriggerKind
    {
        if (!isset(self::$DATEFIELD)) {
            self::$DATEFIELD = new JourneyTemplateTriggerKind('date_field');
        }
        return self::$DATEFIELD;
    }
}