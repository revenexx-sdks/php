<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PunchoutEntryProbeResultEntryProbeStatus implements JsonSerializable
{
    private static PunchoutEntryProbeResultEntryProbeStatus $REACHABLE;
    private static PunchoutEntryProbeResultEntryProbeStatus $NOTFOUND;
    private static PunchoutEntryProbeResultEntryProbeStatus $NOTENTRY;
    private static PunchoutEntryProbeResultEntryProbeStatus $WRONGHOST;
    private static PunchoutEntryProbeResultEntryProbeStatus $TLS;
    private static PunchoutEntryProbeResultEntryProbeStatus $TIMEOUT;
    private static PunchoutEntryProbeResultEntryProbeStatus $UNREACHABLE;
    private static PunchoutEntryProbeResultEntryProbeStatus $UNCONFIGURED;

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

    public static function REACHABLE(): PunchoutEntryProbeResultEntryProbeStatus
    {
        if (!isset(self::$REACHABLE)) {
            self::$REACHABLE = new PunchoutEntryProbeResultEntryProbeStatus('reachable');
        }
        return self::$REACHABLE;
    }
    public static function NOTFOUND(): PunchoutEntryProbeResultEntryProbeStatus
    {
        if (!isset(self::$NOTFOUND)) {
            self::$NOTFOUND = new PunchoutEntryProbeResultEntryProbeStatus('not_found');
        }
        return self::$NOTFOUND;
    }
    public static function NOTENTRY(): PunchoutEntryProbeResultEntryProbeStatus
    {
        if (!isset(self::$NOTENTRY)) {
            self::$NOTENTRY = new PunchoutEntryProbeResultEntryProbeStatus('not_entry');
        }
        return self::$NOTENTRY;
    }
    public static function WRONGHOST(): PunchoutEntryProbeResultEntryProbeStatus
    {
        if (!isset(self::$WRONGHOST)) {
            self::$WRONGHOST = new PunchoutEntryProbeResultEntryProbeStatus('wrong_host');
        }
        return self::$WRONGHOST;
    }
    public static function TLS(): PunchoutEntryProbeResultEntryProbeStatus
    {
        if (!isset(self::$TLS)) {
            self::$TLS = new PunchoutEntryProbeResultEntryProbeStatus('tls');
        }
        return self::$TLS;
    }
    public static function TIMEOUT(): PunchoutEntryProbeResultEntryProbeStatus
    {
        if (!isset(self::$TIMEOUT)) {
            self::$TIMEOUT = new PunchoutEntryProbeResultEntryProbeStatus('timeout');
        }
        return self::$TIMEOUT;
    }
    public static function UNREACHABLE(): PunchoutEntryProbeResultEntryProbeStatus
    {
        if (!isset(self::$UNREACHABLE)) {
            self::$UNREACHABLE = new PunchoutEntryProbeResultEntryProbeStatus('unreachable');
        }
        return self::$UNREACHABLE;
    }
    public static function UNCONFIGURED(): PunchoutEntryProbeResultEntryProbeStatus
    {
        if (!isset(self::$UNCONFIGURED)) {
            self::$UNCONFIGURED = new PunchoutEntryProbeResultEntryProbeStatus('unconfigured');
        }
        return self::$UNCONFIGURED;
    }
}