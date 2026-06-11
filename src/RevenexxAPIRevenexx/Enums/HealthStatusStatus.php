<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class HealthStatusStatus implements JsonSerializable
{
    private static HealthStatusStatus $PASS;
    private static HealthStatusStatus $FAIL;

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

    public static function PASS(): HealthStatusStatus
    {
        if (!isset(self::$PASS)) {
            self::$PASS = new HealthStatusStatus('pass');
        }
        return self::$PASS;
    }
    public static function FAIL(): HealthStatusStatus
    {
        if (!isset(self::$FAIL)) {
            self::$FAIL = new HealthStatusStatus('fail');
        }
        return self::$FAIL;
    }
}