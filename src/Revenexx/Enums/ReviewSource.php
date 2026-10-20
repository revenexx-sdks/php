<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ReviewSource implements JsonSerializable
{
    private static ReviewSource $REQUEST;
    private static ReviewSource $ADMIN;
    private static ReviewSource $IMPORT;

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

    public static function REQUEST(): ReviewSource
    {
        if (!isset(self::$REQUEST)) {
            self::$REQUEST = new ReviewSource('request');
        }
        return self::$REQUEST;
    }
    public static function ADMIN(): ReviewSource
    {
        if (!isset(self::$ADMIN)) {
            self::$ADMIN = new ReviewSource('admin');
        }
        return self::$ADMIN;
    }
    public static function IMPORT(): ReviewSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new ReviewSource('import');
        }
        return self::$IMPORT;
    }
}