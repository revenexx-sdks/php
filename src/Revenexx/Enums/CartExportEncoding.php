<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartExportEncoding implements JsonSerializable
{
    private static CartExportEncoding $BASE64;

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

    public static function BASE64(): CartExportEncoding
    {
        if (!isset(self::$BASE64)) {
            self::$BASE64 = new CartExportEncoding('base64');
        }
        return self::$BASE64;
    }
}