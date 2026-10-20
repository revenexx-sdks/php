<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ReviewRequestState implements JsonSerializable
{
    private static ReviewRequestState $ISSUED;
    private static ReviewRequestState $USED;
    private static ReviewRequestState $EXPIRED;

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

    public static function ISSUED(): ReviewRequestState
    {
        if (!isset(self::$ISSUED)) {
            self::$ISSUED = new ReviewRequestState('issued');
        }
        return self::$ISSUED;
    }
    public static function USED(): ReviewRequestState
    {
        if (!isset(self::$USED)) {
            self::$USED = new ReviewRequestState('used');
        }
        return self::$USED;
    }
    public static function EXPIRED(): ReviewRequestState
    {
        if (!isset(self::$EXPIRED)) {
            self::$EXPIRED = new ReviewRequestState('expired');
        }
        return self::$EXPIRED;
    }
}