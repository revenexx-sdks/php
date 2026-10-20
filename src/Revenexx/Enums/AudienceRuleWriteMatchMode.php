<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceRuleWriteMatchMode implements JsonSerializable
{
    private static AudienceRuleWriteMatchMode $ALL;
    private static AudienceRuleWriteMatchMode $ANY;

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

    public static function ALL(): AudienceRuleWriteMatchMode
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new AudienceRuleWriteMatchMode('all');
        }
        return self::$ALL;
    }
    public static function ANY(): AudienceRuleWriteMatchMode
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new AudienceRuleWriteMatchMode('any');
        }
        return self::$ANY;
    }
}