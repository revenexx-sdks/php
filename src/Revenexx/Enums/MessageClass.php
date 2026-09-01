<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MessageClass implements JsonSerializable
{
    private static MessageClass $TRANSACTIONAL;
    private static MessageClass $MARKETING;

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

    public static function TRANSACTIONAL(): MessageClass
    {
        if (!isset(self::$TRANSACTIONAL)) {
            self::$TRANSACTIONAL = new MessageClass('transactional');
        }
        return self::$TRANSACTIONAL;
    }
    public static function MARKETING(): MessageClass
    {
        if (!isset(self::$MARKETING)) {
            self::$MARKETING = new MessageClass('marketing');
        }
        return self::$MARKETING;
    }
}