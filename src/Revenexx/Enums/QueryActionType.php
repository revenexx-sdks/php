<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QueryActionType implements JsonSerializable
{
    private static QueryActionType $REDIRECT;
    private static QueryActionType $BANNER;
    private static QueryActionType $METADATA;

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

    public static function REDIRECT(): QueryActionType
    {
        if (!isset(self::$REDIRECT)) {
            self::$REDIRECT = new QueryActionType('redirect');
        }
        return self::$REDIRECT;
    }
    public static function BANNER(): QueryActionType
    {
        if (!isset(self::$BANNER)) {
            self::$BANNER = new QueryActionType('banner');
        }
        return self::$BANNER;
    }
    public static function METADATA(): QueryActionType
    {
        if (!isset(self::$METADATA)) {
            self::$METADATA = new QueryActionType('metadata');
        }
        return self::$METADATA;
    }
}