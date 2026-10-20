<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceRuleWriteKind implements JsonSerializable
{
    private static AudienceRuleWriteKind $GROUP;
    private static AudienceRuleWriteKind $QUESTION;

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

    public static function GROUP(): AudienceRuleWriteKind
    {
        if (!isset(self::$GROUP)) {
            self::$GROUP = new AudienceRuleWriteKind('group');
        }
        return self::$GROUP;
    }
    public static function QUESTION(): AudienceRuleWriteKind
    {
        if (!isset(self::$QUESTION)) {
            self::$QUESTION = new AudienceRuleWriteKind('question');
        }
        return self::$QUESTION;
    }
}