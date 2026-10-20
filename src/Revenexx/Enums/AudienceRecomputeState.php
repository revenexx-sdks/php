<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceRecomputeState implements JsonSerializable
{
    private static AudienceRecomputeState $IDLE;
    private static AudienceRecomputeState $RUNNING;
    private static AudienceRecomputeState $FAILED;

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

    public static function IDLE(): AudienceRecomputeState
    {
        if (!isset(self::$IDLE)) {
            self::$IDLE = new AudienceRecomputeState('idle');
        }
        return self::$IDLE;
    }
    public static function RUNNING(): AudienceRecomputeState
    {
        if (!isset(self::$RUNNING)) {
            self::$RUNNING = new AudienceRecomputeState('running');
        }
        return self::$RUNNING;
    }
    public static function FAILED(): AudienceRecomputeState
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AudienceRecomputeState('failed');
        }
        return self::$FAILED;
    }
}