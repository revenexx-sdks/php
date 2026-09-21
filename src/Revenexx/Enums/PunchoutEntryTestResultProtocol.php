<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PunchoutEntryTestResultProtocol implements JsonSerializable
{
    private static PunchoutEntryTestResultProtocol $OCI;
    private static PunchoutEntryTestResultProtocol $CXML;
    private static PunchoutEntryTestResultProtocol $IDS;

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

    public static function OCI(): PunchoutEntryTestResultProtocol
    {
        if (!isset(self::$OCI)) {
            self::$OCI = new PunchoutEntryTestResultProtocol('oci');
        }
        return self::$OCI;
    }
    public static function CXML(): PunchoutEntryTestResultProtocol
    {
        if (!isset(self::$CXML)) {
            self::$CXML = new PunchoutEntryTestResultProtocol('cxml');
        }
        return self::$CXML;
    }
    public static function IDS(): PunchoutEntryTestResultProtocol
    {
        if (!isset(self::$IDS)) {
            self::$IDS = new PunchoutEntryTestResultProtocol('ids');
        }
        return self::$IDS;
    }
}