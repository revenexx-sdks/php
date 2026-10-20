<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudiencePatchRuleMatch implements JsonSerializable
{
    private static AudiencePatchRuleMatch $ALL;
    private static AudiencePatchRuleMatch $ANY;

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

    public static function ALL(): AudiencePatchRuleMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new AudiencePatchRuleMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): AudiencePatchRuleMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new AudiencePatchRuleMatch('any');
        }
        return self::$ANY;
    }
}