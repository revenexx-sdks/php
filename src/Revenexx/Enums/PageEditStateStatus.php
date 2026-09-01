<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PageEditStateStatus implements JsonSerializable
{
    private static PageEditStateStatus $ACTIVE;
    private static PageEditStateStatus $SCHEDULED;
    private static PageEditStateStatus $ARCHIVED;
    private static PageEditStateStatus $PUBLISHED;

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

    public static function ACTIVE(): PageEditStateStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new PageEditStateStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function SCHEDULED(): PageEditStateStatus
    {
        if (!isset(self::$SCHEDULED)) {
            self::$SCHEDULED = new PageEditStateStatus('scheduled');
        }
        return self::$SCHEDULED;
    }
    public static function ARCHIVED(): PageEditStateStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new PageEditStateStatus('archived');
        }
        return self::$ARCHIVED;
    }
    public static function PUBLISHED(): PageEditStateStatus
    {
        if (!isset(self::$PUBLISHED)) {
            self::$PUBLISHED = new PageEditStateStatus('published');
        }
        return self::$PUBLISHED;
    }
}