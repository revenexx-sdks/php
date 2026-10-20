<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudiencesRulesCreateKind implements JsonSerializable
{
    private static AudiencesRulesCreateKind $GROUP;
    private static AudiencesRulesCreateKind $QUESTION;

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

    public static function GROUP(): AudiencesRulesCreateKind
    {
        if (!isset(self::$GROUP)) {
            self::$GROUP = new AudiencesRulesCreateKind('group');
        }
        return self::$GROUP;
    }
    public static function QUESTION(): AudiencesRulesCreateKind
    {
        if (!isset(self::$QUESTION)) {
            self::$QUESTION = new AudiencesRulesCreateKind('question');
        }
        return self::$QUESTION;
    }
}