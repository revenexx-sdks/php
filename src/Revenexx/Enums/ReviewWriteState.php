<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ReviewWriteState implements JsonSerializable
{
    private static ReviewWriteState $PENDING;
    private static ReviewWriteState $PUBLISHED;

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

    public static function PENDING(): ReviewWriteState
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new ReviewWriteState('pending');
        }
        return self::$PENDING;
    }
    public static function PUBLISHED(): ReviewWriteState
    {
        if (!isset(self::$PUBLISHED)) {
            self::$PUBLISHED = new ReviewWriteState('published');
        }
        return self::$PUBLISHED;
    }
}