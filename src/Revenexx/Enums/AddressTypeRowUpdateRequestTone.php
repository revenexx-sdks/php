<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AddressTypeRowUpdateRequestTone implements JsonSerializable
{
    private static AddressTypeRowUpdateRequestTone $NEUTRAL;
    private static AddressTypeRowUpdateRequestTone $INFO;
    private static AddressTypeRowUpdateRequestTone $SUCCESS;
    private static AddressTypeRowUpdateRequestTone $WARNING;
    private static AddressTypeRowUpdateRequestTone $DANGER;

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

    public static function NEUTRAL(): AddressTypeRowUpdateRequestTone
    {
        if (!isset(self::$NEUTRAL)) {
            self::$NEUTRAL = new AddressTypeRowUpdateRequestTone('neutral');
        }
        return self::$NEUTRAL;
    }
    public static function INFO(): AddressTypeRowUpdateRequestTone
    {
        if (!isset(self::$INFO)) {
            self::$INFO = new AddressTypeRowUpdateRequestTone('info');
        }
        return self::$INFO;
    }
    public static function SUCCESS(): AddressTypeRowUpdateRequestTone
    {
        if (!isset(self::$SUCCESS)) {
            self::$SUCCESS = new AddressTypeRowUpdateRequestTone('success');
        }
        return self::$SUCCESS;
    }
    public static function WARNING(): AddressTypeRowUpdateRequestTone
    {
        if (!isset(self::$WARNING)) {
            self::$WARNING = new AddressTypeRowUpdateRequestTone('warning');
        }
        return self::$WARNING;
    }
    public static function DANGER(): AddressTypeRowUpdateRequestTone
    {
        if (!isset(self::$DANGER)) {
            self::$DANGER = new AddressTypeRowUpdateRequestTone('danger');
        }
        return self::$DANGER;
    }
}