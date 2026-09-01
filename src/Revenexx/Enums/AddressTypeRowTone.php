<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AddressTypeRowTone implements JsonSerializable
{
    private static AddressTypeRowTone $NEUTRAL;
    private static AddressTypeRowTone $INFO;
    private static AddressTypeRowTone $SUCCESS;
    private static AddressTypeRowTone $WARNING;
    private static AddressTypeRowTone $DANGER;

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

    public static function NEUTRAL(): AddressTypeRowTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new AddressTypeRowTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): AddressTypeRowTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new AddressTypeRowTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): AddressTypeRowTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new AddressTypeRowTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): AddressTypeRowTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new AddressTypeRowTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): AddressTypeRowTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new AddressTypeRowTone('danger');
        }
        return self::$DANGER;
    }
}