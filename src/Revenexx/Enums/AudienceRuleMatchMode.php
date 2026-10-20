<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceRuleMatchMode implements JsonSerializable
{
    private static AudienceRuleMatchMode $ALL;
    private static AudienceRuleMatchMode $ANY;

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

    public static function ALL(): AudienceRuleMatchMode
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new AudienceRuleMatchMode('all');
        }
        return self::$ALL;
    }
    public static function ANY(): AudienceRuleMatchMode
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new AudienceRuleMatchMode('any');
        }
        return self::$ANY;
    }
}