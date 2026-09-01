<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SegmentRuleMatch implements JsonSerializable
{
    private static SegmentRuleMatch $ALL;
    private static SegmentRuleMatch $ANY;

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

    public static function ALL(): SegmentRuleMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new SegmentRuleMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): SegmentRuleMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new SegmentRuleMatch('any');
        }
        return self::$ANY;
    }
}