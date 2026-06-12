<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class PageStatus implements JsonSerializable
{
    private static PageStatus $DRAFT;
    private static PageStatus $PUBLISHED;
    private static PageStatus $ARCHIVED;

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

    public static function DRAFT(): PageStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new PageStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function PUBLISHED(): PageStatus
    {
        if (!isset(self::$PUBLISHED)) {
            self::$PUBLISHED = new PageStatus('published');
        }
        return self::$PUBLISHED;
    }
    public static function ARCHIVED(): PageStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new PageStatus('archived');
        }
        return self::$ARCHIVED;
    }
}