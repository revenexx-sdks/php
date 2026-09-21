<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PunchoutReturnPreviewProtocol implements JsonSerializable
{
    private static PunchoutReturnPreviewProtocol $OCI;
    private static PunchoutReturnPreviewProtocol $CXML;
    private static PunchoutReturnPreviewProtocol $IDS;

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

    public static function OCI(): PunchoutReturnPreviewProtocol
    {
        if (!isset(self::$OCI)) {
            self::$OCI = new PunchoutReturnPreviewProtocol('oci');
        }
        return self::$OCI;
    }
    public static function CXML(): PunchoutReturnPreviewProtocol
    {
        if (!isset(self::$CXML)) {
            self::$CXML = new PunchoutReturnPreviewProtocol('cxml');
        }
        return self::$CXML;
    }
    public static function IDS(): PunchoutReturnPreviewProtocol
    {
        if (!isset(self::$IDS)) {
            self::$IDS = new PunchoutReturnPreviewProtocol('ids');
        }
        return self::$IDS;
    }
}