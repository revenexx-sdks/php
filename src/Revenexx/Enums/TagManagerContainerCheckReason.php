<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TagManagerContainerCheckReason implements JsonSerializable
{
    private static TagManagerContainerCheckReason $PUBLISH;
    private static TagManagerContainerCheckReason $POLICYCHANGE;
    private static TagManagerContainerCheckReason $MANUAL;

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

    public static function PUBLISH(): TagManagerContainerCheckReason
    {
        if (!isset(self::$PUBLISH)) {
            self::$PUBLISH = new TagManagerContainerCheckReason('publish');
        }
        return self::$PUBLISH;
    }
    public static function POLICYCHANGE(): TagManagerContainerCheckReason
    {
        if (!isset(self::$POLICYCHANGE)) {
            self::$POLICYCHANGE = new TagManagerContainerCheckReason('policy_change');
        }
        return self::$POLICYCHANGE;
    }
    public static function MANUAL(): TagManagerContainerCheckReason
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new TagManagerContainerCheckReason('manual');
        }
        return self::$MANUAL;
    }
}