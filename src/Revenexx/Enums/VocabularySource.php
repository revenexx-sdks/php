<?php

namespace Revenexx\Enums;

use JsonSerializable;

class VocabularySource implements JsonSerializable
{
    private static VocabularySource $SCHEMA;
    private static VocabularySource $TABLE;
    private static VocabularySource $TENANT;
    private static VocabularySource $DEFAULTS;

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

    public static function SCHEMA(): VocabularySource
    {
        if (!isset(self::$SCHEMA)) {
            self::$SCHEMA = new VocabularySource('schema');
        }
        return self::$SCHEMA;
    }
    public static function TABLE(): VocabularySource
    {
        if (!isset(self::$TABLE)) {
            self::$TABLE = new VocabularySource('table');
        }
        return self::$TABLE;
    }
    public static function TENANT(): VocabularySource
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new VocabularySource('tenant');
        }
        return self::$TENANT;
    }
    public static function DEFAULTS(): VocabularySource
    {
        if (!isset(self::$DEFAULTS)) {
            self::$DEFAULTS = new VocabularySource('defaults');
        }
        return self::$DEFAULTS;
    }
}