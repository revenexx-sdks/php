<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceWriteRuleMatch implements JsonSerializable
{
    private static AudienceWriteRuleMatch $ALL;
    private static AudienceWriteRuleMatch $ANY;

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

    public static function ALL(): AudienceWriteRuleMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new AudienceWriteRuleMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): AudienceWriteRuleMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new AudienceWriteRuleMatch('any');
        }
        return self::$ANY;
    }
}