<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TurnoverSource implements JsonSerializable
{
    private static TurnoverSource $ORDERS;
    private static TurnoverSource $IMPORT;

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

    public static function ORDERS(): TurnoverSource
    {
        if (!isset(self::$ORDERS)) {
            self::$ORDERS = new TurnoverSource('orders');
        }
        return self::$ORDERS;
    }
    public static function IMPORT(): TurnoverSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new TurnoverSource('import');
        }
        return self::$IMPORT;
    }
}