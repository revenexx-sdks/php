<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartExportPageEncoding implements JsonSerializable
{
    private static CartExportPageEncoding $BASE64;

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

    public static function BASE64(): CartExportPageEncoding
    {
        if (!isset(self::$BASE64)) {
            self::$BASE64 = new CartExportPageEncoding('base64');
        }
        return self::$BASE64;
    }
}