<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Format implements JsonSerializable
{
    private static Format $CSV;
    private static Format $XML;
    private static Format $JSON;
    private static Format $XLSX;

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

    public static function CSV(): Format
    {
        if (!isset(self::$CSV)) {
            self::$CSV = new Format('csv');
        }
        return self::$CSV;
    }
    public static function XML(): Format
    {
        if (!isset(self::$XML)) {
            self::$XML = new Format('xml');
        }
        return self::$XML;
    }
    public static function JSON(): Format
    {
        if (!isset(self::$JSON)) {
            self::$JSON = new Format('json');
        }
        return self::$JSON;
    }
    public static function XLSX(): Format
    {
        if (!isset(self::$XLSX)) {
            self::$XLSX = new Format('xlsx');
        }
        return self::$XLSX;
    }
}