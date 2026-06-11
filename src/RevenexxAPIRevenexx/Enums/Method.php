<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class Method implements JsonSerializable
{
    private static Method $GET;
    private static Method $POST;
    private static Method $PUT;
    private static Method $PATCH;
    private static Method $DELETE;
    private static Method $OPTIONS;
    private static Method $HEAD;

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

    public static function GET(): Method
    {
        if (!isset(self::$GET)) {
            self::$GET = new Method('GET');
        }
        return self::$GET;
    }
    public static function POST(): Method
    {
        if (!isset(self::$POST)) {
            self::$POST = new Method('POST');
        }
        return self::$POST;
    }
    public static function PUT(): Method
    {
        if (!isset(self::$PUT)) {
            self::$PUT = new Method('PUT');
        }
        return self::$PUT;
    }
    public static function PATCH(): Method
    {
        if (!isset(self::$PATCH)) {
            self::$PATCH = new Method('PATCH');
        }
        return self::$PATCH;
    }
    public static function DELETE(): Method
    {
        if (!isset(self::$DELETE)) {
            self::$DELETE = new Method('DELETE');
        }
        return self::$DELETE;
    }
    public static function OPTIONS(): Method
    {
        if (!isset(self::$OPTIONS)) {
            self::$OPTIONS = new Method('OPTIONS');
        }
        return self::$OPTIONS;
    }
    public static function HEAD(): Method
    {
        if (!isset(self::$HEAD)) {
            self::$HEAD = new Method('HEAD');
        }
        return self::$HEAD;
    }
}