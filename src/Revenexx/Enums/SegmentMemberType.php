<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SegmentMemberType implements JsonSerializable
{
    private static SegmentMemberType $ORGANIZATION;
    private static SegmentMemberType $CONTACT;

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

    public static function ORGANIZATION(): SegmentMemberType
    {
        if (!isset(self::$ORGANIZATION)) {
            self::$ORGANIZATION = new SegmentMemberType('organization');
        }
        return self::$ORGANIZATION;
    }
    public static function CONTACT(): SegmentMemberType
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new SegmentMemberType('contact');
        }
        return self::$CONTACT;
    }
}