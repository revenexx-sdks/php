<?php

namespace Revenexx\Enums;

use JsonSerializable;

class IoProfileResourceApplyMode implements JsonSerializable
{
    private static IoProfileResourceApplyMode $UPSERT;
    private static IoProfileResourceApplyMode $FULLSYNC;
    private static IoProfileResourceApplyMode $APPEND;

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

    public static function UPSERT(): IoProfileResourceApplyMode
    {
        if (!isset(self::$UPSERT)) {
            self::$UPSERT = new IoProfileResourceApplyMode('upsert');
        }
        return self::$UPSERT;
    }
    public static function FULLSYNC(): IoProfileResourceApplyMode
    {
        if (!isset(self::$FULLSYNC)) {
            self::$FULLSYNC = new IoProfileResourceApplyMode('full-sync');
        }
        return self::$FULLSYNC;
    }
    public static function APPEND(): IoProfileResourceApplyMode
    {
        if (!isset(self::$APPEND)) {
            self::$APPEND = new IoProfileResourceApplyMode('append');
        }
        return self::$APPEND;
    }
}