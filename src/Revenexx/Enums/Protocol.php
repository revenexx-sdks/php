<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Protocol implements JsonSerializable
{
    private static Protocol $OCI;
    private static Protocol $CXML;

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

    public static function OCI(): Protocol
    {
        if (!isset(self::$OCI)) {
            self::$OCI = new Protocol('oci');
        }
        return self::$OCI;
    }
    public static function CXML(): Protocol
    {
        if (!isset(self::$CXML)) {
            self::$CXML = new Protocol('cxml');
        }
        return self::$CXML;
    }
}