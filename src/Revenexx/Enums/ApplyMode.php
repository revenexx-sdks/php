<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ApplyMode implements JsonSerializable
{
    private static ApplyMode $UPSERT;
    private static ApplyMode $FULLSYNC;
    private static ApplyMode $APPEND;

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

    public static function UPSERT(): ApplyMode
    {
        if (!isset(self::$UPSERT)) {
            self::$UPSERT = new ApplyMode('upsert');
        }
        return self::$UPSERT;
    }
    public static function FULLSYNC(): ApplyMode
    {
        if (!isset(self::$FULLSYNC)) {
            self::$FULLSYNC = new ApplyMode('full-sync');
        }
        return self::$FULLSYNC;
    }
    public static function APPEND(): ApplyMode
    {
        if (!isset(self::$APPEND)) {
            self::$APPEND = new ApplyMode('append');
        }
        return self::$APPEND;
    }
}