<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SegmentMemberSource implements JsonSerializable
{
    private static SegmentMemberSource $MANUAL;
    private static SegmentMemberSource $RULE;

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

    public static function MANUAL(): SegmentMemberSource
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new SegmentMemberSource('manual');
        }
        return self::$MANUAL;
    }
    public static function RULE(): SegmentMemberSource
    {
        if (!isset(self::$RULE)) {
            self::$RULE = new SegmentMemberSource('rule');
        }
        return self::$RULE;
    }
}