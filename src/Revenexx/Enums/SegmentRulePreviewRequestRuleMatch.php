<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SegmentRulePreviewRequestRuleMatch implements JsonSerializable
{
    private static SegmentRulePreviewRequestRuleMatch $ALL;
    private static SegmentRulePreviewRequestRuleMatch $ANY;

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

    public static function ALL(): SegmentRulePreviewRequestRuleMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new SegmentRulePreviewRequestRuleMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): SegmentRulePreviewRequestRuleMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new SegmentRulePreviewRequestRuleMatch('any');
        }
        return self::$ANY;
    }
}