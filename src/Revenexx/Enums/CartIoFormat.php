<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartIoFormat implements JsonSerializable
{
    private static CartIoFormat $JSON;
    private static CartIoFormat $CSV;
    private static CartIoFormat $XLSX;

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

    public static function JSON(): CartIoFormat
    {
        if (!isset(self::$JSON)) {
            self::$JSON = new CartIoFormat('json');
        }
        return self::$JSON;
    }
    public static function CSV(): CartIoFormat
    {
        if (!isset(self::$CSV)) {
            self::$CSV = new CartIoFormat('csv');
        }
        return self::$CSV;
    }
    public static function XLSX(): CartIoFormat
    {
        if (!isset(self::$XLSX)) {
            self::$XLSX = new CartIoFormat('xlsx');
        }
        return self::$XLSX;
    }
}