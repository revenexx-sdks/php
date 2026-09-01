<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SegmentRulesTarget implements JsonSerializable
{
    private static SegmentRulesTarget $ORGANIZATIONS;

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

    public static function ORGANIZATIONS(): SegmentRulesTarget
    {
        if (!isset(self::$ORGANIZATIONS)) {
            self::$ORGANIZATIONS = new SegmentRulesTarget('organizations');
        }
        return self::$ORGANIZATIONS;
    }
}