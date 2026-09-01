<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Mode implements JsonSerializable
{
    private static Mode $UPSERT;
    private static Mode $FULLSYNC;
    private static Mode $APPEND;

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

    public static function UPSERT(): Mode
    {
        if (!isset(self::$UPSERT)) {
            self::$UPSERT = new Mode('upsert');
        }
        return self::$UPSERT;
    }
    public static function FULLSYNC(): Mode
    {
        if (!isset(self::$FULLSYNC)) {
            self::$FULLSYNC = new Mode('full-sync');
        }
        return self::$FULLSYNC;
    }
    public static function APPEND(): Mode
    {
        if (!isset(self::$APPEND)) {
            self::$APPEND = new Mode('append');
        }
        return self::$APPEND;
    }
}