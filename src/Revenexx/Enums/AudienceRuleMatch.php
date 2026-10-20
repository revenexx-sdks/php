<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceRuleMatch implements JsonSerializable
{
    private static AudienceRuleMatch $ALL;
    private static AudienceRuleMatch $ANY;

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

    public static function ALL(): AudienceRuleMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new AudienceRuleMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): AudienceRuleMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new AudienceRuleMatch('any');
        }
        return self::$ANY;
    }
}