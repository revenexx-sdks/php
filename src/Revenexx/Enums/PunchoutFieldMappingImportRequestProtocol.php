<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PunchoutFieldMappingImportRequestProtocol implements JsonSerializable
{
    private static PunchoutFieldMappingImportRequestProtocol $OCI;
    private static PunchoutFieldMappingImportRequestProtocol $CXML;

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

    public static function OCI(): PunchoutFieldMappingImportRequestProtocol
    {
        if (!isset(self::$OCI)) {
            self::$OCI = new PunchoutFieldMappingImportRequestProtocol('oci');
        }
        return self::$OCI;
    }
    public static function CXML(): PunchoutFieldMappingImportRequestProtocol
    {
        if (!isset(self::$CXML)) {
            self::$CXML = new PunchoutFieldMappingImportRequestProtocol('cxml');
        }
        return self::$CXML;
    }
}