<?php

namespace Revenexx\Enums;

use JsonSerializable;

class DocumentSource implements JsonSerializable
{
    private static DocumentSource $STORAGE;
    private static DocumentSource $EXTERNAL;

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

    public static function STORAGE(): DocumentSource
    {
        if (!isset(self::$STORAGE)) {
            self::$STORAGE = new DocumentSource('storage');
        }
        return self::$STORAGE;
    }
    public static function EXTERNAL(): DocumentSource
    {
        if (!isset(self::$EXTERNAL)) {
            self::$EXTERNAL = new DocumentSource('external');
        }
        return self::$EXTERNAL;
    }
}