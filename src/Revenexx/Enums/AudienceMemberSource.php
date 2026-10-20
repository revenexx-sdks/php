<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceMemberSource implements JsonSerializable
{
    private static AudienceMemberSource $RULE;
    private static AudienceMemberSource $IMPORT;
    private static AudienceMemberSource $MANUAL;

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

    public static function RULE(): AudienceMemberSource
    {
        if (!isset(self::$RULE)) {
            self::$RULE = new AudienceMemberSource('rule');
        }
        return self::$RULE;
    }
    public static function IMPORT(): AudienceMemberSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new AudienceMemberSource('import');
        }
        return self::$IMPORT;
    }
    public static function MANUAL(): AudienceMemberSource
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new AudienceMemberSource('manual');
        }
        return self::$MANUAL;
    }
}