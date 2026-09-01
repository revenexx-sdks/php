<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SegmentRulePreviewRequestTarget implements JsonSerializable
{
    private static SegmentRulePreviewRequestTarget $ORGANIZATIONS;

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

    public static function ORGANIZATIONS(): SegmentRulePreviewRequestTarget
    {
        if (!isset(self::$ORGANIZATIONS)) {
            self::$ORGANIZATIONS = new SegmentRulePreviewRequestTarget('organizations');
        }
        return self::$ORGANIZATIONS;
    }
}