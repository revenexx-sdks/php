<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ReviewWriteSource implements JsonSerializable
{
    private static ReviewWriteSource $ADMIN;
    private static ReviewWriteSource $IMPORT;

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

    public static function ADMIN(): ReviewWriteSource
    {
        if (!isset(self::$ADMIN)) {
            self::$ADMIN = new ReviewWriteSource('admin');
        }
        return self::$ADMIN;
    }
    public static function IMPORT(): ReviewWriteSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new ReviewWriteSource('import');
        }
        return self::$IMPORT;
    }
}