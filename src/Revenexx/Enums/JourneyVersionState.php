<?php

namespace Revenexx\Enums;

use JsonSerializable;

class JourneyVersionState implements JsonSerializable
{
    private static JourneyVersionState $DRAFT;
    private static JourneyVersionState $LIVE;
    private static JourneyVersionState $RETIRED;

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

    public static function DRAFT(): JourneyVersionState
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new JourneyVersionState('draft');
        }
        return self::$DRAFT;
    }
    public static function LIVE(): JourneyVersionState
    {
        if (!isset(self::$LIVE)) {
            self::$LIVE = new JourneyVersionState('live');
        }
        return self::$LIVE;
    }
    public static function RETIRED(): JourneyVersionState
    {
        if (!isset(self::$RETIRED)) {
            self::$RETIRED = new JourneyVersionState('retired');
        }
        return self::$RETIRED;
    }
}