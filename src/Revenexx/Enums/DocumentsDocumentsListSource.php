<?php

namespace Revenexx\Enums;

use JsonSerializable;

class DocumentsDocumentsListSource implements JsonSerializable
{
    private static DocumentsDocumentsListSource $STORAGE;
    private static DocumentsDocumentsListSource $EXTERNAL;

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

    public static function STORAGE(): DocumentsDocumentsListSource
    {
        if (!isset(self::$STORAGE)) {
            self::$STORAGE = new DocumentsDocumentsListSource('storage');
        }
        return self::$STORAGE;
    }
    public static function EXTERNAL(): DocumentsDocumentsListSource
    {
        if (!isset(self::$EXTERNAL)) {
            self::$EXTERNAL = new DocumentsDocumentsListSource('external');
        }
        return self::$EXTERNAL;
    }
}