<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceRuleKind implements JsonSerializable
{
    private static AudienceRuleKind $GROUP;
    private static AudienceRuleKind $QUESTION;

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

    public static function GROUP(): AudienceRuleKind
    {
        if (!isset(self::$GROUP)) {
            self::$GROUP = new AudienceRuleKind('group');
        }
        return self::$GROUP;
    }
    public static function QUESTION(): AudienceRuleKind
    {
        if (!isset(self::$QUESTION)) {
            self::$QUESTION = new AudienceRuleKind('question');
        }
        return self::$QUESTION;
    }
}