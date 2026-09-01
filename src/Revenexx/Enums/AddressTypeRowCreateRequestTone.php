<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AddressTypeRowCreateRequestTone implements JsonSerializable
{
    private static AddressTypeRowCreateRequestTone $NEUTRAL;
    private static AddressTypeRowCreateRequestTone $INFO;
    private static AddressTypeRowCreateRequestTone $SUCCESS;
    private static AddressTypeRowCreateRequestTone $WARNING;
    private static AddressTypeRowCreateRequestTone $DANGER;

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

    public static function NEUTRAL(): AddressTypeRowCreateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new AddressTypeRowCreateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): AddressTypeRowCreateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new AddressTypeRowCreateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): AddressTypeRowCreateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new AddressTypeRowCreateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): AddressTypeRowCreateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new AddressTypeRowCreateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): AddressTypeRowCreateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new AddressTypeRowCreateRequestTone('danger');
        }
        return self::$DANGER;
    }
}