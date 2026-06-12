<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class CartExportFormat implements JsonSerializable
{
    private static CartExportFormat $JSON;
    private static CartExportFormat $CSV;

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

    public static function JSON(): CartExportFormat
    {
        if (!isset(self::$JSON)) {
            self::$JSON = new CartExportFormat('json');
        }
        return self::$JSON;
    }
    public static function CSV(): CartExportFormat
    {
        if (!isset(self::$CSV)) {
            self::$CSV = new CartExportFormat('csv');
        }
        return self::$CSV;
    }
}