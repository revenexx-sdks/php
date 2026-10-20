<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceSyncState implements JsonSerializable
{
    private static AudienceSyncState $IDLE;
    private static AudienceSyncState $REQUESTED;
    private static AudienceSyncState $SYNCED;
    private static AudienceSyncState $FAILED;

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

    public static function IDLE(): AudienceSyncState
    {
        if (!isset(self::$IDLE)) {
            self::$IDLE = new AudienceSyncState('idle');
        }
        return self::$IDLE;
    }
    public static function REQUESTED(): AudienceSyncState
    {
        if (!isset(self::$REQUESTED)) {
            self::$REQUESTED = new AudienceSyncState('requested');
        }
        return self::$REQUESTED;
    }
    public static function SYNCED(): AudienceSyncState
    {
        if (!isset(self::$SYNCED)) {
            self::$SYNCED = new AudienceSyncState('synced');
        }
        return self::$SYNCED;
    }
    public static function FAILED(): AudienceSyncState
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AudienceSyncState('failed');
        }
        return self::$FAILED;
    }
}