<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SegmentRulePreviewResponseTarget implements JsonSerializable
{
    private static SegmentRulePreviewResponseTarget $ORGANIZATIONS;

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

    public static function ORGANIZATIONS(): SegmentRulePreviewResponseTarget
    {
        if (!isset(self::$ORGANIZATIONS)) {
            self::$ORGANIZATIONS = new SegmentRulePreviewResponseTarget('organizations');
        }
        return self::$ORGANIZATIONS;
    }
}