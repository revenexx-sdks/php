<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AcceptLineDecision implements JsonSerializable
{
    private static AcceptLineDecision $ACCEPTED;
    private static AcceptLineDecision $DECLINED;

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

    public static function ACCEPTED(): AcceptLineDecision
    {
        if (!isset(self::$ACCEPTED)) {
            self::$ACCEPTED = new AcceptLineDecision('accepted');
        }
        return self::$ACCEPTED;
    }
    public static function DECLINED(): AcceptLineDecision
    {
        if (!isset(self::$DECLINED)) {
            self::$DECLINED = new AcceptLineDecision('declined');
        }
        return self::$DECLINED;
    }
}