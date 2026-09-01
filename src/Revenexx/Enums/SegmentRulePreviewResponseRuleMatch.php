<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SegmentRulePreviewResponseRuleMatch implements JsonSerializable
{
    private static SegmentRulePreviewResponseRuleMatch $ALL;
    private static SegmentRulePreviewResponseRuleMatch $ANY;

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

    public static function ALL(): SegmentRulePreviewResponseRuleMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new SegmentRulePreviewResponseRuleMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): SegmentRulePreviewResponseRuleMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new SegmentRulePreviewResponseRuleMatch('any');
        }
        return self::$ANY;
    }
}