<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ReviewState implements JsonSerializable
{
    private static ReviewState $PENDING;
    private static ReviewState $PUBLISHED;
    private static ReviewState $REJECTED;

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

    public static function PENDING(): ReviewState
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new ReviewState('pending');
        }
        return self::$PENDING;
    }
    public static function PUBLISHED(): ReviewState
    {
        if (!isset(self::$PUBLISHED)) {
            self::$PUBLISHED = new ReviewState('published');
        }
        return self::$PUBLISHED;
    }
    public static function REJECTED(): ReviewState
    {
        if (!isset(self::$REJECTED)) {
            self::$REJECTED = new ReviewState('rejected');
        }
        return self::$REJECTED;
    }
}