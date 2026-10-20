<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceRulePatchKind implements JsonSerializable
{
    private static AudienceRulePatchKind $GROUP;
    private static AudienceRulePatchKind $QUESTION;

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

    public static function GROUP(): AudienceRulePatchKind
    {
        if (!isset(self::$GROUP)) {
            self::$GROUP = new AudienceRulePatchKind('group');
        }
        return self::$GROUP;
    }
    public static function QUESTION(): AudienceRulePatchKind
    {
        if (!isset(self::$QUESTION)) {
            self::$QUESTION = new AudienceRulePatchKind('question');
        }
        return self::$QUESTION;
    }
}